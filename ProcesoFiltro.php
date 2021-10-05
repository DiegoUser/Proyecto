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

    <?php
    $origen = $_POST["ORG"];
    ?>
    <!-- SECCION CONTENIDO -->
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
                            <input id="dataORG" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="ORG" maxlenght="10" title="Máximo 10 carácteres" />
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
            <fieldset id="FldConsultas">
                <legend>Listado</legend>
                <table id="tabla">
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Origen</th>
                        <th>Precio</th>
                    </tr>
                    <?php
                    if (empty($origen)) {
                        include "conexion.inc";
                        $sql = "SELECT * FROM electro";
                        $result = mysqli_query($conex, $sql);
                        include_once "ConsultaTabla.php";
                    }
                    if (!empty($origen)) {
                        include "conexion.inc";
                        $sql = "SELECT * FROM electro WHERE orgELEC LIKE '%$origen%' ";
                        $result = mysqli_query($conex, $sql);
                        if (mysqli_num_rows($result) == 0) {
                    ?>
                            <td style="font-size: 35px;">No</td>
                            <td style="font-size: 35px;">Existe</td>
                            <td style="font-size: 35px;">Registro</td>
                    <?php
                            mysqli_close($conex);
                            header("refresh:3 url=http://127.0.0.1/Proyecto/consultas.php");
                        } else {
                            include_once "ConsultaTabla.php";
                        }
                    }
                    ?>
            </fieldset>
        </div>
</body>

</html>