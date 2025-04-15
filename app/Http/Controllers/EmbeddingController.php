<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Document;
use App\Models\HistoryChat;
use App\Models\Setting;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Barryvdh\DomPDF\Facade\Pdf;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Storage;
use Parsedown;

class EmbeddingController extends Controller
{
    // Tampilkan form untuk memasukkan konten
    public function showInsertForm()
    {
        return view('embedding.insert');
    }

    // Tangani form submission untuk insert dokumen dan embedding
    public function insertDocument(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        // Ambil konten yang dimasukkan oleh pengguna
        $content = $request->input('content');

        // // Dapatkan embedding dari OpenAI
        // $embedding = $this->generateEmbeddingFromOpenAI($content);

        // Dapatkan embedding dari Phython
        $embedding = $this->getEmbeddingPython($content);

        // Simpan content dan embedding ke database
        $document = new Document();
        $document->content = $content;
        $document->embedding = $embedding;
        $document->save();

        // Redirect ke form dengan pesan sukses
        return redirect()->route('insertForm')->with('success', 'Document successfully inserted!');
    }

    private function getEmbeddingPython($text)
    {
        if (!$text) {
            return response()->json(['error' => 'Text is required'], 400);
        }

        try {
            $client = new Client();
            $response = $client->post(env('PYTHON_API_HOST') . '/embed', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'text' => $text
                ]
            ]);
            $data = json_decode($response->getBody(), true);
            return $data['embedding'] ?? [];
        } catch (\Exception $e) {
            // Menangani jika ada error dalam request
            return response()->json(['error' => 'Error retrieving embedding from python: ' . $e->getMessage()]);
        }
    }

    private function getTokenPython($text, $modelAI = "")
    {
        if (!$text) {
            return response()->json(['error' => 'Text is required'], 400);
        }

        try {
            $client = new Client();
            $response = $client->post(env('PYTHON_API_HOST') . '/count-tokens', [
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    'text' => $text,
                    'model' => $modelAI
                ]
            ]);
            $data = json_decode($response->getBody(), true);
            return $data['tokens'] ?? [];
        } catch (\Exception $e) {
            // Menangani jika ada error dalam request
            return response()->json(['error' => 'Error retrieving tokens from python: ' . $e->getMessage()]);
        }
    }

    private function getDocumentKnowledge($userQuestion)
    {
        // // Get the embedding for the user's question
        // $questionEmbedding = $this->getEmbeddingFromOpenAI($userQuestion);
        $questionEmbedding = $this->getEmbeddingPython($userQuestion);

        $threshold = intval(Session::get('setting_ai.threshold')); //jika pakai embedding python 0.3 sedangkan openai 0.789
        $embeddingString = implode(',', $questionEmbedding);
        $relevantDocs = Document::selectRaw("content, 1 - (embedding <=> ARRAY[{$embeddingString}]::vector) AS similarity")
            ->whereRaw("1 - (embedding <=> ARRAY[{$embeddingString}]::vector) >= ?", [$threshold])
            ->orderBy('similarity', 'desc')
            ->get()
            ->toArray();

        $revisedDocs = $relevantDocs;
        // $revisedDocs = $this->evaluateRelevantDocs($relevantDocs, $userQuestion, $questionEmbedding); //pengecekan 2 kali
        // Cek apakah ada dokumen relevan yang ditemukan
        // if (!empty($revisedDocs)) {
        $documentContent = "";
        // Combine documents into a single context string
        foreach ($revisedDocs as $rowRevisiedDocs) {
            $documentContent .= trim($rowRevisiedDocs["content"]);
        }

        return $documentContent;
    }

    function convertUrlsToLinks($text)
    {
        $pattern = '/(https?:\/\/[^\s<]+)/'; // Mendeteksi URL yang diawali dengan http:// atau https://

        return preg_replace_callback($pattern, function ($matches) {
            $url = $matches[0];
            $fileName = basename($url); // Ambil nama file dari URL
            return "<a href='$url' target='_blank' class='btn btn-link text-blue'>$fileName</a>"; // Konversi ke hyperlink
        }, $text);
    }

    private function replaceProperString($content)
    {
        $content = $this->convertUrlsToLinks($content);

        $parsedown = new Parsedown();
        $content = $parsedown->text($content);
        return $content;
    }

    private function extractJson($text)
    {
        if (preg_match('/(\{.*\}|\[.*\])/s', $text, $matches)) {
            return $matches[0];
        }
        return false;
    }

    private function insertHistoryChat($role, $content)
    {
        $dataInsertHistoryChat = [
            'chat_id' => Session::get('chat_id'),
            'role' => $role,
            'content' => $content
        ];
        HistoryChat::create($dataInsertHistoryChat);
    }

    // Fungsi untuk mendapatkan jawaban dari OpenAI menggunakan Guzzle
    private function getAnswerFromOpenAI($documentContent, $userQuestion)
    {
        if (!Session::has('chat_id')) {
            Session::put('chat_id', (string) Str::uuid());
        }

        $messages = array();
        $messages[] = [
            "role" => "system",
            "content" => "Nama kamu adalah CIA (Colliers Indonesia AI), personal asisten yang sangat membantu dalam menjawab semua pertanyaan seputar Colliers Intranet yang di buat oleh IT team development Colliers Indonesia."
                . "Jawab dengan bahasa sesuai dengan bahasa yang di gunakan oleh pihak yang bertanya, jika bertanya dalam bahasa inggris harus di jawab bahasa inggris kecuali di minta menggunakan bahasa lainnya."
                . "Jawablah semua pertanyaan dengan akurat berdasarkan pedoman yang tersedia. "
                . "Berikan jawaban yang paling benar dalam bentuk singkat, padat dan jelas."
                . "Jawablah dengan percaya diri."
                . "Jika yakin dengan jawabanmu, jangan meminta maaf atau mengubah jawaban hanya karena ditanya ulang."
                . "Klarifikasi hanya jika memang ada kesalahan yang jelas."

                //prompt untuk PDF
                . 'Jika user meminta PDF, pastikan balas dengan tanpa parsedown dan jangan pakai format lain selain format JSON berikut: {"type": "pdf","title":"nama pdf", "content": "HTML untuk judul dan isi PDF", "text_gpt":"kata-kata untuk user"}. Jika tidak, balas dengan teks biasa.'

                //prompt untuk grafik
                . 'Jika user meminta grafik atau chart, balas dalam format JSON berikut tanpa menggunakan parsedown atau format lain: {"type": "chart","content": "HTML lengkap dengan <canvas> yang memiliki ID unik dan style width & height, serta script dalam format JSON untuk Chart.js beserta judul chartnya.","text_gpt": "Penjelasan grafik."}'
                . 'Pastikan variable grafik dan ID <canvas> selalu unik dan berformat ID berdasarkan model chart, judul chart dan UUID misal: model_chart_judul_UUID.'
                . 'Gunakan style="width: 100%; max-width: 600px; height: 400px;" pada elemen <canvas> untuk memastikan tampil dengan baik.'
                . 'Jika user tidak meminta grafik, balas dengan teks biasa.'

                //prompt untuk menggunakan table
                . "Jika user meminta list, pastikan balas menggunakan table."
        ];

        //insert chat history pengetahuan assistant
        $this->insertHistoryChat("assistant", $documentContent);

        //insert chat history pertanyaan user
        $this->insertHistoryChat("user", $userQuestion);

        //ambil history 5 percakapan terakhir
        $getLastMessages = HistoryChat::select("role", "content", "created_at")
            ->where("chat_id", Session::get('chat_id'))
            ->orderBy("created_at", "DESC")
            ->limit(5)
            ->get()
            ->toArray();

        // Urutkan berdasarkan created_at ASC
        usort($getLastMessages, function ($a, $b) {
            return strtotime($a["created_at"]) - strtotime($b["created_at"]);
        });

        // Hapus created_at dari array
        $getLastMessages = array_map(function ($item) {
            unset($item["created_at"]);
            return $item;
        }, $getLastMessages);

        $messages = array_merge($messages, $getLastMessages);

        //start perhitungan token
        $summaryTokens = 0;
        foreach ($messages as $rowMessages) {
            $summaryTokens += isset($rowMessages["content"]) && $rowMessages["content"] ? $this->getTokenPython($rowMessages["content"], Session::get("setting_ai.model")) : 0;
        }
        //end perhitungan token

        $apiKey = env('OPENAI_API_KEY');  // Ambil API key dari .env
        $client = new Client();  // Membuat instance Guzzle Client
        $url = "https://api.openai.com/v1/chat/completions";  // Endpoint untuk GPT-4 Turbo
        // Data yang akan dikirim ke OpenAI
        $data = [
            "model" => Session::get("setting_ai.model"),
            "messages" => $messages,
            "temperature" => intval(Session::get('setting_ai.temperature')),  // Mengatur tingkat kreativitas jawaban, semakin kecil semakin kecil kreativitasnya 0 s/d 1
            "top_p" => 0.7, //Mengatur akurat/tidaknya respon jawaban, semakin kecil semakin akurat respon jawabannya 0 s/d 1
            // "stop" => ["\n\n"]  // Berhenti jika ada dua baris baru
        ];

        try {
            // Mengirimkan permintaan POST ke OpenAI API dengan Guzzle
            $response = $client->post($url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $apiKey,
                ],
                'json' => $data,  // Mengirim data dalam format JSON
            ]);

            // Mendapatkan dan memproses response
            $responseBody = json_decode($response->getBody()->getContents(), true);
            $responseContent = $responseBody['choices'][0]['message']['content'];

            //check apakah terdapat json dalam response content chat gpt
            $getJsonData = $this->extractJson($responseContent, true);
            if ($getJsonData) {
                $chatResponse = json_decode($getJsonData, true);
                if ($chatResponse) {
                    // Jika ChatGPT menentukan bahwa user meminta PDF
                    if (isset($chatResponse['type']) && $chatResponse['type'] === 'pdf') {
                        $pdf = PDF::loadHTML($chatResponse['content']);

                        $fileName = $chatResponse['title'] . now()->timestamp . '.pdf';
                        $fileName = preg_replace('/[^A-Za-z0-9_]/', '_', trim($fileName));
                        $filePath = 'pdf/' . $fileName; // Lokasi penyimpanan di storage
                        Storage::put('public/' . $filePath, $pdf->output());
                        $pdfUrl = asset("storage/" . $filePath);

                        //tambahkan text gpt
                        $result = $chatResponse['text_gpt'] . "<br>" . $pdfUrl;
                    } else if (isset($chatResponse['type']) && $chatResponse['type'] === 'chart') {
                        $result = $chatResponse["text_gpt"] . "\n" . $chatResponse["content"];
                    } else {
                        $result = json_encode($chatResponse);
                    }
                } else {
                    // Mengembalikan hasil jawaban dari response, jika ada
                    $result = $responseContent ?? 'No answer could be generated.';
                }
            } else {
                // Mengembalikan hasil jawaban dari response, jika ada
                $result = $responseContent ?? 'No answer could be generated.';
            }
            return $result;
        } catch (\Exception $e) {
            // Menangani error jika permintaan gagal
            return 'Error retrieving answer from OpenAI: ' . $e->getMessage();
        }
    }

    //IFRAME START
    public function index_iframe()
    {
        Session::forget(['chat_history', 'chat_id']);
        if (!Session::has('setting_ai')) {
            $getSetting = Setting::select('model', 'threshold', 'temperature')
                ->first()
                ->toArray();
            Session::put('setting_ai', $getSetting);
        }
        return view('embedding.index_iframe');
    }

    public function chat(Request $request) //CHAT GPT BIASA
    {
        $requestData = $request->input();
        $employeeName = isset($requestData['p']) && $requestData['p'] ? ' ' . ucwords($requestData['p']) : NULL;
        $employeeId = isset($requestData['q']) && $requestData['q'] ? explode("-", $requestData['q'])[0] : NULL;

        //START SEARCH THE ANSWER FROM DATABASE
        // Get the user's question
        $userQuestion = isset($requestData['message']) && $requestData['message'] ? $requestData['message'] : "";
        $documentContent = "";
        if ($userQuestion) {
            $documentContent = $this->getDocumentKnowledge($userQuestion);
        }

        // Get the response from OpenAI
        $answer = $this->getAnswerFromOpenAI($documentContent, $userQuestion);

        $responseText = '<div class="d-flex justify-content-start mb-2">';
        $responseText .= '<img src="' . asset('assets/images/colliers-icon.jpg') . '" class="rounded-circle user_img_msg">';
        $responseText .= '<div class="msg_container_send">';
        $responseText .= $this->replaceProperString($answer);

        //insert chat history jawaban pertanyaan dari user
        $this->insertHistoryChat("assistant", $answer);

        // $responseText .= '<span class="msg_time_send">8:55 AM, Today</span>';
        $responseText .= '</div><div class="img_cont_msg">';
        $responseText .= '</div>';
        $responseText .= '</div>';
        return response()->json([
            'response' => 200,
            'responseText' => $responseText
        ]);
    }

    //SETTING
    public function indexSetting()
    {
        $getSetting = Setting::first();
        return view('embedding.index_setting', ['data' => $getSetting]);
    }

    public function insertSetting(Request $request)
    {
        $request->validate([
            'model_ai' => 'required|string',
            'threshold_ai' => 'required|string',
            'temperature_ai' => 'required|string',
        ]);

        $requestData = $request->input();

        // Ambil konten yang dimasukkan oleh pengguna
        $settingID = isset($requestData["setting_id"]) && $requestData["setting_id"] ? $requestData["setting_id"] : NULL;
        $modelAI = isset($requestData["model_ai"]) && $requestData["model_ai"] ? strtolower($requestData["model_ai"]) : NULL;
        $thresholdAI = isset($requestData["threshold_ai"]) && $requestData["threshold_ai"] ? $requestData["threshold_ai"] : NULL;
        $temperatureAI = isset($requestData["temperature_ai"]) && $requestData["temperature_ai"] ? $requestData["temperature_ai"] : NULL;

        // Simpan content dan embedding ke database
        if ($settingID) {
            $settingAI = Setting::find($settingID);
        } else {
            $settingAI = new Setting();
        }
        $settingAI->model = $modelAI;
        $settingAI->threshold = $thresholdAI;
        $settingAI->temperature = $temperatureAI;
        $settingAI->save();

        // Redirect ke form dengan pesan sukses
        return redirect()->route('indexSetting')->with('success', 'Setting successfully Submitted!');
    }

    //STREAM
    public function streamForm()
    {
        Session::forget(['chat_history', 'chat_id']);
        if (!Session::has('setting_ai')) {
            $getSetting = Setting::select('model', 'threshold', 'temperature')
                ->first()
                ->toArray();
            Session::put('setting_ai', $getSetting);
        }
        return view('embedding.stream_iframe');
    }

    public function streamChat(Request $request)
    {
        $requestData = $request->input();
        $employeeName = isset($requestData['p']) && $requestData['p'] ? ' ' . ucwords($requestData['p']) : NULL;
        $employeeId = isset($requestData['q']) && $requestData['q'] ? explode("-", $requestData['q'])[0] : NULL;

        //START SEARCH THE ANSWER FROM DATABASE
        // Get the user's question
        $userQuestion = isset($requestData['message']) && $requestData['message'] ? $requestData['message'] : "";
        $documentContent = "";
        if ($userQuestion) {
            $documentContent = $this->getDocumentKnowledge($userQuestion);
        }

        if (!Session::has('chat_id')) {
            Session::put('chat_id', (string) Str::uuid());
        }

        $messages = array();
        $messages[] = [
            "role" => "system",
            "content" => "Nama kamu adalah CIA (Colliers Indonesia AI), personal asisten yang sangat membantu dalam menjawab semua pertanyaan seputar Colliers Intranet yang di buat oleh IT team development Colliers Indonesia."
                . "Jawab dengan bahasa sesuai dengan bahasa yang di gunakan oleh pihak yang bertanya, jika bertanya dalam bahasa inggris harus di jawab bahasa inggris kecuali di minta menggunakan bahasa lainnya."
                . "Jawablah semua pertanyaan dengan akurat berdasarkan pedoman yang tersedia. "
                . "Berikan jawaban yang paling benar dalam bentuk singkat, padat dan jelas."
                . "Jawablah dengan percaya diri."
                . "Jika yakin dengan jawabanmu, jangan meminta maaf atau mengubah jawaban hanya karena ditanya ulang."
                . "Klarifikasi hanya jika memang ada kesalahan yang jelas."

                //prompt untuk PDF
                . 'Jika user meminta PDF, pastikan balas dengan tanpa parsedown dan jangan pakai format lain selain format JSON berikut: {"type": "pdf","title":"nama pdf", "content": "HTML untuk judul dan isi PDF", "text_gpt":"kata-kata untuk user"}. Jika tidak, balas dengan teks biasa.'

                //prompt untuk grafik
                . 'Jika user meminta grafik atau chart, balas dalam format JSON berikut tanpa menggunakan parsedown atau format lain: {"type": "chart","content": "HTML lengkap dengan <canvas> yang memiliki ID unik dan style width & height, serta script dalam format JSON untuk Chart.js beserta judul chartnya.","text_gpt": "Penjelasan grafik."}'
                . 'Pastikan variable grafik dan ID <canvas> selalu unik dan berformat ID berdasarkan model chart, judul chart dan UUID misal: model_chart_judul_UUID.'
                . 'Gunakan style="width: 100%; max-width: 600px; height: 400px;" pada elemen <canvas> untuk memastikan tampil dengan baik.'
                . 'Jika user tidak meminta grafik, balas dengan teks biasa.'

                //prompt untuk menggunakan table
                . "Jika user meminta list, pastikan balas menggunakan table."
        ];

        //insert chat history pengetahuan assistant
        $this->insertHistoryChat("assistant", $documentContent);

        //insert chat history pertanyaan user
        $this->insertHistoryChat("user", $userQuestion);

        //ambil history 5 percakapan terakhir
        $getLastMessages = HistoryChat::select("role", "content", "created_at")
            ->where("chat_id", Session::get('chat_id'))
            ->orderBy("created_at", "DESC")
            ->limit(5)
            ->get()
            ->toArray();

        // Urutkan berdasarkan created_at ASC
        usort($getLastMessages, function ($a, $b) {
            return strtotime($a["created_at"]) - strtotime($b["created_at"]);
        });

        // Hapus created_at dari array
        $getLastMessages = array_map(function ($item) {
            unset($item["created_at"]);
            return $item;
        }, $getLastMessages);

        $messages = array_merge($messages, $getLastMessages);

        //start perhitungan token
        $summaryTokens = 0;
        foreach ($messages as $rowMessages) {
            $summaryTokens += isset($rowMessages["content"]) && $rowMessages["content"] ? $this->getTokenPython($rowMessages["content"], Session::get("setting_ai.model")) : 0;
        }
        //end perhitungan token


        //START STREAM
        $response = new StreamedResponse(function () use ($messages) {
            $client = new Client();

            $res = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    "model" => Session::get("setting_ai.model"),
                    "messages" => $messages,
                    "temperature" => intval(Session::get('setting_ai.temperature')),  // Mengatur tingkat kreativitas jawaban, semakin kecil semakin kecil kreativitasnya 0 s/d 1
                    "top_p" => 0.7, //Mengatur akurat/tidaknya respon jawaban, semakin kecil semakin akurat respon jawabannya 0 s/d 1
                    'stream' => true,
                ],
                'stream' => true,
                'timeout' => 60,
            ]);

            $body = $res->getBody();
            $buffer = '';
            $paragraph = '';

            while (!$body->eof()) {
                $buffer .= $body->read(1024);

                while (($pos = strpos($buffer, "\n")) !== false) {
                    $line = substr($buffer, 0, $pos);
                    $buffer = substr($buffer, $pos + 1);

                    if (str_starts_with(trim($line), 'data: ')) {
                        $json = trim(substr($line, 6));
                        if ($json === '[DONE]') {
                            if (!empty(trim($paragraph))) {
                                $html = trim($paragraph);
                                echo "data: " . base64_encode($html) . "\n\n";
                                ob_flush();
                                flush();
                            }
                            echo "data: [DONE]\n\n";
                            ob_flush();
                            flush();
                            break;
                        }

                        $data = json_decode($json, true);
                        $content = $data['choices'][0]['delta']['content'] ?? '';

                        if ($content !== '') {
                            $paragraph .= $content;

                            // // Cek jika ini adalah JSON bertipe PDF
                            // if ($this->isJson($paragraph)) {
                            //     $parsed = json_decode($paragraph, true);

                            //     if (isset($parsed['type']) && $parsed['type'] === 'pdf') {
                            //         $pdf = PDF::loadHTML($parsed['content']);

                            //         $fileName = $parsed['title'] . now()->timestamp . '.pdf';
                            //         $fileName = preg_replace('/[^A-Za-z0-9_]/', '_', trim($fileName));
                            //         $filePath = 'pdf/' . $fileName; // Lokasi penyimpanan di storage
                            //         Storage::put('public/' . $filePath, $pdf->output());
                            //         $pdfUrl = asset("storage/" . $filePath);

                            //         //tambahkan text gpt
                            //         $content = $parsed['text_gpt'] . "<br>" . $pdfUrl;
                            //     } else if (isset($parsed['type']) && $parsed['type'] === 'chart') {
                            //         $content = $parsed["text_gpt"] . "\n" . $parsed["content"];
                            //     } else {
                            //         $content = json_encode($parsed);
                            //     }

                            //     echo "data: $content \n\n";
                            //     ob_flush();
                            //     flush();
                            //     $paragraph = ''; // clear buffer
                            //     continue;



                            //     // if (isset($parsed['type']) && $parsed['type'] === 'pdf') {
                            //     //     $md = $parsed['content'] ?? '';
                            //     //     $html = $this->text($md);
                            //     //     $pdf = Pdf::loadHTML($html)->setPaper('a4', 'portrait');

                            //     //     $pdfContent = $pdf->output();
                            //     //     $base64 = base64_encode($pdfContent);

                            //     //     echo "data: {\"type\":\"pdf\",\"file\":\"$base64\"}\n\n";
                            //     //     ob_flush();
                            //     //     flush();
                            //     //     $paragraph = ''; // clear buffer
                            //     //     continue;
                            //     // }
                            // }

                            if (strpos($paragraph, "\n\n") !== false) {
                                [$send, $rest] = explode("\n\n", $paragraph, 2);
                                $html = $this->replaceProperString(trim($send));
                                echo "data: " . base64_encode($html) . "\n\n"; // Encode dulu agar aman dikirim
                                ob_flush();
                                flush();
                                $paragraph = $rest;
                            }
                        }
                    }
                }
            }
        });

        $response->headers->set('Content-Type', 'text/event-stream');
        $response->headers->set('Cache-Control', 'no-cache');
        $response->headers->set('X-Accel-Buffering', 'no');

        return $response;
    }
}
