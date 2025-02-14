<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
    <p>You are logged in as client.</p>
    <p>Client ID: {{ $client->id_client }}</p>
    <p>Phone Number: {{ $client->numero_telephone }}</p>

    <a href="/client/logout">
        <button>Logout</button>
</body>
</html>
