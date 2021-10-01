<?php
    // PROCESO PERSONAS DEL
    
    // conectar al servidor de Base de Datos
    include "conexion.inc";
    // capturar datos del formulario
    $id = $_POST["ID"];
    // crear sentencia SQL para eliminar registro físicamente
    $sql  = "DELETE FROM personas WHERE idPERS=$id ";
    // depurar SQL
    // die($sql);
    // ejecutar sentencia SQL
    mysqli_query($conex,$sql);
    // cerrar conexión
    mysqli_close($conex);
    // volver al forumulario automáticamente
    header("Location: FormPersonasDEL.php");
?>