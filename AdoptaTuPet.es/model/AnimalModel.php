<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

/*
* Clase Animal con todas las funcionalidades referente a los animales.
*/

class AnimalModel{

    private $edad;
    private $especie;
    private $idAnimal;
    private $idUsuario;
    private $imagen;
    private $localidad;
    private $nombre;
    private $raza;
    private $sexo;
    private $tamaño;

    /*
    *Función CreaAnimal usada para crear los animlaes en el apartado de subirAnimales.php
    *
    *@param $nombre es el nombre que le pasaremos por el input $nombre
    *@param $edad la edad puede ser "Cachorro", "Adulto", "Senior" y se lo pasamos por el input $edad
    *@param $especie puede ser "Perro" o "Gato" y se lo pasamos por el input $especie
    *@param $imagen debemos seleccionar una imagen la cual se mostrará en el apartado de adopta.php y animal.php más los demás datos
    *@param $localidad es la procedencia del animal y se la pasamos mediante el input $localidad
    *@param $raza la raza es bastante importanmte porque se irán creando razas nuevas cada vez que metamos animales distintos el input $raza
    *@param $sexo puede ser "Macho" o "hembra" y lo introducimos en el input $sexo
    *@param $tamaño puede ser "Pequeño", "Mediano" y "Grande" y lo pasamos por el input $tamaño
    *@param $descripcion Tendra una breve descripción del animal y se lo pasamos mediante el input $descripcion
    *
    *return true para comprobar si el animal se ha subido correctamente
    */
    
    function creaAnimal($nombre,$edad,$especie,$imagen,$localidad,$raza,$sexo,$tamaño,$descripcion){

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

        $db -> query("INSERT INTO animal (nombre,edad,especie,imagen,localidad,raza,sexo,tamano,descripcion) VALUES ('$nombre','$edad','$especie','$imagen','$localidad','$raza','$sexo','$tamaño','$descripcion')");

        return true;
    }
    
    /*
    *Función MostrarAniaml usada para mostrar los animles en el adopta.php
    *
    *@param $nombre es el nombre que le pasaremos por el input $nombre
    *@param $edad la edad puede ser "Cachorro", "Adulto", "Senior" y se lo pasamos por el input $edad
    *@param $especie puede ser "Perro" o "Gato" y se lo pasamos por el input $especie
    *@param $imagen debemos seleccionar una imagen la cual se mostrará en el apartado de adopta.php y animal.php más los demás datos
    *@param $localidad es la procedencia del animal y se la pasamos mediante el input $localidad
    *@param $raza la raza es bastante importanmte porque se irán creando razas nuevas cada vez que metamos animales distintos el input $raza
    *@param $sexo puede ser "Macho" o "hembra" y lo introducimos en el input $sexo
    *@param $tamaño puede ser "Pequeño", "Mediano" y "Grande" y lo pasamos por el input $tamaño
    *
    *return $almacenAnimal con toda la información del animal
    */

    function mostrarAnimal($edad,$especie,$imagen,$localidad,$nombre,$raza,$sexo,$tamaño){

        $almacenAnimal = [];
        $cont = 0;

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

        $verAnimal = $db -> query("SELECT edad,especie,imagen,localidad,raza,sexo,tamano,idAnimal FROM animal WHERE idUsuario = NULL");

        while ($animales = $verAnimal -> fetch_object()) {

            $almacenAnimal[$cont] = array(
                "edad" => $animales -> edad,
                "especie" => $animales -> especie,
                "imagen" => $animales -> imagen,
                "localidad" => $animales -> localidad,
                "raza" => $animales -> raza,
                "sexo" => $animales -> sexo,
                "tamano" => $animales -> tamano,
                "idAnimal" => $animales -> idAnimal,
            );
            $cont++;
        }
        return $almacenAnimal;
    }
    
    /*
    *Función mostrarPerfilAnimal usada para mostrar el animal cuando hacemos click en alguno en adopta.php
    *
    *@param idAnimal es el id del animal que vamos a mostrar en el perfil obtenido al darle click en adopta.php
    *
    *return $almacenAnimal con toda la información del animal
    *
    *NO SE USA, HAY OTRA MEJOR ABAJO
    */

    function mostrarPerfilAnimal($idAnimal){

        $almacenAnimal = [];

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

        $verAnimal = $db -> query("SELECT edad,especie,imagen,localidad,raza,sexo,tamano FROM animal WHERE idAnimal = $idAnimal");

        while ($animales = $verAnimal -> fetch_object()) {

            $almacenAnimal = array(
                "edad" => $animales -> edad,
                "especie" => $animales -> especie,
                "imagen" => $animales -> imagen,
                "localidad" => $animales -> localidad,
                "raza" => $animales -> raza,
                "sexo" => $animales -> sexo,
                "tamano" => $animales -> tamano,
            );
            $cont++;
        }
        return $almacenAnimal;
    }
    
    /*
    *Función adoptarAnimal cuando el usuario adopta al animal guardamos el id del animal y del usuario
    *
    *@param $idAnimal es el id del animal que vamos a mostrar en el perfil obtenido al darle click en adopta.php
    *@param $idUsuario es el id del usuario que se ha logueado y va a adoptar el animal
    *
    */

    function adoptarAnimal($idAnimal,$idUsuario){

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

        $db -> query("UPDATE animal SET idUsuario = $idUsuario WHERE idAnimal = $idAnimal");
    }
    
    /*
    *Función filtro utilizado en adopta.php hace una consulta compuesta por cada propiedad seleccionada
    *
    *@param $edad la edad puede ser "Cachorro", "Adulto", "Senior" y se lo pasamos por el input $edad
    *@param $especie puede ser "Perro" o "Gato" y se lo pasamos por el input $especie
    *@param $localidad es la procedencia del animal y se la pasamos mediante el input $localidad
    *@param $raza la raza es bastante importanmte porque se irán creando razas nuevas cada vez que metamos animales distintos el input $raza
    *@param $sexo puede ser "Macho" o "hembra" y lo introducimos en el input $sexo
    *@param $tamaño puede ser "Pequeño", "Mediano" y "Grande" y lo pasamos por el input $tamaño
    *
    *return $animnales que es el resultado de lo filtrado, es un array asociativo con todas las propiedades
    *
    */

    function filtro($edad = '',$especie = '',$localidad='',$raza='',$sexo='',$tamaño=''){

        $animales = [];
        $contador = 0;

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

        if($edad == '' && $especie == '' && $localidad == '' && $raza == '' && $sexo == '' && $tamaño == ''){

            $consulta = "SELECT imagen, nombre, localidad, idAnimal FROM animal";
            
        }else{

            $consulta = 'SELECT imagen, nombre, localidad, idAnimal FROM animal WHERE ';
            $varios = false;

            if($edad != ''){

                $consulta .= "edad = '$edad'";
                $varios = true;
            }

            if($especie != ''){

                if($varios){

                    $consulta .= " AND especie = '$especie' ";

                }else{

                    $consulta .= "especie = '$especie'";
                    $varios = true;
                }
            }
            
            if($localidad != ''){

                if($varios){

                    $consulta .= " AND localidad = '$localidad' ";
                }else{

                    $consulta .= "localidad = '$localidad'";
                    $varios = true;
                }
            }
            if($raza != ''){

                if($varios){

                    $consulta .= " AND raza = '$raza' ";

                }else{

                    $consulta .= "raza = '$raza'";
                    $varios = true;
                }
            }
            if($sexo != ''){

                if($varios){

                    $consulta .= " AND sexo = '$sexo' ";

                }else{

                    $consulta .= "sexo = '$sexo'";
                    $varios = true;
                }
            }
            if($tamaño != ''){

                if($varios){

                    $consulta .= " AND tamano = '$tamaño' ";

                }else{

                    $consulta .= "tamano = '$tamaño'";
                    $varios = true;
                }
            }

            
        }
            $resultado = $db -> query($consulta);
            
            while($animal = $resultado -> fetch_object()){

                $animales[$contador] = array(
                    'nombre' => $animal -> nombre,
                    'imagen' => $animal -> imagen,
                    'localidad' => $animal -> localidad,
                    'idAnimal' => $animal -> idAnimal,
                );

                $contador++;

            }

            return $animales;

    }
    
    /*
    *Función filtraRaza guarda las razas de los animales y las muestra en el input select
    *
    *return $razas muestra todas las razas guardadas
    */

    function filtraRaza(){

        $razas = [];
        $contador = 0;

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

        $filtraRaza =  $db -> query("SELECT raza FROM animal");

        while($razaFiltro = $filtraRaza -> fetch_object()){

            $razas[$contador] = $razaFiltro -> raza;
            $contador++;

        }

        return $razas;

    }
    
    /*
    *Función mostrarAnimalPerfil usada para mostrar el animal cuando hacemos click en alguno en adopta.php
    *
    *@param idAnimal es el id del animal que vamos a mostrar en el perfil obtenido al darle click en adopta.php
    *
    *return $almacenAnimal con toda la información del animal
    */

    function mostrarAnimalPerfil($idAnimal){

        $almacenAnimal = [];
        $cont = 0;

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

        $verAnimal = $db -> query("SELECT edad,especie,imagen,localidad,raza,sexo,tamano,nombre,descripcion FROM animal WHERE idAnimal = $idAnimal");

        while ($animales = $verAnimal -> fetch_object()) {

            $almacenAnimal[$cont] = array(
                "edad" => $animales -> edad,
                "especie" => $animales -> especie,
                "imagen" => $animales -> imagen,
                "localidad" => $animales -> localidad,
                "raza" => $animales -> raza,
                "sexo" => $animales -> sexo,
                "tamano" => $animales -> tamano,
                "nombre" => $animales -> nombre,
                "descripcion" => $animales -> descripcion,
            );
            $cont++;
        }
        return $almacenAnimal;
    }

}
?>
