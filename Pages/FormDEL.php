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
    <title>Electro.Web</title>
</head>

<body>
    <div class="contenedor">
        <?php include "../botones.inc" ?>
        <div class="cuerpoCatalogo">
            <?php include "../botonesFORM.inc" ?>
            <div id="contenido">
                <fieldset id="fldFRM">
                    <legend>Eliminar</legend>
                    <form id="dataFRM" action="ProcesoConfirmDEL.php" method="POST">
                        <table id="tablaFRM">
                            <tr>
                                <td>
                                    <h4>ID:</h4>
                                </td>
                                <td>
                                    <input id="dataID" type="text" name="ID" maxlength="5" title="Máximo 5 dígitos" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Descripción:</h4>
                                </td>
                                <td>
                                    <input id="dataDES" type="text" name="DES" maxlenght="50" title="Máximo 50 carácteres" disabled="true" value="deshabilitado" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Importe:</h4>
                                </td>
                                <td>
                                    <input id="dataIMP" type="text" name="IMP" maxlenght="10" title="Máximo 10 carácteres" disabled="true" value="deshabilitado" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Fecha:</h4>
                                </td>
                                <td>
                                    <input id="dataFEC" type="date" name="FEC" disabled="true" value="deshabilitado" />
                                </td>
                            </tr>
                            <!-- botones del formulario -->
                            <tr>
                                <td id="botonesformulario" colspan="2">
                                    <input type="button" class="BotonesFormulario" value="Confirmar" onclick="CheckID();" />
                                    <input type="reset" class="BotonesFormulario" value="Cancelar" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>

</html>