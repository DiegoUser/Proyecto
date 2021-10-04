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
        <div id="Filtro">
            <form id="dataFRM" action="ProcesoFiltro.php" method="POST">
                <table id="TablaConsultas">
                    <tr>
                        <td>
                            <h4>Origen:</h4>
                        </td>
                        <td>
                            <input id="dataORG" type="text" name="ORG" maxlenght="10" title="Máximo 10 carácteres" />
                        </td>
                    </tr>
                    <tr>
                        <td id="botonesformulario" colspan="2">
                            <input type="button" class="BotonesFormulario" value="Buscar" onclick="Filtro();" />
                            <input type="reset" class="BotonesFormulario" value="Cancelar" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>