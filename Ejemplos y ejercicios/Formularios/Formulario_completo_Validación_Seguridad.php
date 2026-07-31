<?php
declare(strict_types=1);
session_start();
$erros = [];
$datos = ['nome' => '', 'email' => '', 'provincia' => '', 'mensaxe' => ''];
$mensaxe_exito = '';
// Xerar token CSRF se non existe
if (!isset($_SESSION['csrf_token'])) {
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// 1. Verificar CSRF
if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'] ?? '')) {
$erros[] = 'Token de seguridade non válido.';
}
// 2. Recoller e sanear datos
$datos['nome'] = trim($_POST['nome'] ?? '');
$datos['email'] = trim($_POST['email'] ?? '');
$datos['provincia'] = $_POST['provincia'] ?? '';
$datos['mensaxe'] = trim($_POST['mensaxe'] ?? '');
// 3. Validar campos obrigatorios
if (empty($datos['nome'])) {
$erros[] = 'O nome é obrigatorio.';
}
// 4. Validar formato do email

if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
$erros[] = 'O email non ten un formato válido.';
}
// 5. Validar contra lista branca
$provincias_validas = ['co', 'lu', 'ou', 'po'];
if (!in_array($datos['provincia'], $provincias_validas, true)) {
$erros[] = 'Provincia non válida.';
}
// 6. Se non hai erros, procesar
if (empty($erros)) {
// Aquí gardaríamos en base de datos con consultas preparadas,
// enviaríamos un email, etc.
$mensaxe_exito = "Datos recibidos correctamente. Grazas, "
. htmlspecialchars($datos['nome']) . "!";
// Rexenerar token CSRF tras uso exitoso
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
}
?>
<!DOCTYPE html>
<html lang="gl">
<head>
<meta charset="UTF-8">
<title>Formulario de contacto</title>
</head>
<body>
<h1>Contacto</h1>
<?php if (!empty($mensaxe_exito)): ?>
<p style="color: green;"><?= $mensaxe_exito ?></p>
<?php endif; ?>
<?php if (!empty($erros)): ?>
<div style="color: red;">
<?php foreach ($erros as $erro): ?>
<p><?= htmlspecialchars($erro) ?></p>
<?php endforeach; ?>
</div>
<?php endif; ?>
<form method="post">
<input type="hidden" name="csrf_token"
value="<?= $_SESSION[ ' csrf_token'] ?>">
<p>
<label for="nome">Nome: *</label><br>
<input type="text" id="nome" name="nome"
value="<?= htmlspecialchars($datos[ ' nome']) ?>" required>
</p>
<p>
<label for="email">Email: *</label><br>
<input type="email" id="email" name="email"
value="<?= htmlspecialchars($datos[ ' email']) ?>" required>
</p>

<p>
<label for="provincia">Provincia: *</label><br>
<select id="provincia" name="provincia" required>
<option value="">-- Selecciona --</option>
<option value="co" <?= $datos['provincia']==='co' ? 'selected' : ''
?>>A Coruña</option>
<option value="lu" <?= $datos['provincia']==='lu' ? 'selected' : ''
?>>Lugo</option>
<option value="ou" <?= $datos['provincia']==='ou' ? 'selected' : ''
?>>Ourense</option>
<option value="po" <?= $datos['provincia']==='po' ? 'selected' : ''
?>>Pontevedra</option>
</select>
</p>
<p>
<label for="mensaxe">Mensaxe:</label><br>
<textarea id="mensaxe" name="mensaxe" rows="4"
cols="40"><?= htmlspecialchars($datos['mensaxe'])
?></textarea>
</p>
<button type="submit">Enviar</button>
</form>
</body>
</html>