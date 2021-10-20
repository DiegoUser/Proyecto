function CheckForm(funcionalidad) {
  // preperar mensaje y control de error
  let mensaje = "ATENCION!!!... Ingrese:\n";
  let error = false;
  // capturar datos del formulario
  let descripcion = document.getElementById("dataDES").value;
  let origen = document.getElementById("dataORG").value;
  let precio = document.getElementById("dataPRC").value;
  
  // validar datos
  if (descripcion == "") {
    error = true;
    mensaje = mensaje + "Descripción:\n";
  } // endif
  if (origen == "") {
    error = true;
    mensaje = mensaje + "Origen:\n";
  } // endif
  if (origen !== "USA" && origen !== "CHINA" && origen !== "INDIA") {
    error = true;
    mensaje = mensaje + "Origen habilitado:\n";
  } //endif
  if (precio == "") {
    error = true;
    mensaje = mensaje + "Precio:\n";
  } // endif
  if (precio == "0") {
    error = true;
    mensaje = mensaje + "Precio no puede ser 0:\n";
  } // endif
  if (isNaN(precio)) {
    error = true;
    mensaje = mensaje + "Precio debe ser numérico:\n";
  } // endif
  // control de error
  if (error) {
    // enviar mensaje
    window.alert(mensaje);
  } else if (funcionalidad == "Eliminar") {
    ConfirmDEL();
  } else if (funcionalidad == "Modificar") {
    ConfirmMOD();
  } else if (funcionalidad == 'Insertar') {
    // enviar formulario
    document.getElementById("dataFRM").submit();
  } //endif
} // end function

function CheckID() {
  // preperar mensaje y control de error
  let mensaje = "ATENCION!!!... Ingrese:\n";
  let error = false;
  // capturar datos del formulario
  let id = document.getElementById("dataID").value;
  // validar datos
  if (id == "") {
    error = true;
    mensaje = mensaje + "ID no puede ser vacío:\n";
  } // endif
  if (isNaN(id)) {
    error = true;
    mensaje = mensaje + "ID debe ser numérico:\n";
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
  let confirma = window.confirm("Confirme si desea eliminar el registro");
  if (confirma) {
    // enviar formulario
    document.getElementById("dataFRM").submit();
  } else {
    // volver al formulario DEL
    window.location = "FormDEL.php";
  }
} // end function
function ConfirmMOD() {
  // muestra ventana de confirmación
  let confirma = window.confirm("Confirme si desea modificar el registro");
  if (confirma) {
    // enviar formulario
    document.getElementById("dataFRM").submit();
  } else {
    // volver al formulario DEL
    window.location = "FormMOD.php";
  }
} // end function

function Filtro() {
  // preperar mensaje y control de error
  let mensaje = "ATENCION!!!... Ingrese:\n";
  let error = false;
  // capturar datos del formulario
  let origen = document.getElementById("dataORG").value;
  // validar datos
  if (origen !== "USA" && origen !== "CHINA" && origen !== "INDIA"&& origen !== "") {
    error = true;
    mensaje = mensaje + "Origen habilitado:\n";
  } //endif
  if (error) {
    // enviar mensaje
    window.alert(mensaje);
  } else {
    document.getElementById("dataFRM").submit();
  }//endif
} // end function