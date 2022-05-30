//Variables globales usadas utilizadas con js.

//Comprobación Formulario de Registro
var rellenadoCamposForm = [false, false, false, false];
var datosUsuario = [];

var email = document.getElementById("email").value;
var errorEmail = document.getElementById("errorEmail");
var password = document.getElementById("password").value;
var confirmaPassword = document.getElementById("confirmaPassword").value;
var errorConfirmaPassword = document.getElementById("errorConfirmaPassword");
var password2 = document.getElementById("password").value;
var usuario = document.getElementById("usuario").value;
var errorPassword = document.getElementById("errorPassword");
var errorFormulario = document.getElementById("errorFormulario");

//Bloques de Iniciar sesión y registro
var login = document.getElementById('divL');
var registro = document.getElementById('divR');
