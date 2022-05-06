botonPer.addEventListener('click', () => {
    if (divPerf.style.display == 'block') {
        divPerf.style.display = 'none';
        capaOscura.style.display = "none";
    } else {
        divPerf.style.display = 'block';
        capaOscura.style.display = "block";
    }
});