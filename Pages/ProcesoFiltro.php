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
    <!-- SECCION CONTENIDO -->
    <div class="contenedor">
        <?php include "../botones.inc" ?>
        <div id="Filtro">
            <fieldset id="FldConsultas">
                <legend>Filtro</legend>
                <form id="dataFRM" action="ProcesoFiltro.php" method="POST">
                    <table>
                        <tr>
                            <td>
                                <h4>Descripcion:</h4>
                            </td>
                            <td>
                                <input id="dataDES" type="text" name="DES" />
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
        <div id="Filtrado">
            <form id="dataFRM" action="ProcesoFiltro.php" method="POST">
                <table id="TablaConsultas">
                    <?php
                    // determinar filtro del listado
                    if (isset($_POST["DES"])) {
                        // asignar filtro especificado en el formulario
                        $descripcion = $_POST["DES"];
                    } else {
                        // asignar filtro desde el listado
                        $descripcion = $_GET["DES"];
                    }

                    // determinar orden del listado
                    if (isset($_GET["ORD"])) {
                        // obtener orden especificado
                        $orden = $_GET["ORD"];
                    } else {
                        // establecer orden por defecto
                        $orden = "idGastos";
                    }

                    // determinar filtro
                    echo "
                <tr>
                    <th>
                        <a href='./ProcesoFiltro.php?ORD=idGastos&DES=$descripcion'>ID</a>
                    </th>
                    <th>
                        <a href='./ProcesoFiltro.php?ORD=descripcionGastos&DES=$descripcion'>Descripcion</a>
                    </th>
                    <th>
                        <a href='./ProcesoFiltro.php?ORD=importeGastos&DES=$descripcion'>Importe</a>
                    </th>
                    <th>
                        <a href='./ProcesoFiltro.php?ORD=fechaGastos&DES=$descripcion'>Fecha</a>
                    </th>
                </tr>
                ";
                    if (empty($descripcion)) {
                        include "../conexion.inc";
                        $sql = "SELECT * FROM gestion ORDER BY $orden";
                        $result = mysqli_query($conex, $sql);
                        include_once "ConsultaTabla.php";
                    }

                    if (!empty($descripcion)) {
                        include "../conexion.inc";
                        $sql = "SELECT * FROM gestion WHERE descripcionGastos LIKE '%$descripcion%' ORDER BY $orden";
                        $result = mysqli_query($conex, $sql);
                        if (mysqli_num_rows($result) == 0) {
                    ?>
                            <td>No</td>
                            <td>Existe</td>
                            <td>Registro</td>
                    <?php
                            mysqli_close($conex);
                            header("refresh:3 url=consultas.php");
                        } else {
                            include_once "ConsultaTabla.php";
                        }
                    }
                    ?>
                    <div class="tableFooter">
                        <button class="botonTotal" type="button" onclick="SetBox('total')"><strong>Mostrar Total</strong></button>
                        <div id="total">
                            <?php
                            echo $total;
                            ?>

                        </div>
                    </div>
            </form>
        </div>
</body>

</html>