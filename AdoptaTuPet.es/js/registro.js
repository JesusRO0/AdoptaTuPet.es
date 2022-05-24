//Validacion de Registro

document.getElementById("email").addEventListener("blur", function(ev){

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
    ev.preventDefault();
});

document.getElementById("password").addEventListener("blur", function(ev){

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


document.getElementById("confirmaPassword").addEventListener("blur", function(ev){

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

document.getElementById("usuario").addEventListener("blur", function(ev){

    if (usuario != "") {
        datosUsuario[3] = usuario;
        rellenadoCamposForm[3] = true;
    }
    ev.preventDefault();
});

document.getElementById("formularioRegistro").addEventListener("submit", function(ev){
    let contador = 0;

    for(let i = 0; i < rellenadoCamposForm.length; i++){
        if(rellenadoCamposForm[i] == true){
            contador++;
        }
    }

    if (contador == 4){
        alert("Ha rellenado satisfactoriamente el formulario, sus datos son los siguientes: " + datosUsuario);
    } else {
        errorFormulario.style.color = "red";
        errorFormulario.style.display = "block";
    }
    ev.preventDefault();
});

