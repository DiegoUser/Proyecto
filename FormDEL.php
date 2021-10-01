<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Birthstone&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&family=PT+Sans+Narrow&family=Quintessential&display=swap" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
    <title>Electro.Web</title>
</head>

<body>
<!-- SECCION CABECERA -->
<?php
    include "head.inc";
?>
<!-- SECCION MENU -->
<?php
    include "menu.inc";
?>
<!-- SECCION CONTENIDO --> 
<div id="contenido">
 <fieldset id="fldFRM">
  <legend>Eliminar</legend>
    <form id="dataFRM" action="ProcesoPersonasConfirmDEL.php" method="POST">
     <table id="tblFRM">
      <tr>
       <td>ID:</td>
       <td>
         <input id="dataID" 
                type="text" 
                name="ID"
                maxlength="5"
                title="Máximo 5 dígitos"
         />
       </td>
      </tr>     
      <tr>
       <td>Nombre:</td>
       <td>
         <input id="dataNOM" 
                type="text" 
                name="NOM"
                maxlength="50"
                title="Máximo 50 caracteres"
                disabled="true"                
                value="deshabilitado" 
         />
       </td>
      </tr>
      <tr>
       <td>Dirección:</td>
       <td>
         <input id="dataDIR" 
                type="text" 
                name="DIR"
                maxlength="100"
                title="deshabilitado"
                disabled="true"
                value="deshabilitado"                                 
         />
       </td>
      </tr>
      <tr>
       <td>Teléfono:</td>
       <td>
         <input id="dataTEL" 
                type="text" 
                name="TEL" 
                maxlength="15"
                title="deshabilitado"
                disabled="true"
                value="deshabilitado"                                 
         />
       </td>
      </tr>
      <tr>
       <td>Departamento:</td>
       <td>
         <input id="dataDTO" 
                type="text" 
                name="DTO"
                maxlength="30"
                title="deshabilitado"
                disabled="true"
                value="deshabilitado"                                 
         />
       </td>
      </tr>
      <!-- botones del formulario -->
      <tr>
       <td colspan="2">
         <input type="button" value="Confirmar" onclick="CheckID();"/>
         <input type="reset"  value="Cancelar" />
       </td>
      </tr>                             
     </table>
    </form>  
 </fieldset>

</div>
</body>
</html>