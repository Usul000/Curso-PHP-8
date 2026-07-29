<?php
session_start();

// Simulación: fijamos un rol para probar (en real vendría del login)
if (isset($_GET["rol"])) {
    $_SESSION["rol"] = $_GET["rol"];
}
echo "Rol actual: " . ($_SESSION["rol"] ?? "ninguno") . "<br>";
echo '<a href="?rol=admin">Ser admin</a> | <a href="?rol=editor">Ser editor</a> | <a href="?rol=usuario">Ser usuario</a><br><hr>';


// Ejercicio 1: función que exige un rol exacto
function requiereRol(string $rolRequerido): bool {
    return ($_SESSION["rol"] ?? null) === $rolRequerido;
}

echo "¿Puede entrar al panel de admin? ";
var_dump(requiereRol("admin"));


// Ejercicio 2: ampliar para aceptar varios roles permitidos
function requiereAlgunRol(array $rolesPermitidos): bool {
    return in_array($_SESSION["rol"] ?? null, $rolesPermitidos, true);
}

echo "¿Puede entrar admin o editor? ";
var_dump(requiereAlgunRol(["admin", "editor"]));


// Ejercicio 3: proteger una sección completa y cortar la ejecución si no cumple
function exigirRol(array $rolesPermitidos): void {
    if (!requiereAlgunRol($rolesPermitidos)) {
        http_response_code(403);
        die("Acceso denegado. Rol actual: " . ($_SESSION["rol"] ?? "ninguno"));
    }
}

exigirRol(["admin"]);
echo "Contenido exclusivo de administración<br>";
?>
