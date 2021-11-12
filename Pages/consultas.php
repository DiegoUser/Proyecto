<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&family=PT+Sans+Narrow&family=Quintessential&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../Script/script.js"></script>
    <script type="text/javascript">
        window.addEventListener('keydown', function(e) {
            if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {
                if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
                    e.preventDefault();
                    return false;
                }
            }
        }, true);
    </script>
    <title>Gestión de Gastos</title>
</head>

<body>
    <div class="contenedor">
        <?php include "../botones.inc" ?>
        <div id="Filtro">
            <fieldset id="FldConsultas">
                <legend>Filtro</legend>
                <form id="dataFRM" action="ProcesoFiltro.php" method="POST">
                    <table id="TablaConsultas">
                        <tr>
                            <td>
                                <h4>Fecha:</h4>
                            </td>
                            <td>
                                <input id="dataFEC" type="date" name="FEC" />
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
            </fieldset>
        </div>
        <div class="info">
            <p><strong>Info!</strong> Si desea visualizar todos los registros, deje el filtro vacío</p>
        </div>
    </div>
</body>

</html>