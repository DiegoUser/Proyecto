<?php
$fila = 1;
while ($regELEC     = mysqli_fetch_array($result)) {
    $id             = $regELEC["idELEC"];
    $descripcion    = $regELEC["desELEC"];
    $origen         = $regELEC["orgELEC"];
    $precio         = $regELEC["prcELEC"];
    $resto = $fila % 2;
    if ($resto == 0) {
        echo "<tr class='filaPAR'>\n";
    } else {
        echo "<tr class='filaIMP'>\n";
    }
    echo " <td>$id</td>\n";
    echo " <td>$descripcion</td>\n";
    echo " <td>$origen</td>\n";
    echo " <td>$precio</td>\n";
    echo "<tr>\n";
    $fila++;
}
mysqli_close($conex);
?>
</table>