function show(query, page) {
    if (query == "") {
        console.log('empty');
    } else {
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200)
                document.getElementById("contenedorImagenes").innerHTML += this.responseText;
        };

        xmlhttp.open("GET", "app/consulta.php?query=" + query + "&page=" + page, true);
        xmlhttp.send();
    }
}