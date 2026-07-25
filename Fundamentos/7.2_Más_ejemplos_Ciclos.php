<?php
    function calculaIMC (float $altura, float $peso) {
        return round($peso / ($altura ** 2));
    }

    do {
        echo("Indica tu altura: ");
        $altura = (float) fgets(STDIN);
        echo("\nIndica tu peso: ");
        $peso = (float) fgets(STDIN);
        $imc = calculaIMC($altura, $peso);
        echo("\nTu altura es: ".$altura.", tu peso: ".$peso." y tu imc: ".$imc."\n");
        echo("\nInforme 1 si quieres seguir: ");
        $continuar = (int) fgets(STDIN);
    } while ($continuar == 1);

?>

// Otro ejemplo

<?php
    function operMatematica (float $n1, float $n2, $operación): float {
        switch ($operación) {
            case '+':
                return $n1+$n2;
                break;
            case '-':
                return $n1-$n2;
                break;
            case '*':
                return $n1*$n2;
                break;
            case '/':
                if ($n2 == 0) {
                    echo("División inválida \n");
                    return -1;
                }
                else {
                    return $n1 / $n2;
                }
                break;
            default:
                echo("Opción Inválida");
                return -1;
                break;
        }
    }

    do {
        echo("Indica tu 1º valor: ");
        $a = (float) fgets(STDIN);
        echo("\nIndica el 2º valor: ");
        $b = (float) fgets(STDIN);
        echo("\nIndica cuál es la operación deseada: ");
        $oper = trim(fgets(STDIN));
        $resultado = operMatematica($a, $b, $oper);
        echo("\nEl resultado de la operación es: ".$a." ".$oper." ".$b." = ".$resultado."\n");
        echo("\nInforme 1 si deseas continuar: ");
        $continuar = (int) fgets(STDIN);
    } while ($continuar == 1);

?>

    // Otro ejemplo
    

<?php

    function cF (float $c) {
        return ($c * (9/5))+32;
    }

    do {
        echo("Informe a temperatura em graus Celsius: ");
        $celsius = (float) fgets(STDIN);
        $fahrenheit = cF($celsius);
        echo("\nTemperatura em graus Celsius: ".$celsius.", temperatura em graus Fahrenheit: ".$fahrenheit."\n");
        echo("\nInforme 1 se deseja continuar: ");
        $continuar = (int) fgets(STDIN);
    } while ($continuar == 1);

?>