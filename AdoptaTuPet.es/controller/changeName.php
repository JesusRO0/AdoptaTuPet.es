<?php

require_once('crud.php');

$email = $_GET['email'];
$name = $_GET['name'];
editaNombre($email, $name);