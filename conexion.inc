<?php
    // CONEXIÓN AL SERVIDOR DE BASE DE DATOS
    $conex = mysqli_connect("localhost","root","");
    // controlar conexión
    if (!$conex) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=NO se pudo CONECTAR al SERVIDOR de Base de Datos");
    } // endif
    // seleccionar Base de Datos
    $selDB = mysqli_select_db($conex,"ELECTRO");
    // controlar selección de Base de Datos
    if (!$selDB) {
        // enviar mensaje de error
        header("Location: errorPage.php?MSG=NO se pudo SELECCIONAR Base de Datos");
    } // endif
?>