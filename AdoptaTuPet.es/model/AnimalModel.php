<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

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


    function creaAnimal($edad,$especie,$imagen,$localidad,$nombre,$raza,$sexo,$tamaño){

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

        $db -> query("INSERT INTO animal (edad,especie,imagen,localidad,raza,sexo,tamano) VALUES ($edad,'$especie','$imagen','$localidad','$nombre','$raza','$sexo',$tamaño)");

    }

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

            $filtro = $db -> query("SELECT imagen, nombre, localidad FROM animal");
            
        }else{

            $consulta = 'SELECT imagen, nombre, localidad FROM animal WHERE ';
            $varios = false;

            if($edad != ''){

                $consulta .= "edad = '$edad'";
                $varios = true;
            }

            if($especie != ''){

                if($varios){

                    $consulta .= "AND especie = '$especie' ";

                }else{

                    $consulta .= "especie = '$especie'";
                    $varios = true;
                }
            }
            
            if($localidad != ''){

                if($varios){

                    $consulta .= "AND localidad = '$localidad' ";
                }else{

                    $consulta .= "localidad = '$localidad'";
                    $varios = true;
                }
            }
            if($raza != ''){

                if($varios){

                    $consulta .= "AND raza = '$raza' ";

                }else{

                    $consulta .= "raza = '$raza'";
                    $varios = true;
                }
            }
            if($sexo != ''){

                if($varios){

                    $consulta .= "AND sexo = '$sexo' ";

                }else{

                    $consulta .= "sexo = '$sexo'";
                    $varios = true;
                }
            }
            if($tamaño != ''){

                if($varios){

                    $consulta .= "AND tamano = '$tamaño' ";

                }else{

                    $consulta .= "tamano = '$tamaño'";
                    $varios = true;
                }
            }

            $resultado = $db -> query($consulta);

            while($animal = $resultado -> fetch_object()){

                $animales[$contador] = array(
                    'nombre' => $animal -> nombre,
                    'imagen' => $animal -> imagen,
                    'localidad' => $animal -> localidad,
                );

                $contador++;

            }

            return $animales;
        }

    }

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

        while($raza = $filtraRaza -> fetch_object()){

            $razas[$contador] = "$raza -> raza";
            $contador++;

        }

        return $razas;

    }

}
?>