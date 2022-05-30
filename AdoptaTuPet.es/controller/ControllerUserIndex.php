<?php
//Importamos el UserModel
require_once "./model/UserModel.php";

//Clase de controlador del usuario en el index
class UserController{

    //Crear el usuario
    public static function creaUserController($email, $usuario, $contraseña, $repContraseña){

        if($contraseña == $repContraseña){

            $creaUsuario = new User();

            $resultado = $creaUsuario->creaUser($email, $usuario, $contraseña);

            return $resultado;

        }else{

            throw new Exception("La contraseña no coincide.");
        }

    }

    /*
    *    
    *    Función que accede al modelo de UserModel para subir una foto de perfil a la base de datos
    *   @see UserModel/fotoPerfil
    *
    */
    public static function subeFotoPerfil($idUsuario, $fotoPerfil){

        $user = new User();

        $user->fotoPerfil($idUsuario, $fotoPerfil);

    }

    /*
    *    
    *    Función que accede al modelo de UserModel para cambiar los datos del usuario en la base de datos
    *    @see UserModel/cambiarDatos
    *
    */
    public static function cambiarDatos($usuario, $localidad, $email, $idUsuario){

        $user = new User();

        $user->cambiaUsuario($usuario, $localidad, $email, $idUsuario);

    }
    
    /*
    *    
    *    Función que accede al modelo de UserModel para iniciar sesión
    *    @see UserModel/iniciarSesion
    *
    */
    public static function iniciarUser($email, $contraseña){

        $user = new User();

        $idUser = $user->iniciarSesion($email, $contraseña);

    }
    
    /*
    *
    *   Función que accede al modelo de UserModel para foto perfil
    *    @see UserModel/fotoPerfil
    *
    *
    */

    public static function recogerFoto($email){
        
        $user = new User();

        $imagen = $user -> fotoPerfil($email);

        return $imagen;
    }

}

?>
