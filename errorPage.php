<!DOCTYPE html>
<html lang="es">

<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta charset="utf-8" />
	<title>Electro.Web</title>
    <link rel="stylesheet" href="estilo.css" />
</head>

<body>
<!-- SECCION CONTENIDO --> 
<div id="contenido">
 <fieldset>
  <legend>E R R O R ! ! !</legend>
   <?php
        // capturar mensaje de error
        $mensaje = $_GET["MSG"];
        echo "<p class='txtERR'>A T E N C I O N ! ! ! . . .</p>\n";
        echo "<p class='msgERR'>$mensaje</p>\n";
   ?>  
 </fieldset>

</div>
</body>
</html>