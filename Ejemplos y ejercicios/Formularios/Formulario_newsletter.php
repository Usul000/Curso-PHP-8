<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"] ?? "");

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Introduce un email válido.";
    } else {
        // Aquí gardarías o email na base de datos
        $exito = "Grazas por suscribirte!";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Newsletter</title></head>
<body>
    <h2>Subscríbete</h2>

    <?php if (!empty($error)): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>
    <?php if (!empty($exito)): ?>
        <p style="color:green;"><?= $exito ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="email" name="email" placeholder="O teu email">
        <button type="submit">Subscribirme</button>
    </form>
</body>
</html>