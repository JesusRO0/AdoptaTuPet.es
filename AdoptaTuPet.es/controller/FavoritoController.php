<?php

//Clase del controlador de Favorito que se encarga de gestionar el favorito
class FavoritoController{
    
    public static function creaAnimalController($idUsuario,$idAnimal){

        $favorito = new FavoritosModel();

        $favorito -> favorito($idUsuario,$idAnimal);

    }

}

?>
