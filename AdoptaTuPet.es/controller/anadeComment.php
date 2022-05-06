<?php 

require_once('crud.php');

$idImg = $_GET['idImg'];
$idUser = $_GET['idUser'];
$text = $_GET['text'];


creaComentario($idUser, $idImg, $text);