<?php

	// Funciones para trabajar o hacer strings

	$mensaje = "Hoy voy a aprender mucho";

	//longitud
	echo strlen($mensaje);

	echo "<br>";

    // Para contar el número de palabras
	echo str_word_count($mensaje);

	echo "<br>";
	//Al revés
	echo strrev($mensaje);

	echo "<br>";
	//Para encontrar un texto 
	echo strpos($mensaje, "aprender");

	echo "<br>";
	//Para reemplazar un texto
	echo str_replace("aprender", "correr", $mensaje);

	echo "<br>";
	//Con strtolower convertimos a minúsculas
	echo strtolower($mensaje);	

	echo "<br>";
	////Con strtoupper convertimos el string a mayúsculas
	echo strtoupper($mensaje);

	echo "<br>";
	//Con esta instrucción comparamos cadenas o strings
	echo strcmp("a", "a");
	
	echo "<br>";
	//Con esta instrucción llamada substr obtenemos una parte de la cadena
	echo substr($mensaje, 10, 7);
	
	echo "<br>";
	//Con trim lo que hacemos es quitamos los espacios en blanco
	echo trim("        hola     soy      Marcos");

?>