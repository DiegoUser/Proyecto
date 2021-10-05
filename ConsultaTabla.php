<?php
$fila = 1;
while ($regELEC     = mysqli_fetch_array($result)) {
    $id             = $regelec["idELEC"];
    $descripcion    = $regelec["desELEC"];
    $origen         = $regelec["orgELEC"];
    $precio         = $regelec["prcELEC"];
    $resto = $fila % 2;
    if ($resto == 0) {
        echo "<tr class='filaPAR'>\n";
    } else {
        echo "<tr class='filaIMP'>\n";
    }
    echo " <td style='text-align:right;'>$id</td>\n";
    echo " <td style='width:300px;'>$descripcion</td>\n";
    echo " <td style='width:500px;'>$origen</td>\n";
    echo " <td style='width:200px;'>$precio</td>\n";
    echo "<tr>\n";
    $fila++;
}
mysqli_close($conex);
?>
</table>