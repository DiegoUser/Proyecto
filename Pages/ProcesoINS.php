<?php
    include "../conexion.inc";
    // capturar datos del formulario
    $descripcion = utf8_decode($_POST["DES"]);
    $origen      = strtoupper($_POST["ORG"]);
    $precio      = $_POST["PRC"];
    // crear sentencia SQL
    $sql  = "INSERT INTO ELECTRO ";
    $sql .= "(idELEC,desELEC,orgELEC,prcELEC) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$descripcion','$origen','$precio')";
    // depurar SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver al forumulario automáticamente
    header("Location: catalogo.php");
?>