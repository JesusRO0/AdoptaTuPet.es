<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

/*
* FUNCIONES QUE SE IBAN A UTILIZAR PARA EL FORO, NO SE UTILIZAN
*
    *Función para añadir un like en caso de que el usuario haya pulsado el mismo
    *
    *@param $idImg almacena el id de la imagen a la que queremos añadir el like
    *@param $idUser almacena el id del usuario al que queremos añadir el like
    *
    */
    function añadirLike($idImg, $idUser){
        try{
            $db = new mysqli('localhost', "administrador", "admin", "adoptatupet");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }
        $consulta = $db->query("SELECT idImg from img where idImg = '$idImg'");
        $exec = $consulta->fetch_object();
        if (!$exec) {
            $db->query("INSERT INTO img VALUES ('$idImg')");
        }

        $db->query("INSERT INTO likes VALUES ('$idImg', '$idUser')");
        echo 'hola';
    }

    /*
    *Función para quitar el like de una foto a un usuario
    *
    *@param $idImg almacena el id de la imagen a la que queremos añadir el like
    *@param $idUser almacena el id del usuario al que queremos añadir el like
    *
    */
    function quitarLike($idImg, $idUser){

        try{
            $db = new mysqli('localhost', "administrador", "admin", "adoptatupet");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $db->query("DELETE FROM likes WHERE idImg = '$idImg' AND idUser = '$idUser'");
    }

    /*
    *Función para comprobar si un usuario ha dado o no like a una imagen
    *
    *@param $idImg almacena el id de la imagen a la que queremos añadir el like
    *@param $idUser almacena el id del usuario al que queremos añadir el like
    *
    *@return devuelve true o false en función de si hay un like registrado o no
    */
    function compruebaLike($idImg, $idUser){

        try{
            $db = new mysqli('localhost', "administrador", "admin", "adoptatupet");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $consulta = $db->query("SELECT idUser FROM likes WHERE idUser = '$idUser' AND idImg = '$idImg'");
        $ejecuta = $consulta->fetch_object();

        if($ejecuta){

            return true;

        }else{

            return false;

        }

    }

    ?>
