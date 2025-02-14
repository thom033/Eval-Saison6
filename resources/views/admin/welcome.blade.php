<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Welcome</title>
</head>
<body>
    <h1>Welcome, {{ $admin->login }}</h1>
    <p>You are logged in as admin.</p>
    <p>Admin ID: {{ $admin->id_admin }}</p>
    <p>Admin Login: {{ $admin->login }}</p>

    <a href="/admin/logout">
        <button>Logout</button>

    <a href="/admin/reset-database">
        <button>Reset Database</button>
    </a>
</body>
</html>
