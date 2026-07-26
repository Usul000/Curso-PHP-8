<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $usuario = trim($_POST["usuario"] ?? "");
    $password = trim($_POST["password"] ?? "");

    if (empty($usuario) || empty($password)) {
        $error = "Debes introducir usuario e contrasinal.";
    } else {
        // Aquí comprobarías as credenciais contra a base de datos
        $exito = "Sesión iniciada correctamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Login</title></head>
<body>
    <h2>Iniciar sesión</h2>

    <?php if (!empty($error)): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>
    <?php if (!empty($exito)): ?>
        <p style="color:green;"><?= $exito ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Usuario:</label><br>
        <input type="text" name="usuario"><br><br>

        <label>Contrasinal:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>