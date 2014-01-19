<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Bienvenido {{ Auth::user()->name; }}</h1>
		<a href="/logout">Cerrar sesión.</a>
	</div>
	<script src="https://code.jquery.com/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
</body>
</html>
