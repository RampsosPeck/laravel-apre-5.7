<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/portfolio">Portfolio</a></li>
			<li><a href="/contact">Contact</a></li>
		</ul>
	</nav>
	Hola {{ $nombre ?? "invitado" }}
</body>
</html>