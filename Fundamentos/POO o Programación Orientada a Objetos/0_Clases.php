<?php
/* 
¿Que es una clase?
Una clase es una plantilla que define la estructura de algo. 
Piensa en ella como un plano de arquitecto: describe como sera una casa, pero no es una casa en si misma.
*/

//ejemplo de una clase
class Coche { //La clase inicia con MAYUSCULO -> Coche
    public string $marca;
    public string $modelo;
    public int $anio;
}

/* 
¿Que es un objeto?
Un objeto es una instancia de una clase. 
Si la clase es el plano, el objeto es la casa construida.
Podemos crear multiples objetos a partir de la misma clase.
*/

//creamos un objeto(instancia) de la clase
$miCoche = new Coche();

//asignamos valores a las propiedades de nuestro objeto
$miCoche->marca = "Toyota";
$miCoche->modelo = "Hilux";
$miCoche->anio = 2025;

//acceder a las propiedades
echo "Mi nuevo auto es un {$miCoche->marca}, modelo {$miCoche->modelo} del año {$miCoche->anio}\n";

/*
Convencion de nombres
Los nombres de clases se escriben en PascalCase: primera letra de cada palabra en mayuscula. 
Ejemplos: Coche, CuentaBancaria, UsuarioAdmin.
*/

//clase persona con propiedades nombre, edad y email.

class Persona {
    public string $nombre;
    public int $edad;
    public string $email;
}

$p1 = new Persona();
$p2 = new Persona();

//asignamos valores a las variables nombre
$p1->nombre = "Angel";
$p2->nombre = "Helen";

//las edades
$p1->edad = 27;
$p2->edad = 19;

//emails
$p1->email = "angel.rh@email.com";
$p2->email = "helen.rr@email.com";

echo "Datos primer persona: \nNombre: {$p1->nombre}.\nEdad: {$p1->edad}.\nEmail: {$p1->email}.\n";
echo "\nDatos segunda persona: \nNombre: {$p2->nombre}.\nEdad: {$p2->edad}.\nEmail: {$p2->email}.\n";


echo "";

//lista de tareas
class Tarea {
    public string $descripcion;
    public bool $completada;
}

$tareas = [];

$tarea1 = new Tarea();
$tarea2 = new Tarea();
$tarea3 = new Tarea();
$tarea4 = new Tarea();
$tarea5 = new Tarea();

//esta es la solucion que yo di
$tarea1->descripcion = "Practicar Ingles";
$tarea1->completada = true;
$tareas[] = $tarea1;

$tarea2->descripcion = "Practicar PHP";
$tarea2->completada = false;
$tareas[] = $tarea2;

$tarea3->descripcion = "Practicar Doker";
$tarea3->completada = true;
$tareas[] = $tarea3;

$tarea4->descripcion = "Practicar Clean Code";
$tarea4->completada = true;
$tareas[] = $tarea4;

$tarea5->descripcion = "Practicar POO";
$tarea5->completada = false;
$tareas[] = $tarea5;

// 2. Creamos el array de forma mucho más compacta y limpia
//esta me la dio la IA, y me parece muy interesante
/*
$tareas = [
    new Tarea("Practicar Ingles", true),
    new Tarea("Practicar PHP", false),
    new Tarea("Practicar Docker", true),
    new Tarea("Practicar Clean Code", true),
    new Tarea("Practicar POO", false)
];
*/
echo "\nTareas realizadas: \n";

foreach($tareas as $tarea) {
    if ($tarea->completada) {
        echo "{$tarea->descripcion}\n";
    }
}

/*
echo "\nTareas pendientes: \n";
foreach($tareas as $tarea) {
    if (!$tarea->completada){
        echo "{$tarea->descripcion}\n";
    }
}


echo "\nTarea realizas: \n";

foreach($tareas as $tarea) {
    echo (!$tarea->completada) ? "{$tarea->descripcion}\n":""; 
}
*/