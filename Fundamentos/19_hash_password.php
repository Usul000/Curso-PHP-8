<?php

// Ejercicio 1: generar el hash de una contraseña
$hash = password_hash("miContraseña123", PASSWORD_DEFAULT);
echo $hash . "<br>";


// Ejercicio 2: verificar una contraseña contra su hash
$correcta = password_verify("miContraseña123", $hash);
$incorrecta = password_verify("otraCosa", $hash);
var_dump($correcta);   // true
var_dump($incorrecta); // false


// Ejercicio 3: comprobar que dos contraseñas iguales generan hashes distintos
$hash1 = password_hash("1234", PASSWORD_DEFAULT);
$hash2 = password_hash("1234", PASSWORD_DEFAULT);
echo $hash1 . "<br>";
echo $hash2 . "<br>";
echo ($hash1 === $hash2) ? "Iguales<br>" : "Distintos (esperado)<br>";


// Ejercicio 4: función de registro simulada (guarda en array, no en BBDD todavía)
$usuariosRegistrados = [];

function registrarUsuario(array &$usuarios, string $user, string $passPlano): void {
    $usuarios[$user] = password_hash($passPlano, PASSWORD_DEFAULT);
}

function loginUsuario(array $usuarios, string $user, string $passPlano): bool {
    if (!isset($usuarios[$user])) {
        return false;
    }
    return password_verify($passPlano, $usuarios[$user]);
}

registrarUsuario($usuariosRegistrados, "ana", "SuperSecreta1");
var_dump(loginUsuario($usuariosRegistrados, "ana", "SuperSecreta1")); // true
var_dump(loginUsuario($usuariosRegistrados, "ana", "otra"));          // false
?>
