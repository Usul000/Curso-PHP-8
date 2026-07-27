<?php
/*
Variables y Constantes
Las variables son contenedores que almacenan datos durante la ejecución de tu programa.
Las constantes son similares, pero su valor no puede cambiar.
En esta lección aprenderás a crear y usar ambas correctamente.

Variables en PHP
En PHP, las variables se identifican con el símbolo $ seguido del nombre. 
No necesitas declarar el tipo de dato; PHP lo infiere automáticamente.
*/

//declarar variables
$nombre = 'Iván Cernadas';
$edad = 48;
$edaddeseada=32;
$estatura = 1.70;
$tieneNovia = true;
$tienealamejorNoviadelmundo= true;


//usar variables
echo "<h1>Hola, soy $nombre, y tengo $edad años.</h1>\n";

//reasignar valor a variables
$edad = 35;
echo "En noviembre cumplo los $edad años.\n";

/*
*****************************
Reglas para nombrar variables
*****************************
Deben empezar con $
El nombre debe comenzar con letra o guion bajo _
Pueden contener letras, números y guiones bajos
Son case-sensitive: $nombre y $Nombre son diferentes
No pueden contener espacios ni caracteres especiales
*/

// Nombres válidos
$nombre = 'Ana';
$_privado = 'valor';
$usuario1 = 'Pedro';
$totalDeVentas = 100;
$nombre_usuario = 'Jose';
 
// Nombres inválidos (causarán error)
// $1usuario = "error";    // No puede empezar con número
// $mi-variable = "error"; // No puede tener guiones
// $mi variable = "error"; // No puede tener espacios


/*
Convención de nombres
En PHP se usa camelCase para variables: $nombreUsuario, $totalFactura.
Algunas librerías usan snake_case: $nombre_usuario. 
Lo importante es ser consistente en tu proyecto.
*/


/*
Constantes
Las constantes almacenan valores que no cambian durante la ejecución. 
Son ideales para configuración, valores fijos y "números mágicos".
*/

// Definir constantes (sin $, por convención en MAYÚSCULAS)
const PI = 3.14159;
const APP_NAME = 'Mi Aplicación';
const MAX_USUARIOS = 100;
const DEBUG = true;
 
// Usar constantes
echo "PI VALE: ".PI."\n";
echo "El nombre de la app es: ".APP_NAME."\n";
 
// Esto causaría error:
// PI = 3.14; // No se puede reasignar una constante

/*
Definir constantes con define()
La función define() es la forma tradicional de crear constantes.
Permite definir constantes de forma condicional.
*/

// Definir con define()
define('VERSION', '1.0.0');
define('BASE_URL', 'https://ejemplo.com');
 
// Definición condicional
if (!defined('DEBUG')) {
    define('DEBUG', false);
}
 
echo "Versión: " . VERSION . "\n";
echo "URL: ".BASE_URL;

/*
Recomendación
Usa const por defecto. Es más rápido y la sintaxis es más clara.
Usa define() solo cuando necesites definir constantes condicionalmente.
*/

//*********************************************************************
 
// Constantes mágicas (cambian según el contexto)
echo __FILE__;    // Ruta completa del archivo actual
echo __DIR__;     // Directorio del archivo actual
echo __LINE__;    // Número de línea actual
echo __FUNCTION__; // Nombre de la función actual
echo __CLASS__;   // Nombre de la clase actual
echo __METHOD__;  // Nombre del método actual
 
// Constantes de PHP
echo PHP_VERSION; // Versión de PHP
echo PHP_EOL;     // Salto de línea del sistema
echo PHP_INT_MAX; // Entero máximo soportado


/*
Scope (alcance) de variables
El scope determina dónde puede usarse una variable. PHP tiene tres tipos de scope:

++++++++++++++++
Scope global
++++++++++++++++
Variables definidas fuera de funciones. 
Para usarlas dentro de una función, necesitas la palabra clave global.
*/
$mensaje = "Hi";

function saludar() {
    global $mensaje; //accede a la variable global
    echo $mensaje;
}
saludar();


/* 
+++++++++++++++++++
Scope local
+++++++++++++++++

Variables definidas dentro de una función.
Solo existen durante la ejecución de esa función.
*/
function calcular(){
    $resultado = 10 + 5;//variable LOCAL
    return $resultado;
}

echo calcular();

?>