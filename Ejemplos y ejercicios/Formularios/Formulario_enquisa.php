<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valoracion = $_POST["valoracion"] ?? "";

    if (empty($valoracion)) {
        $error = "Selecciona unha valoración.";
    } else {
        $valoracion = htmlspecialchars($valoracion);
        // Aquí gardarías a valoración
        $exito = "Grazas pola túa valoración: $valoracion";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Enquisa</title></head>
<body>
    <h2>Valoración do servizo</h2>

    <?php if (!empty($error)): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>
    <?php if (!empty($exito)): ?>
        <p style="color:green;"><?= $exito ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="radio" name="valoracion" value="1"> Malo<br>
        <input type="radio" name="valoracion" value="2"> Regular<br>
        <input type="radio" name="valoracion" value="3"> Bo<br>
        <input type="radio" name="valoracion" value="4"> Excelente<br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>