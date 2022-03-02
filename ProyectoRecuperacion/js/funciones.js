// Validar form
function ValidarFormulariologin(){

var clave = document.getElementById("password");

error.style.color = "red";

var mensajesError = [];

if(nombreusu.value === null || nombreusu.value === ''  ) {
  mensajesError.push('Ingresa el nombre de usuario');
 
}

if(clave.value === null || password.value === ''){
  mensajesError.push('Ingresa tu clave');
}

error.innerHTML = mensajesError.join(', ');

return false;

  // Si el script ha llegado a este punto, todas las condiciones
  // se han cumplido, por lo que se devuelve el valor true
  return true;
}


function ValidarFormularioRegistro(){

var nombreusu = document.getElementById("usuario");
var nombrecom = document.getElementById("nombrecompleto");
var email = document.getElementById("email");
var clave = document.getElementById("password");
var error = document.getElementById("error");
error.style.color = "red";

var mensajesError = [];

if(nombreusu.value === null || nombreusu.value === ''  ) {
  mensajesError.push('Ingresa el nombre de usuario');
 
}

if(nombrecom === null || nombreusu.value === '' ) {
  mensajesError.push('Ingresa el nombre y apelldios completo');
  
}

if(clave.value === null || password.value === ''){
  mensajesError.push('Ingresa tu clave');
}

if(email.value === null || email.value === ''){
  mensajesError.push('Ingresa tu correo electronico');
}

error.innerHTML = mensajesError.join(', ');

return false;

  // Si el script ha llegado a este punto, todas las condiciones
  // se han cumplido, por lo que se devuelve el valor true
  return true;
}
