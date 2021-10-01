function CheckForm() {
    // preperar mensaje y control de error
    var mensaje = "ATENCION!!!... Ingrese:\n";
    var error   = false;
    // capturar datos del formulario
    var descripcion = document.getElementById("dataNOM").value;
    var origen      = document.getElementById("dataDIR").value;
    var precio      = document.getElementById("dataDTO").value;
    // validar datos
    if (descripcion =="") {
        error   = true;
        mensaje = mensaje+"Descripción:\n";
    } // endif
    if (origen=="") {
        error   = true;
        mensaje = mensaje+"Origen:\n";
    } // endif
    if (precio=="") {
        error   = true;
        mensaje = mensaje+"Precio:\n";
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