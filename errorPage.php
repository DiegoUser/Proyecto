<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&family=PT+Sans+Narrow&family=Quintessential&display=swap" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
    <title>Electro.Web</title>
</head>

<body>
    <!-- SECCION CONTENIDO -->
    <div class="contenedor">
        <fieldset id="error">
            <legend>E R R O R</legend>
            <?php
            // capturar mensaje de error
            $mensaje = $_GET["MSG"];
            echo "<h2>A T E N C I O N</h2>\n";
            echo "<h2>$mensaje</h2>\n";
            ?>
        </fieldset>

    </div>
</body>

</html>