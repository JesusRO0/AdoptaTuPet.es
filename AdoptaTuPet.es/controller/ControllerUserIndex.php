<?php

require_once "./model/UserModel.php";

class UserController{

    /*
        
        Función que accede al modelo de User para registrar uno SIN permisos de administrador.
        @see UserModel/registroUser
    
    */
    public static function creaUserController($email, $usuario, $contraseña, $repContraseña){

        if($contraseña == $repContraseña){

            $creaUsuario = new User();

            $resultado = $creaUsuario->creaUser($email, $usuario,$contraseña);

            return $resultado;

        }else{

            throw new Exception("La contraseña no coincide.");
        }

    }


    /*
        
        Función que accede al modelo de User para montar los divs necesarios para la página dedicada del usuario.
        @see UserModel/muestraDatosUsuario
    
    */
    /*public static function montaUsuario($idUser){

        $user = new User();

        $datos = $user->muestraDatosUsuario();

        echo "<div class='contenedorPropio' id='contenedorPropio'>
            <div class='fotoPerfil'>
                <img width='100' src='data:image/png;base64, ".base64_encode($datos['foto'])."'></img>
            </div>
            <form action='./model/subeImagenUser.php' method='post' enctype='multipart/form-data'>
                <input type='file' name='cambiaFoto'>
            </form>
        
            <div class='inputs'>
                <input type='text' name='nombre' id='nombre' class='nombre texto' value='".$datos['nombre']."'>
                <input type='text' name='alias 'class='alias texto' id='alias' value='".$datos['correo']."'>
                <!--<input type='text' name='desc' class='desc texto' id='desc'>-->
                <div class='saveButton texto' id='saveButton'><p>Guardar</p></div>
            </div>
        
        </div>";

    }*/

    /*
        
        Función que accede al modelo de User para subir una foto de perfil a la base de datos
        @see UserModel/fotoPerfil
    
    */
    public static function subeFotoPerfil($idUsuario, $fotoPerfil){

        $user = new User();

        $user->fotoPerfil($idUsuario, $fotoPerfil);

    }

    /*
        
        Función que accede al modelo de User para cambiar los datos del usuario en la base de datos
        @see UserModel/cambiarDatos
    
    */
    public static function cambiarDatos($usuario, $localidad, $email, $idUsuario){

        $user = new User();

        $user->cambiaUsuario($usuario, $localidad, $email, $idUsuario);

    }
    
    /*
        
        Función que accede al modelo de User para iniciar sesión
        @see UserModel/inicioSesion
    
    */
    public static function iniciarUser($email, $contraseña){

        $user = new User();

        $idUser = $user->iniciarSesion($email, $contraseña);

    }

    public static function recogerFoto($email){
        
        $usuario = new User();

        $imagen = $usuario -> fotoPerfil($email);

        return $imagen;
    }

}

?>