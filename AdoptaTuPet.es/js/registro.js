//Validacion de Registro, si no cumplen con las expresiones regulares aparecerá un bloque informando de un error.
//La variable rellenadoCamposForm[] está creada en index.js y esta compuesta por 4 false que irán cambiando,
//se cambiarán a True cuando se haga una correcta comprobación de cada campo, al tener los 4 se realizará el registro o
//si no estan todos en True aparecera un bloque informando que no se han completado todos los campos.

//Comprobación del email.
document.getElementById("email").addEventListener("blur", function(ev){
    let email = document.getElementById("email").value;

    if (email != "") {
        if (!expEmail.test(email)) {
            errorEmail.style.display = 'block';
            errorEmail.style.color = 'red';
            rellenadoCamposForm[0] = false;
            
        } else {
            errorEmail.style.display = 'none';
            rellenadoCamposForm[0] = true;
        }
    }
    //ev.preventDefault();
});

//Comprobación de la contraseña.
document.getElementById("password").addEventListener("blur", function(ev){
    let password = document.getElementById("password").value;

    if (password != "") {
        if (!expPassword.test(password)) {
            errorPassword.style.display = 'block';
            errorPassword.style.color = 'red';
            rellenadoCamposForm[1] = false;
        } else {
            errorPassword.style.display = 'none';
            rellenadoCamposForm[1] = true;
        }
    }
    ev.preventDefault();
});

//Comprobación de la repetición de la contraseña.
document.getElementById("confirmaPassword").addEventListener("blur", function(ev){
    let confirmaPassword = document.getElementById("confirmaPassword").value;
    let password2 = document.getElementById("password").value;

    if (confirmaPassword != "") {
        if (password2 != confirmaPassword) {
            errorConfirmaPassword.style.display = 'block';
            errorConfirmaPassword.style.color = 'red';
            rellenadoCamposForm[2] = false;
        } else {
            errorConfirmaPassword.style.display = 'none';
            datosUsuario[16] = password2;
            rellenadoCamposForm[2] = true;
        }
    }
    ev.preventDefault();
});

//No hay comprobación del usuario pero lo guardamos para la comprobación total de los datos.
document.getElementById("usuario").addEventListener("blur", function(ev){
    let usuario = document.getElementById("usuario").value;

    if (usuario != "") {
        datosUsuario[3] = usuario;
        rellenadoCamposForm[3] = true;
    }
    ev.preventDefault();
});

//Comprobación del formulario, revisa si todos los campos han sido completado correctamente.
document.getElementById("formularioRegistro").addEventListener("submit", function(ev){
    let contador = 0;

    for(let i = 0; i < rellenadoCamposForm.length; i++){
        if(rellenadoCamposForm[i] == true){
            contador++;
        }
    }

    if (contador == 4){
        
        alert("¡Se ha completado el registro correctamente!");
        console.log(datosUsuario);

    } else {
        ev.preventDefault();
        errorFormulario.style.color = "red";
        errorFormulario.style.display = "block";

    }
});
