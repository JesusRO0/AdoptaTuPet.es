<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

class FavoritosModel{

    function favorito($idUsuario,$idAnimal){

        try{
            $db = new mysqli('localhost', "administrador", "123456", "adoptatupet");

            if($db->connect_errno){

                //Error al soltar un error la función
                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){
            //Otro tipo de error
            echo $ex->getMessage(), "<br>";

        }
    }

}

?>