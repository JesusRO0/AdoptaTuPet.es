//AJAX para el cambio de datos del usuario en perfil.php.
//Le pasamos el usuario, email y dirección que son los campos que vamos a cambiar.

function cambiaDatos(usuario,email,direccion){

    var mensaje = document.getElementById("mensaje");

    if(usuario == "" || email == "" || direccion == ""){

        alert("Faltan datos.");
    }else{

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function (){

            if (this.responseText.trim() == '') {

                if (this.readyState == 4 && this.status == 200) mensaje.innerHTML = "Cambios realizados correctamente";

            }else if (this.readyState == 4 && this.status == 200) mensaje.innerHTML = "Cambios realizados correctamente";
        }

        xmlhttp.open("GET", "../controller/CambiaDatos.php?usuario="+usuario+"&email="+email+"&direccion="+direccion,true);
        xmlhttp.send();
    }
}

var guardar = document.getElementById("Guardar");
guardar.addEventListener("click", function (){

    var usuario = document.getElementById("usuarioCambio").value;
    var email = document.getElementById("emailCambio").value;
    var direccion = document.getElementById("direccionCambio").value;

    cambiaDatos(usuario,email,direccion);

});
