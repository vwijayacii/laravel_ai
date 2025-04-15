<!-- resources/views/insert.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
</head>

<body>
    <h1>Settings</h1>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('insertSetting') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ isset($data['id']) && $data['id'] ? $data['id'] : null }}" name="setting_id">
        <div>
            <label for="content">Model:</label><br>
            <input type="text" value="{{ isset($data['model']) && $data['model'] ? $data['model'] : null }}" name="model_ai" required>
        </div>
        <br>
        <div>
            <label for="content">Threshold:</label>
            <br>
            <input type="text" value="{{ isset($data['threshold']) && $data['threshold'] ? $data['threshold'] : null }}" name="threshold_ai" required>
        </div>
        <br>
        <div>
            <label for="content">Temperature:</label><br>
            <input type="text" value="{{ isset($data['temperature']) && $data['temperature'] ? $data['temperature'] : null }}" name="temperature_ai" required>
            <br>
            <small>Mengatur tingkat kreativitas jawaban, semakin kecil semakin kecil kreativitasnya 0 s/d 1</small>
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
