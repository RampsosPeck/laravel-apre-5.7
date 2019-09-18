<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mensaje</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<p>Reciviste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
	<p><strong>Asunto:</strong> {{ $msg['subject'] }}</p>
	<p><strong>Contenido:</strong> {{ $msg['content'] }}</p>
</body>
</html>