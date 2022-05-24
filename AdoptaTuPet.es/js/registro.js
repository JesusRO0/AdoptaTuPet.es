

/*function errorComprobacion(id, error){
    let valor = document.getElementById(`${id}`).innerText;
    let contenedorValor = document.getElementById(`${id}`);
    document.getElementById(`${id}`).style.color = "red";
    let mensajeError = document.getElementById(`${error}`);
    mensajeError.classList.remove("hidden");
    mensajeError.style.color = "red";
}

function correctaComprobacion(id, error){
    let valor = document.getElementById(`${id}`).innerText;
    document.getElementById(`${id}`).style.color = "black";
    let mensajeError = document.getElementById(`${error}`);
    mensajeError.classList.add("hidden");
}

document.getElementById("email").addEventListener("blur", function(ev){
    validacionEmail("email","emailEtiqueta","errorEmail");
    ev.preventDefault();
});

document.getElementById("confirmaEmail").addEventListener("blur", function(ev){
    confirmarEmail("confirmaEmailEtiqueta","errorConfirmaEmail");
    ev.preventDefault();
});

document.getElementById("usuario").addEventListener("blur", function(ev){
    getUsuario("usuario");
    ev.preventDefault();
});

document.getElementById("password").addEventListener("blur", function(ev){
    validacionPassword("password","passwordEtiqueta","errorPassword");
    ev.preventDefault();
});

document.getElementById("confirmaPassword").addEventListener("blur", function(ev){
    comprobarPassword("confirmaPassword","confirmaPasswordEtiqueta","errorConfirmaPassword");
    ev.preventDefault();
});

document.getElementById("formularioRegistro").addEventListener("submit", function(ev){
    comprobacionFormulario3();
    ev.preventDefault();
});

function validacionEmail(id, etiquetaID, error){
    let expEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let valor = document.getElementById(`${id}`).value;

    if (valor != "") {
        if (!expEmail.test(valor)) {
            errorComprobacion(`${etiquetaID}`, `${error}`);
            rellenadoCamposForm[0] = false;
            
        } else {
            correctaComprobacion(`${etiquetaID}`, `${error}`);
            rellenadoCamposForm[0] = true;
        }
    }
}

function getUsuario(id){
    let valor = document.getElementById(`${id}`).value;

    if (valor != "") {
        datosUsuario[15] = valor;
        rellenadoCamposForm[1] = true;
    }
}

function validacionPassword(id, etiquetaID, error){
    let expPassword =  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,}$/;
    let valor = document.getElementById(`${id}`).value;

    if (valor != "") {
        if (!expPassword.test(valor)) {
            errorComprobacion(`${etiquetaID}`, `${error}`);
            rellenadoCamposForm[2] = false;
        } else {
            correctaComprobacion(`${etiquetaID}`, `${error}`);
            rellenadoCamposForm[2] = true;
        }
    }
}



function comprobarPassword(id, etiquetaID, error){
    let valor = document.getElementById(`${id}`).value;
    let password = document.getElementById("password").value;

    if (valor != "") {
        if (password != valor) {
            errorComprobacion(`${etiquetaID}`, `${error}`);
            rellenadoCamposForm[3] = false;
        } else {
            correctaComprobacion(`${etiquetaID}`, `${error}`);
            datosUsuario[16] = password;
            rellenadoCamposForm[3] = true;
        }
    }
}

function comprobacionFormulario3(){
    let contador = 0;

    for(let i = 0; i < rellenadoCamposForm.length; i++){
        if(rellenadoCamposForm[i] == true){
            contador++;
        }
    }

    if (contador == 4){
        alert("Ha rellenado satisfactoriamente el formulario, sus datos son los siguientes: " + datosUsuario);
    } else {
        document.getElementById("errorContinuar3").style.color = "red";
        document.getElementById("errorContinuar3").style.textAlign = "center";
        document.getElementById("errorContinuar3").classList.remove("hidden");
    }
}*/

var rellenadoCamposForm = [false, false, false, false];
var datosUsuario = [];

document.getElementById("email").addEventListener("blur", function(ev){
    
    let expEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let email = document.getElementById("email").value;
    let error = document.getElementById("errorEmail");

    if (email != "") {
        if (!expEmail.test(email)) {
            error.style.display = 'block';
            error.style.color = 'red';
            rellenadoCamposForm[0] = false;
            
        } else {
            error.style.display = 'none';
            rellenadoCamposForm[0] = true;
        }
    }
    ev.preventDefault();
});

document.getElementById("password").addEventListener("blur", function(ev){
    let expPassword =  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,}$/;
    let password = document.getElementById("password").value;
    let error = document.getElementById("errorPassword");

    if (password != "") {
        if (!expPassword.test(password)) {
            error.style.display = 'block';
            error.style.color = 'red';
            rellenadoCamposForm[1] = false;
        } else {
            error.style.display = 'none';
            rellenadoCamposForm[1] = true;
        }
    }
    ev.preventDefault();
});


document.getElementById("confirmaPassword").addEventListener("blur", function(ev){
    let confirmaPassword = document.getElementById("confirmaPassword").value;
    let password = document.getElementById("password").value;
    let error = document.getElementById("errorConfirmaPassword");

    if (confirmaPassword != "") {
        if (password != confirmaPassword) {
            error.style.display = 'block';
            error.style.color = 'red';
            rellenadoCamposForm[2] = false;
        } else {
            error.style.display = 'none';
            datosUsuario[16] = password;
            rellenadoCamposForm[2] = true;
        }
    }
    ev.preventDefault();
});

document.getElementById("usuario").addEventListener("blur", function(ev){
    var usuario = document.getElementById("usuario").value;

    if (usuario != "") {
        datosUsuario[3] = usuario;
        rellenadoCamposForm[3] = true;
    }
    ev.preventDefault();
});

document.getElementById("formularioRegistro").addEventListener("submit", function(ev){
    let contador = 0;
    var error = document.getElementById("errorFormulario");

    for(let i = 0; i < rellenadoCamposForm.length; i++){
        if(rellenadoCamposForm[i] == true){
            contador++;
        }
    }

    if (contador == 4){
        alert("Ha rellenado satisfactoriamente el formulario, sus datos son los siguientes: " + datosUsuario);
    } else {
        error.style.color = "red";
        error.style.display = "block";
    }
    ev.preventDefault();
});

