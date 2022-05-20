
function login(email, pass) {
    if (email ==''|| pass  ==''){
		paR.innerHTML = 'Faltan datos.'
    } 
	
	else{
		var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function() {
			if (this.responseText.trim() == '') {
				if (this.readyState == 4 && this.status == 200) paR.innerHTML = 'Login correcto.';
			}
			else if (this.readyState == 4 && this.status == 200) paR.innerHTML = this.responseText.trim();
		};

		xmlhttp.open("GET","app/login.php?email="+email+"&pass="+pass,true);
		xmlhttp.send();
    }
}

butR.addEventListener('click', () =>{
	var emailL = document.getElementById('emailLog').value;
	var passL = document.getElementById('passLog').value;
	register(emailL, passL);
});