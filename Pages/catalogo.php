<?php include "../session.php" ?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&family=PT+Sans+Narrow&family=Quintessential&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../Script/script.js"></script>
    <title>Gestión de Gastos</title>
</head>

<body>
    <div class="contenedor">
        <?php include "../navsidebar.inc" ?>
        <div class="cuerpoCatalogo">
            <fieldset id="fldFRM">
                <legend>Insertar</legend>
                <form id="dataFRM" action="ProcesoINS.php" method="POST">
                    <table id="tablaFRM">
                        <tr>
                            <td>
                                <h4>Descripción:</h4>
                            </td>
                            <td>
                                <input id="dataDES" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="DES" maxlenght="50" title="Máximo 50 carácteres" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Importe:</h4>
                            </td>
                            <td>
                                <input id="dataIMP" type="text" name="IMP" maxlenght="10" title="Máximo 10 carácteres" />
                            </td>
                        </tr>
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
                                <input type="button" class="BotonesFormulario" value="Confirmar" onclick="CheckForm('Insertar');" />
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