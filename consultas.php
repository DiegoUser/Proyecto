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
        <div class="CuerpoConsultas">
        <fieldset id="fldLST">
        <legend>Listado</legend>
           <table id="tabla">
               <tr>
                   <th>CONCEPTO</th>
                   <th>IMPORTE</th>
               </tr>
        <?php
           include('conexion.php');
           // iniciar contador de fila
           $fila = 1;
           // guardar valor de total
           $total = 0;
           // extraer registro de la matríz de resultado
           while ($regELEC = mysqli_fetch_array($result)) {
           $id             = $regELEC ["IdELEC"];
           $descripcion    = utf8_encode($regELEC ["desELEC"]);
           $origen         = strtoupper($regELEC ["orgELEC"]);
           $precio         = $regELEC["prcELEC"];
           // calcular fila par/impar
            $resto = $fila%2;
            // determinar fila par/impar
            if ($resto==0) {
                // crear fila par
                echo "<tr class='filaPAR'>\n";
            } else {
                // crear fila impar
                echo "<tr class='filaIMP'>\n";
            } // endif
           // crear fila de datos
            echo "<td>$concepto</td>\n";
            echo "<td>$importe</td>\n";
            echo "</tr>\n";
            //sumar total
            $total=$total+$importe;
            // siguiente fila
            $fila++;
           } //end while
           // cerrar conexión
           mysqli_close($conex);
                ?>
                <tr>
                    <td class="total">Total</td>
                    <td class="total">
                    <?php
                        echo "$total";
                    ?>
                    </td>
                </tr>
            </table>
        </fieldset>
        </div>
    </div>
</body>

</html>