//Validacion de Registro

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

document.getElementById("usuario").addEventListener("blur", function(ev){
    let usuario = document.getElementById("usuario").value;

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

    } else {
        ev.preventDefault();
        errorFormulario.style.color = "red";
        errorFormulario.style.display = "block";

    }
});

