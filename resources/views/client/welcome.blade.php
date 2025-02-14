<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Welcome</title>
</head>
<body>
    <h1>Welcome, {{ session('client')->numero_telephone }}</h1>
    <p>You are logged in as client.</p>
    <p>Client ID: {{ session('client')->id_client }}</p>
    <p>Client Phone Number: {{ session('client')->numero_telephone }}</p>

    <a href="/client/logout">
        <button>Logout</button>
    </a>
</body>
</html>
