<?php
include "../conexion.inc";
// capturar datos del formulario (ID)
$id = $_POST["ID"];
// crear sentencia SQL para buscar ID
$sql = "SELECT * FROM electro WHERE idELEC = $id";
// ejecutar sentencia
$result = mysqli_query($conex, $sql);
// controlar existencia
if (mysqli_num_rows($result) == 0) {
    // enviar mensaje de error
    die(header("Location: errorPage.php?MSG=El ID no existe".mysqli_connect_error()));
} else {
    // cargar registro
    $regELEC     = mysqli_fetch_array($result);
    // cargar y convertir datos
    $id          = $regELEC["idELEC"];
    $descripcion = utf8_encode($regELEC["desELEC"]);
    $origen      = $regELEC["orgELEC"];
    $precio      = $regELEC["prcELEC"];
}
// cerrar conexión
mysqli_close($conex);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/estilo.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&family=PT+Sans+Narrow&family=Quintessential&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../Script/script.js"></script>
    <title>Electro.Web</title>
</head>
<body>
    <?php include "../botones.inc" ?>
    <div id="contenido">
        <fieldset id="fldFRM">
            <legend>Modificar</legend>
            <form id="dataFRM" action="ProcesoMOD.php" method="POST">
                <table id="tablaFRM">
                    <tr>
                        <td>
                            <h4>ID:</h4>
                        </td>
                        <td>
                            <input id="dataID" type="text" name="ID" 
                                <?php
                                    echo "value='$id'";
                                ?> readonly="true" 
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Descripción:</h4>
                        </td>
                        <td>
                            <input id="dataDES" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="DES" 
                                <?php
                                    echo "value='$descripcion'";
                                ?> 
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Origen:</h4>
                        </td>
                        <td>
                            <input id="dataORG" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" name="ORG" 
                                <?php 
                                    echo "value='$origen'";
                                ?> 
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Precio:</h4>
                        </td>
                        <td>
                            <input id="dataPRC" type="text" name="PRC" 
                                <?php 
                                    echo "value='$precio'";
                                ?> 
                            />
                        </td>
                    </tr>
                    <!--BOTONES DEL FORMULARIO-->
                    <tr>
                        <td id="botonesformulario" colspan="2">
                            <input type="button" class="BotonesFormulario" value="Actualizar" onclick="CheckForm('Modificar');" />
                            <input type="reset"  class="BotonesFormulario" name="Cancelar"    onclick="SetPage('FormMOD.php');" />
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</body>
</html>