<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <form method="POST" action="/admin/login">
        @csrf
        <div>
            <label for="login">Login</label>
            <input type="text" id="login" name="login" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <a href="/admin/register">
        <button>Register</button>
    </a>
</body>
</html>
