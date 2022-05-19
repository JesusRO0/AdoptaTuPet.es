<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Conexion{

// public $servername = "localhost";
// public $database = "adoptatupet";
// public $username = "admin";
// public $password = "admin";


function bbdd($servername, $username, $password, $database){
        try{

            $db = new mysqli($servername, $username, $password, $database);

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la base de datos");

            }

        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }
    }
}

$prueba = new Conexion();
// phpinfo();
$prueba -> bbdd("localhost", "admin", "admin", "adoptatupet");


?>