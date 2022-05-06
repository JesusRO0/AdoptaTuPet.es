<?php

require_once('crud.php');

$email = $_GET['email'];
$img = $_GET['pho'];
editaPho($email, $img);