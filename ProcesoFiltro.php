<?php
    include "conexion.inc";
    $origen      = strtoupper($_POST["ORG"]);
    // crear sentencia SQL para actualizar
    if ($origen=""){
        $sql = "SELECT * FROM electro";
        mysqli_query($conex,$sql);
        mysqli_close($conex);
        header("Location: filtrado.php");
    }else{
        $sql = "SELECT * FROM electro WHERE orgELEC = $origen";
        mysqli_query($conex,$sql);
        mysqli_close($conex);
        header("Location: filtrado.php");
    }