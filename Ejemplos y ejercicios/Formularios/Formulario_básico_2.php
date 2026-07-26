<?php
$q = trim($_GET["q"] ?? "");
$resultado = "";

if (!empty($q)) {
    $q_seguro = htmlspecialchars($q);
    // Aquí farías a busca real (BD, ficheiro, etc.)
    $resultado = "Resultados para: " . $q_seguro;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Buscar</title></head>
<body>
    <h2>Buscador</h2>

    <form method="GET" action="">
        <input type="text" name="q" value="<?= htmlspecialchars($q) ?>" placeholder="Buscar...">
        <button type="submit">Buscar</button>
    </form>

    <?php if (!empty($resultado)): ?>
        <p><?= $resultado ?></p>
    <?php endif; ?>
</body>
</html>