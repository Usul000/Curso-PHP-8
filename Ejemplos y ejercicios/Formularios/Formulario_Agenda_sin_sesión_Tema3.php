<!DOCTYPE html>
<html lang="gl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Axenda Telefónica</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
        }
 
        .contedor {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
 
        h2, h3 {
            color: #333;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }
 
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }
 
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
 
        th {
            background-color: #f2f2f2;
        }
 
        tr:nth-child(even) {
            background-color: #f7f7f7;
        }
 
        .advertencia {
            color: #d9534f;
            background-color: #f2dede;
            border: 1px solid #ebccd1;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
 
        .exito {
            color: #3c763d;
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
 
        form {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
 
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
 
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
 
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
 
        input[type="submit"]:hover {
            background-color: #45a049;
        }
 
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
 
        .axenda-baleira {
            color: #666;
            font-style: italic;
            text-align: center;
            padding: 20px;
        }
 
        .acciones {
            font-size: 0.9em;
            color: #666;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="contedor">
 
        <?php
        // Inicializamos la agenda
        $axenda = array();
 
        // Si hay datos en el formulario, los recuperamos
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['axenda_data'])) {
            $axenda = json_decode($_POST['axenda_data'], true);
        }
 
        $mensaxe = '';
        $tipoMensaxe = ''; // 'advertencia' o 'exito'
 
        // Procesamos el formulario cuando se envía
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = trim($_POST['nome'] ?? '');
            $telefono = trim($_POST['telefono'] ?? '');
 
            // Validación inicial con el campo nombre obligatorio
            if (empty($nome)) {
                $mensaxe = "O nome é un campo obrigatorio.";
                $tipoMensaxe = 'advertencia';
            } else {
                // Comprobamos si el contacto ya existe
                $contactoExiste = array_key_exists($nome, $axenda);
 
                // Lógica según las reglas del ejercicio:
                if (!$contactoExiste && !empty($telefono)) {
                    // Añadir nuevo contacto
                    $axenda[$nome] = $telefono;
                    $mensaxe = "Contacto '$nome' engadido correctamente.";
                    $tipoMensaxe = 'exito';
                } elseif ($contactoExiste && !empty($telefono)) {
                    // Actualizar contacto existente
                    $axenda[$nome] = $telefono;
                    $mensaxe = "Teléfono de '$nome' actualizado correctamente.";
                    $tipoMensaxe = 'exito';
                } elseif ($contactoExiste && empty($telefono)) {
                    // Eliminar contacto
                    unset($axenda[$nome]);
                    $mensaxe = "Contacto '$nome' eliminado correctamente.";
                    $tipoMensaxe = 'exito';
                } else {
                    // Caso: nombre nuevo sin teléfono (no se puede añadir)
                    $mensaxe = "Para engadir un novo contacto, é necesario especificar un teléfono.";
                    $tipoMensaxe = 'advertencia';
                }
            }
        }
        ?>
 
        <!-- Sección 1: Vista de la agenda -->
        <h2>Contactos da Axenda</h2>
 
        <!-- Mostramos mensajes -->
        <?php if (!empty($mensaxe)): ?>
            <div class="<?php echo $tipoMensaxe; ?>">
                <?php echo $mensaxe; ?>
            </div>
        <?php endif; ?>
 
        <?php if (empty($axenda)): ?>
            <div class="axenda-baleira">
                <p>A túa axenda está baleira. Engade o teu primeiro contacto!</p>
            </div>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($axenda as $nomeContacto => $telefonoContacto): ?>
                        <tr>
                            <td><?php echo $nomeContacto; ?></td>
                            <td><?php echo $telefonoContacto; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
 
        <!-- Sección 2: Formulario de gestión -->
        <h3>Xestionar Contactos</h3>
 
        <form method="post" action="">
            <!-- Campo hidden para mantener los datos entre recargas -->
            <input type="hidden" name="axenda_data" value='<?php echo json_encode($axenda); ?>'>
 
            <div>
                <label for="nome"><strong>Nome:</strong></label>
                <input type="text" id="nome" name="nome" placeholder="Introduce o nome do contacto" required>
            </div>
 
            <div>
                <label for="telefono"><strong>Teléfono:</strong></label>
                <input type="text" id="telefono" name="telefono" placeholder="Introduce o número de teléfono">
            </div>
 
            <input type="submit" value="Gardar / Actualizar / Eliminar">
        </form>
 
        <div class="acciones">
            <h4>Instrucións de uso:</h4>
            <ul>
                <li><strong>Engadir:</strong> Introduce un nome novo e un teléfono e preme o botón.</li>
                <li><strong>Actualizar:</strong> Introduce un nome existente e o novo teléfono.</li>
                <li><strong>Eliminar:</strong> Introduce un nome existente e deixa o campo de teléfono baleiro.</li>
            </ul>
        </div>
 
    </div>
</body>
</html>