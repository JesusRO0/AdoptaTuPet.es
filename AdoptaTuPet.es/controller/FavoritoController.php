<?php

class FavoritoController{

    public static function creaAnimalController($idUsuario,$idAnimal){

        $favorito = new FavoritosModel();

        $favorito -> favorito($idUsuario,$idAnimal);

    }


}


?>