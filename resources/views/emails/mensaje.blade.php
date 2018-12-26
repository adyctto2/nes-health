<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Recibiste un mensaje en la pagina web: http://neshealth-bolivia.com</h1>
    <h2>de: {{ $email }}</h2>
    <h2>nombre: {{ $nombre }}</h2>
    <h2>fecha: {{ $fecha }}</h2>
    <p><strong>Asunto: </strong></p>
    <p>{{ $asunto }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $mensaje }}</p>
</body>
</html>  