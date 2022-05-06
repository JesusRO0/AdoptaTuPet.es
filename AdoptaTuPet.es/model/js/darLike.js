
function darLike(idImg, idUser) {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.open("GET","app/anadeLike.php?idImg="+idImg+"&idUser="+idUser,true);
	xmlhttp.send();
}
