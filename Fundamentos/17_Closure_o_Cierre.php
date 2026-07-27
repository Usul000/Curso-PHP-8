<?php

// Ejercicio 1: función anónima básica
$doble = function ($n) {
    return $n * 2;
};
echo $doble(4) . "<br>"; // 8


// Ejercicio 2: sintaxis flecha (arrow function)
$triple = fn($n) => $n * 3;
echo $triple(4) . "<br>"; // 12


// Ejercicio 3: closure que captura una variable externa con "use"
$iva = 0.21;
$conIva = function ($precio) use ($iva) {
    return $precio * (1 + $iva);
};
echo $conIva(100) . "<br>"; // 121


// Ejercicio 4: aplicar un 10% de descuento a un array de precios con array_map
$precios = [10, 25.5, 40, 99.99];
$conDescuento = array_map(fn($p) => $p * 0.9, $precios);
foreach ($conDescuento as $p) {
    echo number_format($p, 2) . "€<br>";
}


// Ejercicio 5: filtrar con closure - obtener solo los precios mayores de 20€
$caros = array_filter($precios, fn($p) => $p > 20);
print_r($caros);
?>
