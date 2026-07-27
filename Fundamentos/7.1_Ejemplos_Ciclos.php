// Un ejemplo

<?php
    for ($contador = 0; $contador <= 100; $contador++){
        if($contador % 2 != 0){
            echo($contador."\n");
        }
    }

?>
    
// Otro ejemplo

    <?php
    $altura = $argv[1];
    $peso = $argv[2];
    $imc = $peso / ($altura ** 2);
    echo($imc."\n");
    if ($imc < 18.5) {
        echo("Abaixo do peso \n");
    }
    elseif ($imc >= 18.5 && $imc < 25) {
        echo("Peso normal \n");
    }
    elseif ($imc >= 25 && $imc < 30) {
        echo("Sobrepeso \n");
    }
    elseif ($imc >= 30 && $imc < 35) {
        echo("Obesidade I \n");
    }
    elseif ($imc >= 35 && $imc < 40) {
        echo("Obesidade II \n");
    }
    elseif ($imc >= 40) {
        echo("Obesidade III \n");
    }

    ?>


// Ejemplo con If

<?php
    $horario = $argv[1];

    if ($horario < 12) {
        echo('Bom dia');
    }
    elseif ($horario >= 12 && $horario < 18) {
        echo('Boa tarde');
    }
    else {
        echo("Boa noite");
    }