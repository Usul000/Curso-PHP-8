<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Include y require</title>
    <style>
        #container { width: 500px; margin: 150px auto; }
        #footer { background-color: #222; padding: 10px; color: white; }
        #menu { background-color: #eee; padding: 10px; }
    </style>
</head>
<body>
    <div id="container">

        <!-- Menú -->
        <div id="menu">
            <?php
                $lista = array('Inicio', 'Servicios', 'Blog', 'Contacto');
                for ($i = 0; $i < count($lista); $i++) {
                    echo $lista[$i] . " ";
                }
            ?>
        </div>

        <!-- Contenido -->
        <h3>Contenido Principal</h3>

        <!-- Footer -->
        <div id="footer">
            Footer
        </div>

    </div>
</body>
</html>