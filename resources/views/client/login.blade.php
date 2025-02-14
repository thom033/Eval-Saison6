<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login</title>
</head>
<body>
    <form method="POST" action="/client/login">
        @csrf
        <div>
            <label for="numero_telephone">Numéro de téléphone</label>
            <input type="text" id="numero_telephone" name="numero_telephone" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
