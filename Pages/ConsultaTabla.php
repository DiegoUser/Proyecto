<?php
$fila = 1;
while ($regGastos   = mysqli_fetch_array($result)) {
    $id             = $regGastos["idGastos"];
    $descripcion    = $regGastos["descripcionGastos"];
    $importe        = $regGastos["importeGastos"];
    $fecha          = $regGastos["fechaGastos"];
    $resto = $fila % 2;
    if ($resto == 0) {
        echo "<tr class='filaPAR'>\n";
    } else {
        echo "<tr class='filaIMP'>\n";
    }
    echo " <td>$id</td>\n";
    echo " <td>$descripcion</td>\n";
    echo " <td>$importe</td>\n";
    echo " <td>$fecha</td>\n";
    echo "<tr>\n";
    $fila++;
}
mysqli_close($conex);
?>
</table>