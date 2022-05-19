// reg.addEventListener('click', () => {
//     if (divR.style.display == 'block') {
//         divR.style.display = 'none';
//         capaOscura.style.display = "none";
//     } else {
//         divR.style.display = 'block';
//         capaOscura.style.display = "block";
//     }

//     if (divL.style.display == 'block') {
//         divL.style.display = 'none';
//     }

// });

// log.addEventListener('click', () => {
//     if (divL.style.display == 'block') {
//         divL.style.display = 'none';
//         capaOscura.style.display = "none";
//     } else {
//         divL.style.display = 'block';
//         capaOscura.style.display = "block";
//     }

//     if (divR.style.display == 'block') {
//         divR.style.display = 'none';
//     }
// });

// botonPer.addEventListener('click', () => {
//     if (divPerf.style.display == 'block') {
//         divPerf.style.display = 'none';
//         capaOscura.style.display = "none";
//     } else {
//         divPerf.style.display = 'block';
//         capaOscura.style.display = "block";
//     }
// });

//Evento de login
document.getElementById("divEntrada").addEventListener('click', function(ev){
    
    let login = document.getElementById('divL');
    let registro = document.getElementById('divR');
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
    
    let registro = document.getElementById('divR');
    let login = document.getElementById('divL');

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
    
    let login2 = document.getElementById('divL');
    let registro2 = document.getElementById('divR');
    registro2.style.display = 'none';

    if (login2.style.display == 'block') {
        login2.style.display = 'none';

    } else {
        login2.style.display = 'block';
    }

    ev.preventDefault();
});

//Cerrar el login o el registro si se clickea fuera
document.getElementById("Contenedor").addEventListener('click', function(ev){
    
    let login3 = document.getElementById('divL');
    let registro3 = document.getElementById('divR');
    registro3.style.display = 'none';
    login3.style.display = 'none';

});
