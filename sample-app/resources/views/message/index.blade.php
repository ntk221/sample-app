<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Message Board</title>
</head>

<body>
    <main>
        <h1>Message Board</h1>
        <form action="/messages" method="POST">
            @csrf
            <label for="body">Message:</label>
            <input type="text" name="body" id="body">
            <button type="submit">Post</button>
        </form>
        <ul>
            @foreach ($messages as $message)
                <li>{{ $message->body }}</li>
            @endforeach
        </ul>
    </main>
</body>
</html>