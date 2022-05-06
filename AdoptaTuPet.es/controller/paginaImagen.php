<?php

    /*
    *Función para recibir toda la información de las imágenes (comentarios incluidos)
    *
    *@param $img recibe el id de la imagen de la que queremos sacar toda la información
    *
    *@return una matriz que contiene los comentarios y las imágenes de los usuarios que los han escrito
    */
    function generaComentario($img){

        //Variable auxiliar para rellenar las posiciones que vamos creando del array
        $cont = 0;

        //Comprobamos que la conexión se realice con éxito
        try{
            $db = new mysqli('localhost', "arce", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        //Realizamos la consulta para recibir el usuario, la foto de perfil y el texto del comentario
        $consulta = $db->query("SELECT u.nombreUser AS name, u.fotoPerfil AS foto, c.text AS texto FROM user u INNER JOIN coment c ON c.idUser = u.idUser INNER JOIN img i ON i.idImg = c.idImg WHERE c.idImg = $img");
        $resultado = $consulta->fetch_object();

        while($resultado != NULL){

            //Almacenamos en cada posición del array, en función del número de comentarios que haya, otro array con la información de los comentarios(nombre, foto de perfil y texto)
            $comentarios[$cont] = array(
                "nombre" => $resultado->name,
                "foto" => $resultado->foto,
                "texto" => $resultado->texto
            );

            //Aumentamos el contador para rellenar la siguiente posición del array
            $cont++;

            $resultado = $consulta->fetch_object;
        }

        return $comentarios;

    }

?>