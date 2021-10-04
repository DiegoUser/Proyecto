<?php
    include "conexion.inc";
    $origen      = strtoupper($_POST["ORG"]);
    // crear sentencia SQL para actualizar
    $sql = "SELECT * FROM electro WHERE orgELEC = $origen";           
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver al forumulario automáticamente
    header("Location: filtrado.php");
?>