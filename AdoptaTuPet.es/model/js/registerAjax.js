
function register(emailR, nameR, passR) {
    if (emailR ==''|| nameR  =='' || passR  ==''){
		paR.innerHTML = 'Faltan datos.'
    } 
	
	else{
		var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function() {
			if (this.responseText.trim() == '') {
				if (this.readyState == 4 && this.status == 200) paR.innerHTML = 'Registro correcto.';
			}
			else if (this.readyState == 4 && this.status == 200) paR.innerHTML = this.responseText.trim();
		};

		xmlhttp.open("GET","app/registro.php?email="+emailR+"&name="+nameR+"&pass="+passR,true);
		xmlhttp.send();
    }
}

butR.addEventListener('click', () =>{
	var emailR = document.getElementById('correoRegistro').value;
	var nameR = document.getElementById('nombreRegistro').value;
	var passR = document.getElementById('passRegistro').value;
	register(emailR, nameR, passR);
});