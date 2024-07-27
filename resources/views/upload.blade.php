<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="/upload" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
