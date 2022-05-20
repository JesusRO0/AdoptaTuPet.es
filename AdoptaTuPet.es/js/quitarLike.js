
function quitarLike(idImg, idUser) {
  
	var xmlhttp = new XMLHttpRequest();

	if (this.readyState == 4 && this.status == 200) console.log(this.responseText);

	console.log(55);

	xmlhttp.open("GET","app/quitaLike.php?idImg="+idImg+"&idUser="+idUser,true);
	xmlhttp.send();

}
