//Función para hacer que el input de correo y nombre sea editable, para que, en principio solo pueda mostrar sin editar
function cambiaDato() {

    let user = document.getElementById("usuario");
    let correo = document.getElementById("correo");

    user.removeAttribute("readonly");
    correo.removeAttribute("readonly");

}

//Función para devolver al input a su estado de solo lectura, para que solo pueda ser modificado cuando se pulse el botón
function vuelveNormal() {

    let user = document.getElementById("usuario");
    let correo = document.getElementById("correo");

    user.setAttribute("readonly", "true");
    correo.setAttribute("readonly", "true");
}


function changeName(email, name) {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("GET","app/changeName.php?email="+email+"&name="+name,true);
    xmlhttp.send();
}

function changeEmail(email, email2) {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("GET","app/changeEmail.php?email="+email+"&email2="+email2,true);
    xmlhttp.send();
}

function changePho(email, $img) {
    var xmlhttp = new XMLHttpRequest();
    document.getElementById('usuarioIn').innerHTML = this.responseText;
    xmlhttp.open("GET","app/changePho.php?email="+email+"&pho="+$img,true);
    xmlhttp.send();
}
