<?php

class AnimalesController{

    public static function creaAnimalController($edad,$especie,$imagen,$localidad,$nombre,$raza,$sexo,$tamaño){

        $animal = new AnimalModel();

        $animal -> creaAnimal($edad,$especie,$imagen,$localidad,$nombre,$raza,$sexo,$tamaño);

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

}

?>