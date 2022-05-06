<?php 

require_once('crud.php');

$idImg = $_GET['idImg'];
$idUser = $_GET['idUser'];

quitarLike($idImg, $idUser);