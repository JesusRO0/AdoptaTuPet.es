<?php

    /*
    *Función para subir el id de la imagen de la API a nuestra base de datos
    *
    *@param $id almacena el id que trae desde la API para subirlo a nuestra base de datos
    *
    */
    function subeImagen($id){

        //Comprobamos que la conexión se realice con éxito
        try{
            $db = new mysqli('localhost', "arce", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        //Subimos el id a la base de datos
        $db->query("INSERT INTO img VALUES ('$id')");

    }

    /*
    *Función para subir la foto de perfil del usuario
    *
    *@param $correo almacena el correo del usuario al que quremos añadirle o editar la imagen
    *@param $imaage almacena la imagen
    */
    function fotoPerfil($correo, $image){

        try{
            $db = new mysqli('localhost', "arce", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $imgContent = addslashes(file_get_contents($image));

        //Usamos las siguientes líneas para saber si tenemos que añadir una imagen o simplemente cambiarla
        $recibeImagen = $db->query("SELECT fotoPerfil FROM user WHERE correoUser = '$correo'");
        $comprueba = $recibeImagen->fetch_object();

        if($comprueba != NULL){


            $db->query("UPDATE user SET fotoPerfil = '$imgContent' WHERE correoUser = '$correo'");

        }else{
            echo $imgContent;
            $insert = $db->query("UPDATE user SET fotoPerfil = '$imgContent' WHERE correoUser = '$correo'");
            if($insert){
                echo "<p>Archivo subido correctamente a la base de datos</p>";
            }else{
                echo "<p>Error al subir el archivo a la base de datos</p>";
            } 
        }      
    }
    

?>