<?php
    include "conexion.inc";
    // capturar datos del formulario
    $id          = $_POST["ID"];
    $descripcion = utf8_decode($_POST["DES"]);
    $origen      = utf8_decode($_POST["ORG"]);
    $precio      = $_POST["PRC"];
    // crear sentencia SQL para actualizar
    $sql  = "UPDATE electro SET ";
    $sql .= "desELE='$descripcion', ";
    $sql .= "orgELE='$origen', ";
    $sql .= "prcELE='$precio', ";
    $sql .= "WHERE idELE=$id";
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver al formulario automáticamente
    header("Location: FormMOD.php");
?>
