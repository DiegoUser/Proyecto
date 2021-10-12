<?php
    include "../conexion.inc";
    $id          = $_POST["ID"];
    $descripcion = utf8_decode($_POST["DES"]);
    $origen      = strtoupper($_POST["ORG"]);
    $precio      = $_POST["PRC"];
    // crear sentencia SQL para actualizar
    $sql  = "UPDATE electro SET ";
    $sql .= "desELEC='$descripcion',";
    $sql .= "orgELEC='$origen',";
    $sql .= "prcELEC='$precio'";
    $sql .= "WHERE idELEC=$id";                
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver al forumulario automáticamente
    header("Location: FormMOD.php");
?>
    