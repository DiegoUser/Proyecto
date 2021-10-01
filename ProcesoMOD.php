<?php
    include "conexion.inc";
    // capturar datos del formulario
    $id          = $_POST["ID"];
    $descripcion = $_POST["DES"];
    $origen      = $_POST["ORG"];
    $precio      = $_POST["PRC"];
    // crear sentencia SQL para actualizar
    $sql  = "UPDATE electro SET ";
    $sql .= "desELEC='$descripcion', ";
    $sql .= "orgELEC='$origen', ";
    $sql .= "prcELEC='$precio', ";
    $sql .= "WHERE idELEC=$id";
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver al formulario automáticamente
    header("Location: FormMOD.php");
?>