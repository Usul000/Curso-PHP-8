<?php

// Ejercicio 1: centralizar credenciales (en un proyecto real irían en un
// archivo config.php aparte, fuera del control de versiones)
define("DB_HOST", "localhost");
define("DB_USER", "developer");
define("DB_PASS", "Lugo_2026$");
define("DB_NAME", "festival_ortigueira");


// Ejercicio 2: función reutilizable de conexión, con captura de errores
function conectar(): \mysqli {
    try {
        $db = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        return $db;
    } catch (\mysqli_sql_exception $e) {
        error_log("Erro MySQL: " . $e->getMessage());
        die("Erro crítico: Non se puido conectar coa base de datos.");
    }
}


// Ejercicio 3: probar la conexión
$db = conectar();
echo "Conexión correcta: " . $db->host_info;
$db->close();

?>
