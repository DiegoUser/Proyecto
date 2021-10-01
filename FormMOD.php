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

    <div id="contenido">
        <fieldset>
            <legend>Actualizar</legend>
            <form id="dataFRM" action="ProcesoPersonasConfirmUPD.php" method="POST">
                <table id="tblFRM">
                    <tr>
                        <td>
                            ID:
                        </td>
                        <td>
                            <input id="dataID" type="text" name="ID" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nombre:
                        </td>
                        <td>
                            <input id="dataNOM" type="text" name="NOM" disabled="true" title="deshabilitado" value="deshabilitado"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Dirección:
                        </td>
                        <td>
                            <input id="dataDIR" type="text" name="DIR" disabled="true" title="deshabilitado" value="deshabilitado"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Teléfono:
                        </td>
                        <td>
                            <input id="dataTEL" type="text" name="TEL" disabled="true" title="deshabilitado" value="deshabilitado"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Departamento:
                        </td>
                        <td>
                            <input id="dataDTO" type="text" name="DTO" disabled="true" title="deshabilitado" value="deshabilitado"/>
                        </td>
                    </tr>
                    <!--BOTONES DEL FORMULARIO-->
                    <tr>
                        <td colspan="2">
                            <input type="button" value="Confirmar" onclick="CheckID();" />
                            <input type="reset" name="Cancelar" />
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</body>
</html>