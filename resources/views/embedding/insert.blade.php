<!-- resources/views/insert.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Document</title>
</head>

<body>
    <h1>Insert Document</h1>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('insertDocument') }}" method="POST">
        @csrf
        <div>
            <label for="content">Content:</label><br>
            <textarea name="content" rows="10" cols="100" required></textarea><br>
        </div>
        <button type="submit">Insert Document</button>
    </form>
</body>

</html>
