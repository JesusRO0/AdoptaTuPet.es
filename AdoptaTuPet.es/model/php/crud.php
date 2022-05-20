<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$servername = "localhost";
$database = "adoptatupet";
$username = "administrador";
$password = "admin";


        try{

            $db = new mysqli('localhost', "administrador", "admin", "adoptatupet");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }

        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }
?>