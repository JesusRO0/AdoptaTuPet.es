<?php

session_start();

require_once "../model/UserModel.php";

$usuarioNuevo = new User();
$usuario = $_GET['usuario'];
$email = $_GET['email'];
$direccion = $_GET['direccion'];
$emailOLD = $_SESSION['email'];
echo $usuario;
echo $email;
echo $direccion;
echo $emailOLD;
echo "<script>console.log('$usuario')</script>";
echo "<script>console.log('$email')</script>";
echo "<script>console.log('$direccion')</script>";
echo "<script>console.log('$emailOLD')</script>";

 $usuarioNuevo -> cambiaUsuario($usuario, $direccion, $email, $emailOLD);


?>