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
    <div class="contenedor">
        <?php include "botones.inc" ?>
        <div class="cuerpo">
            <form id="dataFRM" action="ProcesoInsertar.php" method="POST">
                <table id="tablaFRM">
                    <tr>
                        <td><h4>ID:</h4></td>
                        <td>
                            <input id="dataID"
                            type="text"
                            name="ID"
                            maxlenght="10"
                            title="Máximo 10 carácteres" />
                        </td>
                    </tr>
                    <tr>
                    <td><h4>Origen:</h4></td>
                        <td>
                            <input id="dataORG"
                            type="text"
                            name="ORIGEN"
                            maxlenght="10"
                            title="Máximo 10 carácteres" />
                        </td>
                    </tr>
                    <tr>
                    <td><h4>Descripción:</h4></td>
                        <td>
                            <input id="dataDESC"
                            type="text"
                            name="DESCRIPCION"
                            maxlenght="50"
                            title="Máximo 50 carácteres" />
                        </td>
                    </tr>
                    <tr>
                        <td><h4>Precio:</h4></td>
                        <td>
                            <input id="dataPRC"
                            type="text"
                            name="PRECIO"
                            maxlenght="10"
                            title="Máximo 10 carácteres" />
                        </td>
                    </tr>


                </table>
            </form>
        </div>
    </div>
</body>
</html>