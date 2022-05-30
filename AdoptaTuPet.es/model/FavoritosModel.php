<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

/*
*
*Clase Favoritos con todo lo relacionado a cuando le damos me gusta a un animal este se guardará en nuestro perfil en el apartado favoritos
*
*/

class FavoritosModel{
    
    /*
    *
    *Función favorito coge el id animal y se pasa al id usuario guardandolo para más tarde monstarlo en el perfil
    *
    *@param $idUsuario el id que guardaremos del animal
    *@param $idAnimal id del animal que guardará el usuario
    *
    *return $favorito devulve true ya uw se ha insertado el favorito correctamente
    */

    function favorito($idUsuario,$idAnimal){

        $favorito = false;

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

        $comprueba = $db -> query("SELECT idAnimal, idUsuario FROM favoritos WHERE idUsuario = $idUsuario AND idAnimal = $idAnimal");

        if($comprueba -> fetch_object()){

            $db -> query("DELETE FROM favoritos WHERE idUsuario = $idUsuario AND idAnimal = $idAnimal");

        }else{

            $db -> query("INSERT INTO favoritos (idUsuario, idAnimal) VALUES($idUsuario, $idAnimal)");

            $favorito = true;
        }

        return $favorito;
    }

}

?>
