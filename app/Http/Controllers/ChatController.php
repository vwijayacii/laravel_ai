<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use OpenAI\Laravel\Facades\OpenAI;
use GuzzleHttp\Client;

class ChatController extends Controller
{

    // public function chat(Request $request) //CHAT GPT pakai library OPENAI
    // {
    //     $requestData = $request->input();
    //     $result = OpenAI::chat()->create([
    //         'model' => 'gpt-3.5-turbo',
    //         'messages' => [
    //             ['role' => 'user', 'content' => 'Hello!'],
    //         ],
    //     ]);

    //     $responseText = "<div><b>Assistant</b> : <br />";
    //     if (isset($result['choices'][0]['message']['content'])) {

    //         $responseText .= $result['choices'][0]['message']['content'];
    //     } else {
    //     }
    //     $responseText .= "</div>";

    //     return response()->json([
    //         'response' => $result,
    //         'responseText' => nl2br($responseText)
    //     ]);
    // }

    private function replaceProperString($content)
    {
        // Regular expression to match URLs
        $pattern = '/(http[s]?:\/\/[^\s]+)/i';
        $replacement = '<a href="$1" target="_blank" style="color:white;">$1</a>';
        $content = preg_replace($pattern, $replacement, $content);

        // BOLD String jika diapit **
        $patternBold = "/\*{2}(.*?)\*{2}/";
        $content = preg_replace($patternBold, "<b>$1</b>", $content);

        return $content;
    }

    public function index()
    {
        Session::forget('chat_history');
        return view('chat.index');
    }

    public function chat(Request $request) //CHAT GPT BIASA
    {
        $requestData = $request->input();
        $employeeName = isset($requestData['p']) && $requestData['p'] ? ' ' . ucwords($requestData['p']) : NULL;
        $employeeId = isset($requestData['q']) && $requestData['q'] ? explode("-", $requestData['q'])[0] : NULL;
        $apiKey = env('OPENAI_API_KEY');
        if (Session::has('topic')) {
            if (Session::get('topic') == "Colliers Intranet") {
                $modelType = "gpt-4o";
            } elseif (Session::get('topic') == "Company Regulation") {
                $modelType = "gpt-4o";
            } elseif (Session::get('topic') == "Technical Support") {
                $modelType = "gpt-4o";
            } else {
                $modelType = "gpt-4o";
            }
        }

        if (!Session::has('chat_history')) {
            if (Session::has('topic')) {
                if (Session::get('topic') == "Colliers Intranet") {
                    $documentContent = file_get_contents(public_path("document_knowledge/colliers_intranet.txt"));

                    // start ambil data pribadi dari intranet
                    if ($employeeId) {
                        $client = new Client();
                        $url = env('INTRANET_URL') . 'generate_doc.php';
                        $result = $client->post($url, [
                            'form_params' => [
                                'q' => $employeeId
                            ]
                        ]);
                        $responseCode = $result->getStatusCode();
                        $response = $result->getBody();
                        $responseData = $response->getContents();
                        if ($responseCode == 200) {
                            $responseData = json_decode($responseData, true);
                            if (isset($responseData["valid"]) && $responseData["valid"]) {
                                $documentContent .= $responseData["content"];
                            }
                        }
                    }
                    // end ambil data pribadi dari intranet
                } elseif (Session::get('topic') == "Company Regulation") {
                    $documentContent = file_get_contents(public_path("document_knowledge/colliers_company_regulation.txt"));
                } elseif (Session::get('topic') == "Technical Support") {
                    $documentContent = file_get_contents(public_path("document_knowledge/colliers_technical_support.txt"));
                } elseif (Session::get('topic') == "REMS SOP Penerimaan Karyawan") {
                    $documentContent = file_get_contents(public_path("document_knowledge/REMS_SOP_Penerimaan_Karyawan.txt"));
                } elseif (Session::get('topic') == "Receptionist") {
                    $documentContent = file_get_contents(public_path("document_knowledge/receptionist.txt"));
                } elseif (Session::get('topic') == "Market Report") {
                    $documentContent = file_get_contents(public_path("document_knowledge/market_report.txt"));
                } elseif (Session::get('topic') == "Past Transaction") {
                    $documentContent = file_get_contents(public_path("document_knowledge/commreq.txt"));
                } else {
                    $documentContent = "Kamu adalah Collin, personal asisten yang sangat membantu dalam menjawab semua pertanyaan seputar Colliers Intranet yang di buat oleh IT team development Colliers Indonesia. Gunakan bahasa sesuai dengan bahasa yang di gunakan oleh pihak yang bertanya, jika bertanya dalam bahasa inggris harus di jawab bahasa inggris kecuali di minta menggunakan bahasa lainnya.";
                }
            }
            Session::put('chat_history', [
                ['role' => 'system', 'content' => $documentContent],
            ]);
            if ($employeeName) {
                Session::push(
                    'chat_history',
                    ['role' => 'user', 'content' => 'I am' . $employeeName]
                );
            }
            Session::push(
                'chat_history',
                ['role' => 'assistant', 'content' => 'Hello' . $employeeName . ', How can I help you today?']
            );
        }
        Session::push('chat_history', ['role' => 'user', 'content' => isset($requestData['message']) && $requestData['message'] ? $requestData['message'] : ""]);

        $messages = Session::get('chat_history');
        // dd($messages);

        $endpoint = 'https://api.openai.com/v1/chat/completions';  // Adjust engine and endpoint as needed
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $apiKey,
        ])->post($endpoint, [
            "model" => $modelType,
            'messages' => $messages,
            "max_tokens" => 500,
            'temperature' => 0,
            "top_p" => 1,
            // "frequency_penalty" => 1,
            // "presence_penalty" => 1,
            // "stop" => ["11."],
        ]);

        $responseArray = $response->json();
        // dd($responseArray);
        $responseText = '<div class="d-flex justify-content-start mb-2">';
        $responseText .= '<img src="' . asset('assets/images/colliers-icon.jpg') . '" class="rounded-circle user_img_msg">';
        $responseText .= '<div class="msg_cotainer_send">';
        if (isset($responseArray["error"]) && $responseArray["error"]) {
            $responseText .= $responseArray['error']['message'];
        } else {
            $responseText .= $this->replaceProperString($responseArray['choices'][0]['message']['content']);
            // $responseText .= $responseArray['choices'][0]['message']['content'];
            Session::push('chat_history',  ['role' => 'assistant', 'content' => $responseArray['choices'][0]['message']['content']]);
        }
        // $responseText .= '<span class="msg_time_send">8:55 AM, Today</span>';
        $responseText .= '</div><div class="img_cont_msg">';
        $responseText .= '</div>';
        $responseText .= '</div>';
        return response()->json([
            'response' => $response->json(),
            'responseText' => nl2br($responseText)
        ]);
    }

    public function index_iframe()
    {
        Session::forget('chat_history');
        return view('chat.index_iframe');
    }

    public function changeTopic(Request $request) //CHAT GPT BIASA
    {
        $requestData = $request->input();
        Session::put('topic', $requestData['topic']);
        return response()->json([]);
    }

    public function flushTopic()
    {
        // Session::flush();
        session()->forget(['topic', 'chat_history']);
        return response()->json([]);
    }
}
