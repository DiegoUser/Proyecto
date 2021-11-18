<?php include "./pages/session.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/estilo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Bona+Nova&family=PT+Sans+Narrow&family=Quintessential&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">
    <script type="text/javascript" src="./Script/script.js"></script>
    <title>Gestión de Gastos</title>
</head>

<body>
    <div class="contenedor">
        <div class="botones">
            <button type="button" class="botonesMenu" onclick="window.location.href='./index.html'">Inicio</button>
            <button type="button" class="botonesMenu" onclick="window.location.href='./Pages/catalogo.php'">Catálogo</button>
            <button type="button" class="botonesMenu" onclick="window.location.href='./Pages/consultas.php'">Consultas</button>
        </div>
        <div class="cuerpo">
            <div class="logo">
                <img src="./Resources/logo.png" width="300" height="300">
            </div>
            <div id="textoLogo">
                <fieldset id="fldINDEX">
                    <legend>Gestión</legend>
                    <h2>Este servicio está pensado para llevar una gestión de los ingresos, egresos y ahorros.
                    </h2>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>