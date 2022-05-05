<?php

    include_once("crud.php");

    /*Función para iniciar una sesión
    *
    *@param $correo almacena el correo con el que queremos iniciar sesión
    *@param $passwd almacena la contraseña para iniciar sesión con el correo indicado anteriormente
    *
    *@return $_SESSION['correo'] devuelve el correo en forma de sesión para mantenerla iniciada
    */
    function abreSesion($correo, $passwd){


        $_SESSION['correo'] = "";
        $_SESSION['passwd'] = "";

        //Creamos una sesión si no existe
        if(session_id() == ""){
            session_start();
        }

        //Llamamos a la función del crud para comprobar la sesión, y si devuelve un valor true creamos la sesión con los datos del correo
        if(iniciarSesion($correo, $passwd)){

            if(!isset($_SESSION['correo'])){

                $_SESSION['correo'] = $correo;

                //Devolvemos la sesión
                return $_SESSION['correo'];

            }

        }else{

            //Devolvemos un mensaje de error si no existe el usuario en la base de datos
            echo "El correo insertado no existe";

        }
    }

    /*
    *Función para DESTRUIR todas las sesiones
    */
    function cierraSesion(){

        //Iniciamos la sesión para quitarnos de errores
        if(session_id() == ""){
            session_start();
        }


        //La destruimos
        session_unset();
        session_destroy();

    }

    /*
    *Función para comprobar si la sesión está iniciada
    */
    function compruebaSesion(){

        //Iniciamos la sesión para quitarnos de errores
        if(session_id() == ""){
            session_start();
        }

        //Devolvemos true o false en caso de que exista o no la sesión
        if(isset($_SESSION['correo'])){
            return true;
        }else{
            return false;
        }
    }

?>