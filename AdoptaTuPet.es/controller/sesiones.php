<?php

/**
 * 
 * Función para montar la parte derecha del header si el usuario ha iniciado sesión para mostrar su foto y su alias
 * @param idUser contiene el identificador del usuario a mostrar
 * 
 */
function montaHeaderPerfil($idUser){

    $user = new User();

    $datos = $user->muestraDatosUsuario($idUser);

    echo "<div class='headerMiPerfil'>
    <div class='fotoMiPerfil'>";
    
    if(!is_null($datos['foto'])){
        echo "<img src='data:image/png;base64, ".base64_encode($datos['foto'])."' class='personaje'>
        ";
    }else{
        echo "<i class='fa-solid fa-user personaje'></i>";
    }
    
    echo "</div>
    <div class='derecha'>
        <p class='titulo colorFondo'>".$datos['nombre']."</p>
        <div class='masMiPerfil'>
            <i class='fa-solid fa-caret-down flechita' id='flechita'></i>
        </div>
    </div></div>
    ";

}

/**
 * 
 * Función para mostrar el botón de login en caso de que no esté iniciada la sesión
 * 
 */
function montaLogin(){

    echo "<div class='botonesNav'>
    <div id='botonLoginNav' class='botonLoginNav'>
        <p class='texto colorFondo textoCentro'>Login incorrecto</p>
    </div>
    <div id='botonRegistroNav' class='botonRegistroNav'>
        <p>Registro</p>
    </div>
</div>";

}

    /*include_once("crud.php");

    /*Función para iniciar una sesión
    *
    *@param $correo almacena el correo con el que queremos iniciar sesión
    *@param $passwd almacena la contraseña para iniciar sesión con el correo indicado anteriormente
    *
    *@return $_SESSION['correo'] devuelve el correo en forma de sesión para mantenerla iniciada
    */
    /*function abreSesion($correo, $passwd){


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
    }*/

    /*
    *Función para DESTRUIR todas las sesiones
    */
    /*function cierraSesion(){

        //Iniciamos la sesión para quitarnos de errores
        if(session_id() == ""){
            session_start();
        }


        //La destruimos
        session_unset();
        session_destroy();

    }*/

    /*
    *Función para comprobar si la sesión está iniciada
    */
    /*function compruebaSesion(){

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
    }*/

?>