function fotoSola(id) {
     
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
            document.getElementById("bigFoto").setAttribute('src', this.responseText);
    };

    xmlhttp.open("GET", "app/fotoSola.php?id=" + id, true);
    xmlhttp.send();
}

function titulo(id) {
     
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
            document.getElementById("titPho").innerHTML = this.responseText;
    };

    xmlhttp.open("GET", "app/titulo.php?id=" + id, true);
    xmlhttp.send();
}

function desc(id) {
     
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
            document.getElementById("desc").innerHTML = this.responseText;
    };

    xmlhttp.open("GET", "app/desc.php?id=" + id, true);
    xmlhttp.send();
}

