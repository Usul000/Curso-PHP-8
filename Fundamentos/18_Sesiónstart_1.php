<?php
session_start();

// Ejercicio 1: guardar y leer datos en sesión
$_SESSION["usuario"] = "ana";
echo "Usuario en sesión: " . $_SESSION["usuario"] . "<br>";


// Ejercicio 2: contador de visitas por sesión
if (!isset($_SESSION["visitas"])) {
    $_SESSION["visitas"] = 0;
}
$_SESSION["visitas"]++;
echo "Visitas (sesión): " . $_SESSION["visitas"] . "<br>";


// Ejercicio 3: carrito de la compra en sesión
if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [];
}

if (isset($_GET["add"])) {
    $_SESSION["carrito"][] = $_GET["add"];
    header("Location: ejercicios.php");
    exit;
}

echo "Carrito: ";
print_r($_SESSION["carrito"]);
echo '<br><a href="?add=producto1">Añadir producto1</a> | <a href="?add=producto2">Añadir producto2</a><br>';


// Ejercicio 4: vaciar carrito
if (isset($_GET["vaciar"])) {
    $_SESSION["carrito"] = [];
    header("Location: ejercicios.php");
    exit;
}
echo '<a href="?vaciar=1">Vaciar carrito</a><br>';


// Ejercicio 5: cerrar sesión completa
if (isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    header("Location: ejercicios.php");
    exit;
}
echo '<a href="?logout=1">Cerrar sesión</a><br>';
?>
