function CheckForm(funcionalidad) {
    // preperar mensaje y control de error
    var mensaje = "ATENCION!!!... Ingrese:\n";
    var error   = false;
    // capturar datos del formulario
    var descripcion = document.getElementById("dataDES").value;
    var origen      = document.getElementById("dataORG").value;
    var precio      = document.getElementById("dataPRC").value;
    // validar datos
    if (descripcion =="") {
        error   = true;
        mensaje = mensaje+"Descripción:\n";
    } // endif
    if (origen=="") {
        error   = true;
        mensaje = mensaje+"Origen:\n";
    } // endif
    if (origen!=='USA' && origen!=='CHINA' && origen!== 'INDIA'){
        error = true;
        mensaje = mensaje+"Origen habilitado:\n";
    }//endif
    if (precio=="") {
        error   = true;
        mensaje = mensaje+"Precio:\n";
    } // endif
    if (precio=="0") {
        error   = true;
        mensaje = mensaje+"Precio no puede ser 0:\n";
    } // endif
    if (isNaN(precio)) {
        error   = true;
        mensaje = mensaje+"Precio debe ser numérico:\n";
    } // endif
    // control de error
    if (error) {
        // enviar mensaje
        window.alert(mensaje);
    }     
 // endif
    if(funcionalidad=='Eliminar'){
        ConfirmDEL();
    } else if(funcionalidad=='Modificar'){
        ConfirmMOD();
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } //endif
}// end function


function CheckID() {
    // preperar mensaje y control de error
    var mensaje = "ATENCION!!!... Ingrese:\n";
    var error   = false;
    // capturar datos del formulario
    var id = document.getElementById("dataID").value;
    // validar datos
    if (id=="") {
        error   = true;
        mensaje = mensaje+"ID no puede ser vacío:\n";
    } // endif
    if (isNaN(id)) {
        error   = true;
        mensaje = mensaje+"ID debe ser numérico:\n";
    } // endif
    // control de error
    if (error) {
        // enviar mensaje
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif                                
} // end function

function SetPage(url) {
    // redirigira a la url especificada
    window.location = url;
} // end function

function ConfirmDEL() {
    // muestra ventana de confirmación
    var confirma = window.confirm("Confirme si desea eliminar el registro");
    if (confirma) {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } else {
        // volver al formulario DEL
        window.location = 'FormDEL.php';
    }
} // end function
function ConfirmMOD() {
    // muestra ventana de confirmación
    var confirma = window.confirm("Confirme si desea modificar el registro");
    if (confirma) {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } else {
        // volver al formulario DEL
        window.location = 'FormMOD.php';
    }
} // end function