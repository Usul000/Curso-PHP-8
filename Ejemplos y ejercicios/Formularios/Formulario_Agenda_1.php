<?php

session_start();

// A axenda vive na sesión para que os datos persistan entre recargas
if (!isset($_SESSION["axenda"])) {
    $_SESSION["axenda"] = [  // Exemplo de datos iniciais (pode estar baleiro)
        "Pepe Rico" => "600111222",
        "Rebeca Collado" => "600333444",
        "Xoán Pérez" => "600555666",
    ];

}

$axenda = &$_SESSION["axenda"];
$mensaxe = "";
$tipodeMensaxe = ""; // "erro" ou "ok"

if ($_SERVER["REQUEST_METHOD"] == "POST"){





    $nome = trim($_POST["nome"] ?? "");
    $telefono = trim($_POST["telefono"] ?? "");

    if ($nome === "") {
        // Validación inicial: nome obrigatorio
        $mensaxe = "O nome é un campo obrigatorio.";
        $tipoMensaxe = "erro";

    } elseif (array_key_exists($nome, $axenda)) {

        if ($telefono === "") {
            // Nome existe e teléfono baleiro -> eliminar contacto
            unset($axenda[$nome]);
            $mensaxe = "Contacto \"$nome\" eliminado correctamente.";
            $tipoMensaxe = "ok";
        } else {
            // Nome existe e hai teléfono novo -> actualizar
            $axenda[$nome] = $telefono;
            $mensaxe = "Contacto \"$nome\" actualizado correctamente.";
            $tipoMensaxe = "ok";
        }

    } else {
        // Nome novo -> engadir contacto
        $axenda[$nome] = $telefono;
        $mensaxe = "Contacto \"$nome\" engadido correctamente.";
        $tipoMensaxe = "ok";
    }
}

// Ordenar a axenda alfabeticamente polo nome (opcional, mellora a presentación)
ksort($axenda);
?>
<!DOCTYPE html>
<html lang="gl">
<head>
    <meta charset="UTF-8">
    <title>Axenda telefónica</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="contedor">

        <h1>📒 Axenda telefónica</h1>

        <!-- ===== VISTA DA AXENDA ===== -->
        <section class="vista-axenda">
            <h2>Contactos</h2>

            <?php if (empty($axenda)): ?>
                <p class="axenda-baleira">A axenda está baleira. Engade o teu primeiro contacto no formulario de abaixo.</p>
            <?php else: ?>
                <table class="taboa-contactos">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($axenda as $nomeContacto => $telefonoContacto): ?>
                            <tr>
                                <td><?= htmlspecialchars($nomeContacto) ?></td>
                                <td><?= htmlspecialchars($telefonoContacto) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </section>

        <!-- ===== MENSAXE DE ESTADO ===== -->
        <?php if ($mensaxe !== ""): ?>
            <p class="mensaxe mensaxe-<?= $tipoMensaxe ?>"><?= htmlspecialchars($mensaxe) ?></p>
        <?php endif; ?>

        <!-- ===== FORMULARIO DE XESTIÓN ===== -->
        <section class="formulario-xestion">
            <h2>Xestionar contacto</h2>
            <p class="axuda">
                · Nome novo → engade contacto.<br>
                · Nome existente + teléfono → actualiza.<br>
                · Nome existente + teléfono baleiro → elimina.
            </p>

            <form method="POST" action="">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Nome do contacto">

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" placeholder="Número de teléfono">

                <button type="submit">Gardar</button>
            </form>
        </section>

    </div>

</body>
</html>
