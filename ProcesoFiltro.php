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
    <!-- SECCION CONTENIDO -->
    <div class="contenedor">
        <?php include "botones.inc" ?>
        <div id="Filtro">
            <form id="dataFRM" action="ProcesoFiltro.php" method="POST">
                <table id="TablaConsultas">
                    <?php
                    // determinar filtro del listado
                    if (isset($_POST["ORG"])) {
                        // asignar filtro especificado en el formulario
                        $origen = $_POST["ORG"];
                    } else {
                        // asignar filtro desde el listado
                        $origen = $_GET["ORG"];
                    }

                    // determinar orden del listado
                    if (isset($_GET["ORD"])) {
                        // obtener orden especificado
                        $orden = $_GET["ORD"];
                    } else {
                        // establecer orden por defecto
                        $orden = "idELEC";
                    }

                    // determinar filtro
                    echo "
                <tr>
                    <th>
                        <a href='ProcesoFiltro.php?ORD=idELEC&ORG=$origen'>ID</a>
                    </th>
                    <th>
                    <a href='ProcesoFiltro.php?ORD=desELEC&ORG=$origen'>Descripcion</a>
                    </th>
                    <th>
                    <a href='ProcesoFiltro.php?ORD=orgELEC&ORG=$origen'>Origen</a>
                    </th>
                    <th>
                    <a href='ProcesoFiltro.php?ORD=prcELEC&ORG=$origen'>Precio</a>
                    </th>
                </tr>
                ";
                    if (empty($origen)) {
                        include "conexion.inc";
                        $sql = "SELECT * FROM electro ORDER BY $orden";
                        $result = mysqli_query($conex, $sql);
                        include_once "ConsultaTabla.php";
                    }

                    if (!empty($origen)) {
                        include "conexion.inc";
                        $sql = "SELECT * FROM electro WHERE orgELEC LIKE '%$origen%' ORDER BY $orden";
                        $result = mysqli_query($conex, $sql);
                        if (mysqli_num_rows($result) == 0) {
                    ?>
                            <td>No</td>
                            <td>Existe</td>
                            <td>Registro</td>
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
        <div>
            <button type="button" class="" onclick="window.location.href='consultas.php'">Volver</button>
        </div>
</body>

</html>