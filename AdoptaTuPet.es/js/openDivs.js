//Evento de login
document.getElementById("divEntrada").addEventListener('click', function(ev){
    
    registro.style.display = 'none';

    if (login.style.display == 'block') {
        login.style.display = 'none';

    } else {
        login.style.display = 'block';

    }

    ev.preventDefault();
});

//Evento de registro
document.getElementById("registro").addEventListener('click', function(ev){

    login.style.display = 'none';

    if (registro.style.display == 'block') {
        registro.style.display = 'none';

    } else {
        registro.style.display = 'block';

    }


    ev.preventDefault();
});

//Volver al login
document.getElementById("Entra").addEventListener('click', function(ev){
    
    registro.style.display = 'none';

    if (login.style.display == 'block') {
        login.style.display = 'none';

    } else {
        login.style.display = 'block';
    }

    ev.preventDefault();
});

//Cerrar el login o el registro si se clickea fuera
document.getElementById("Contenedor").addEventListener('click', function(ev){
    
    registro.style.display = 'none';
    login.style.display = 'none';

});
