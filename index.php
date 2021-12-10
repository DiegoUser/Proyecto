<?php include "session.php" ?>
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
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&family=PT+Sans+Narrow&family=Quintessential&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script type="text/javascript" src="./Script/script.js"></script>
    <title>Gestión de Gastos</title>
</head>

<body>
    <div class="contenedor">
        <div class="main_box">
            <input type="checkbox" id="check">
            <div class="btn_one">
                <label for="check">
                    <i class="fas fa-bars"></i>
                </label>
            </div>
            <div class="sidebar_menu">
                <div class="logo">
                    <a href="./index.php">Gestión</a>
                </div>
                <div class="btn_two">
                    <label for="check">
                        <i class="fas fa-times"></i>
                    </label>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <i class="fas fa-qrcode"></i>
                            <a href="./index.php">Inicio</a>
                        </li>
                        <!-- Data -->
                        <div onclick="SetBox('Data')">
                            <li>
                                <i class="far fa-newspaper"></i>
                                <a href="#">Data</a>
                                <ul id="Data">
                                    <li>
                                        <i class="fas fa-plus"></i>
                                        <a href="./pages/catalogo.php">Añadir</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-minus"></i>
                                        <a href="./pages/FormDEL.php">Quitar</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-exchange-alt"></i>
                                        <a href="./pages/FormMOD.php">Modificar</a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <!-- Fin de Data -->
                        <!-- Consultas -->
                        <div onclick="SetBox('Consultas')">
                            <li>
                                <i class="far fa-question-circle"></i>
                                <a href="#">Consultas</a>
                                <ul id="Consultas">
                                    <li>
                                        <i class="fas fa-plus"></i>
                                        <a href="./Pages/consultas.php">Egresos</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-plus"></i>
                                        <a href="#">Ingresos</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-plus"></i>
                                        <a href="#">Otros Activos</a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <!-- Fin de Consultas -->
                        <li>
                            <i class="fas fa-sign-out-alt"></i>
                            <a href="./logout.php">LogOut</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cuerpo">
                <div class="logo">
                    <img src="./Resources/logo.jpg" width="400" height="">
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
    </div>
</body>

</html>