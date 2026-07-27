<?php
// Formulario de login (GET y POST) en un solo archivo

// --- Procesar POST (login) ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$usuario  = $_POST['usuario'];
	$password = $_POST['password'];
	// conectarse a la bd
	// autenticar al usuario
	echo "El usuario es " . $usuario . "<br/>";
	echo "El password es " . $password . "<br/>";
	exit;
}

// --- Procesar GET (registro) ---
if (isset($_GET['tipo_usuario'])) {
	$usuario   = $_GET['tipo_usuario'];
	$navegador = $_GET['navegador'];
	echo "El usuario es " . $usuario . " y tiene el navegador " . $navegador;
	exit;
}
?>

// Documento HTML con formulario de login y enlace a registro

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<style>
		body{font-family: Arial; text-align: center; padding-top: 50px;}
		form{display: inline-block; text-align: left;}
		input{display: block; margin: 5px 0;}
	</style>
</head>
<body>
	<form method="post">
		<label>Correo electrónico:</label>
		<input name="usuario" type="text" placeholder="user@example.com">
		<label>Contraseña:</label>
		<input name="password" type="password" placeholder="*******">
		<input type="submit" value="Iniciar sesión">
	</form>
	<p><a href="?tipo_usuario=nuevo&navegador=chrome">Registra cuenta</a></p>
</body>
</html>