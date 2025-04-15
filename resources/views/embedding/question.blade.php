<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask AI</title>
</head>

<body>
    <h1>Ask a Question</h1>
    <form action="{{ route('askQuestion') }}" method="POST">
        @csrf
        <textarea name="question" rows="4" cols="50" placeholder="Type your question..."></textarea><br>
        <button type="submit">Ask</button>
    </form>
</body>

</html>
