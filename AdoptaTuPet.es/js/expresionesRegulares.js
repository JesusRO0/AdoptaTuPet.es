//Simplemente expresiones regulares que se han utilizado para la comprobación de datos.

var expEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
var expPassword =  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,}$/;
