<?php

require_once "../model/AnimalModel.php";

class AnimalesController{

    public static function creaAnimalController($nombre,$edad,$especie,$imagen,$localidad,$raza,$sexo,$tamaño,$descripcion){

        $animal = new AnimalModel();

        $animal -> creaAnimal($nombre,$edad,$especie,$imagen,$localidad,$raza,$sexo,$tamaño,$descripcion);

        return true;
    }

    public static function mostrarAnimalController($edad,$especie,$imagen,$localidad,$nombre,$raza,$sexo,$tamaño){

        $animal = new AnimalModel();

        $animal -> mostrarAnimal($edad,$especie,$imagen,$localidad,$nombre,$raza,$sexo,$tamaño);

    }

    public static function mostrarPerfilAnimalController($idAnimal){

        $animal = new AnimalModel();

        $animal -> mostrarPerfilAnimal($idAnimal);

    }

    public static function adoptarAnimalController($idAnimal,$idUsuario){

        $animal = new AnimalModel();

        $animal -> adoptarAnimal($idAnimal,$idUsuario);

    }

    public static function filtarAnimales($edad = '',$especie = '',$localidad='',$raza='',$sexo='',$tamaño=''){

        $filtrar = new AnimalModel();
        
        $resultado = $filtrar -> filtro($edad, $especie, $localidad , $raza, $sexo, $tamaño);

        for($i = 0; $i < count($resultado); $i++){

            echo "<a href='./animal.php?idAnimal=".$resultado[$i]['idAnimal']."'><div class='animal'>
                <div class='fotoAnimal'>
                    <img src='data:image/png;base64, ".base64_encode($resultado[$i]['imagen'])."'>
                </div>
                <div class='informacionAnimal'>
                    <p class='nombreAnimal'>".$resultado[$i]['nombre']."</p>
                    <hr>
                    <p class='localidadAnimal'>".$resultado[$i]['localidad']."</p>
                </div>
            </div></a>";
        }

    }

    public static function filtrarRazas(){

        $filtrarRaza = new AnimalModel();
        $resultado = $filtrarRaza -> filtraRaza();

        for($i = 0; $i < count($resultado); $i++){

            echo "<option value='$resultado[$i]'>$resultado[$i]</option>";
        }

    }

    public static function MostrarAnimalPerfil($idAnimal){

        $MostrarAnimal = new AnimalModel();
        $resultado = $MostrarAnimal -> mostrarAnimalPerfil($idAnimal);

        return $resultado;

    }
}

?>