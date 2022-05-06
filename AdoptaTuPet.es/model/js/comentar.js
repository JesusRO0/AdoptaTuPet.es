
function comentar(idImg, idUser, text) {
  
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.open("GET","app/anadeComment.php?idImg="+idImg+"&idUser="+idUser+"&text="+text,true);
	xmlhttp.send();
}
