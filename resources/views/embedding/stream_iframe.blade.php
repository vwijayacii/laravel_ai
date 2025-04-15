<!DOCTYPE html>
<html>

<head>
    <title>Streaming ChatGPT (Prompt dari Server)</title>
</head>

<body>
    <h2>Masukkan Prompt:</h2>
    <form id="chat-form">
        <input type="text" id="message" name="message" placeholder="Tulis sesuatu..." required>
        <button type="submit">Kirim</button>
    </form>

    <h3>Jawaban:</h3>
    <div id="output" style="white-space: pre-wrap; border: 1px solid #ccc; padding: 10px;"></div>

    <script>
        const typeHtml = async (html) => {
            const container = document.createElement('div');
            output.appendChild(container);

            // Buat sebuah array untuk setiap karakter HTML
            const textArray = html.split('');
            let currentIndex = 0;

            // Fungsi untuk menampilkan karakter satu per satu
            const typeCharacter = () => {
                if (currentIndex < textArray.length) {
                    container.innerHTML += textArray[currentIndex];
                    currentIndex++;
                    setTimeout(typeCharacter, 10); // setTimeout untuk efek kecepatan ketikan
                }
            };

            // Mulai menampilkan karakter satu per satu
            typeCharacter();
        };

        const form = document.getElementById('chat-form');
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            output.innerHTML = '';
            const message = document.getElementById('message').value;

            const response = await fetch('chat-stream', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'text/event-stream'
                },
                body: JSON.stringify({
                    message
                })
            });

            const reader = response.body.getReader();
            const decoder = new TextDecoder('utf-8');
            let buffer = '';

            while (true) {
                const {
                    value,
                    done
                } = await reader.read();
                if (done) break;

                buffer += decoder.decode(value, {
                    stream: true
                });
                const parts = buffer.split("\n\n");
                buffer = parts.pop();

                for (const part of parts) {
                    const line = part.trim();
                    if (line.startsWith('data: ')) {
                        const base64 = line.slice(6);
                        if (base64 === '[DONE]') return;

                        const html = atob(base64);
                        await typeHtml(html);
                    }
                }
            }
        });
    </script>
</body>

</html>
