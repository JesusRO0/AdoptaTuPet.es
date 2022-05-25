<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    class User{

        private $idUsuario;
        private $nombre;
        private $email;
        private $usuario;
        private $localidad;
        private $contrasena;
    
        public function __construct($idUsuario = '', $nombre = 'null', $email = '', $usuario = '', $localidad = 'null', $contrasena = ''){
    
            $this->idUsuario = $idUsuario;
            $this->nombre = $nombre;
            $this->email = $email;
            $this->usuario = $usuario;
            $this->localidad = $localidad;
            $this->contrasena = $contrasena;
        }

    function creaUser($email, $usuario, $contraseña){

        //Intentamos iniciar la conexión en la base de datos
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
        

        //$contra = hash('sha256', $contraseña, false);

        //Comprobamos que se pueda realizar la consulta
        try{

            $consulta = $db->query("SELECT usuario FROM usuario WHERE email = '$email'");

            if($consulta->fetch_object()){

                //Si da error de que ya existe el usuario lanzamos una excepción
                throw new Exception("<strong>Ese usuario ya existe.</strong>", 2);

            }else{

                $db->query("INSERT INTO usuario (email, usuario, contrasena) VALUES ('$email','$usuario','$contraseña')");

            }

        }catch(Exception $ex){

            //Si no, lanzamos otra
            echo $ex->getMessage(), "<br>";

        }

        //Cerramos la base de datos
        $db->close();

    }

    /*
    *Función para iniciar sesión
    *
    *@param $email recoge el$email con el que se quiere iniciar sesión
    *@param $contraseña recoge la contraseña del$email con la que se quiere iniciar sesión
    *
    *@return un boolean para saber si el inicio se ha realizado con éxito
    */
    function iniciarSesion($email, $contraseña){
        
        try{
            $db = new mysqli('localhost', "administrador", "123456", "adoptatupet");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        try{
        //Realizamos la consulta para comprobar que la contraseña sea la misma
        $consulta = $db->query("SELECT email, contrasena FROM usuario WHERE email = '$email';");

        if($recorreConsulta = $consulta->fetch_object()){
                //Comprobación
            if($recorreConsulta->contrasena == $contraseña){

                if (!isset($_SESSION['email'])) {
                    $_SESSION['email']='';
                }

                $_SESSION['email']=$recorreConsulta->email;
            }

            else{
                //Si da error de que ya existe el usuario lanzamos una excepción
            throw new Exception("<strong>Contraseña incorrecta.</strong>");
                echo '<script>document.getElementById("errorL").innerHTML="Contraseña incorrecta.";</script>';
            }
        }

        else{
            //Si da error de que ya existe el usuario lanzamos una excepción
            throw new Exception("<strong>El email introducido no existe.</strong>");
            echo '<script>document.getElementById("errorL").innerHTML="El email no existe.";</script>';
        }

    }catch(Exception $ex){

        //Si no, lanzamos otra
        echo $ex->getMessage(), "<br>";

    }

        //Cerramos la base de datos
        $db->close();

    }

    /*
    *Función para borrar usuarios
    *
    *@param $email almacena el$email del usuario que queremos borrar
    *
    */
    function borraUser($email){

        //Comprobamos que la conexión se realice con éxito
        try{
            $db = new mysqli('localhost', "administrador", "123456", "adoptatupet");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        //Borramos el usuario con el$email indicado
        $db->query("DELETE FROM usuario WHERE email = '$email'");

    }

    /*
    *Función para mostrar la información en el perfil de usuario
    *
    *@param $email guarda el$email del usuario del que queremos ver el perfil
    *
    *@return un un array asociativo con los datos que queremos mostrar en el perfil
    */
    function muestraDatosUsuario($email){

        //Comprobamos que la conexión se realice con éxito
        try{
            $db = new mysqli('localhost', "administrador", "123456", "adoptatupet");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        //Seleccionamos los valores desde la base de datos para mostrarlos en la página
        $datos = $db->query("SELECT usuario, fotoPerfil FROM usuario WHERE email = '$email'");
        
        if($res = $datos->fetch_object()){
            
            //Almacenamos todos los valores en un array asociativo para devolverlos a la página desde la que se llama a la función para mostrar los datos
            //Usar <img width='100' src='data:image/png;base64, ".base64_encode($res->fotoPerfil)."'></img> para visualizar la imagen+

            $muestra = array(
                "nombre" => $res->usuario,
                "email" => $email,
                'foto' => $res->fotoPerfil
            );

            return $muestra;
        }
    }

    function cambiaUsuario($usuario, $localidad, $email, $idUsuario){

        try{
            $db = new mysqli('localhost', "administrador", "123456", "adoptatupet");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $db -> query("UPDATE usuario SET usuario = '$usuario', localidad='$localidad', email='$email' WHERE idUsuario = $idUsuario");

    }

    function fotoPerfil($email){

        try{
            $db = new mysqli('localhost', "administrador", "123456", "adoptatupet");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $consulta = $db -> query("SELECT fotoPerfil FROM usuario WHERE email = '$email'");

        if($imagen = $consulta -> fetch_object()){

            if(is_null($imagen->fotoPerfil)){

                $fotoPerfil = "<a src='./views/perfil.php'><img width='80px' src='./views/img/usuario.png'></a>";   

            }else{

                $fotoPerfil = "<a src='./views/perfil.php'><img src='data:image/png;base64, ".base64_encode($imagen->fotoPerfil)."'></a>";
            }

        }
        return $fotoPerfil;
    }

    function fotoPerfilViews($email){

        try{
            $db = new mysqli('localhost', "administrador", "123456", "adoptatupet");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $consulta = $db -> query("SELECT fotoPerfil FROM usuario WHERE email = '$email'");

        if($imagen = $consulta -> fetch_object()){

            if(is_null($imagen->fotoPerfil)){

                $fotoPerfil = "<a src='./perfil.php'><img src='./img/usuario.png' width='80px'></a>";   

            }else{

                $fotoPerfil = "<a src='./views/perfil.php'><img src='data:image/png;base64, ".base64_encode($imagen->fotoPerfil)."'></a>";
            }

        }
        return $fotoPerfil;
    }
}
?>