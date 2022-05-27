<?php
//Variables que le pasamos por php para que el ajax haga los cambios en el usuario y la funcion que lo realiza.

session_start();

require_once "../model/UserModel.php";

$usuarioNuevo = new User();
$usuario = $_GET['usuario'];
$email = $_GET['email'];
$direccion = $_GET['direccion'];
$emailOLD = $_SESSION['email'];

$usuarioNuevo -> cambiaUsuario($usuario, $direccion, $email, $emailOLD);

?>