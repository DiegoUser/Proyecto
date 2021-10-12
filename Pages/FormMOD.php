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
        <div class="cuerpoCatalogo">
            <?php include "botonesFORM.inc" ?>
            <div id="contenido">
                <fieldset id="fldFRM">
                    <legend>Modificar</legend>
                    <form id="dataFRM" action="ProcesoConfirmMOD.php" method="POST">
                        <table id="tablaFRM">
                            <tr>
                                <td>
                                    <h4>ID:</h4>
                                </td>
                                <td>
                                    <input id="dataID" type="text" name="ID" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Descripción:</h4>
                                </td>
                                <td>
                                    <input id="dataDES" type="text" name="DES" disabled="true" title="deshabilitado" value="deshabilitado" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4> Origen:</h4>
                                </td>
                                <td>
                                    <input id="dataORG" type="text" name="ORG" disabled="true" title="deshabilitado" value="deshabilitado" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4> Precio:</h4>
                                </td>
                                <td>
                                    <input id="dataPRC" type="text" name="PRC" disabled="true" title="deshabilitado" value="deshabilitado" />
                                </td>
                            </tr>
                            <tr>
                                <td id="botonesformulario" colspan="2">
                                    <input type="button" class="BotonesFormulario" value="Confirmar" onclick="CheckID();" />
                                    <input type="reset"  class="BotonesFormulario" name="Cancelar" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
</body>
</html>