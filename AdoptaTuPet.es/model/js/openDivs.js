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

document.getElementById("divEntrada").addEventListener('click', function(ev){
    
    let login = document.getElementById('divL');

    if (login.style.display == 'block') {
        login.style.display = 'none';

    } else {
        login.style.display = 'block';

    }

    ev.preventDefault();
});

document.getElementById("divEntrada").addEventListener('click', function(ev){
    
    let login = document.getElementById('divL');

    if (login.style.display == 'block') {
        login.style.display = 'none';

    } else {
        login.style.display = 'block';

    }

    ev.preventDefault();
});