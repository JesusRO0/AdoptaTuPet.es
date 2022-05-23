<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>AdoptaTuPet.es</title>
    <link rel="icon" href="./img/iconoadoptatupet.png">
    <link rel="stylesheet" href="./css/adopta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&family=Raleway:wght@100;300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>


<?php

require_once "../controller/ControllerUser.php";
require_once "../controller/AnimalesController.php";

if(isset($_POST['completarRegistro'])){

    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $repContraseña = $_POST['Repcontraseña'];

    UserController::creaUserController($email, $usuario, $contraseña, $repContraseña);
}

if(isset($_POST['completarLogin'])){

    $email = $_POST['correoSesion'];
    $contraseña = $_POST['passSesion'];

    UserController::iniciarUser($email, $contraseña);
    echo $_SESSION['email'];
}

if(isset($_POST['cerrarSesion'])){

    unset($_SESSION['email']);
}

?>
    <header>
            <div class="menu" id="Menu">

                <div class="titulo">
                    <img src="./img/iconoadoptatupet.png">
                    <h1 class="inicio">AdoptaTuPet.es</h1>
                </div>

                <div class="secciones">
                    <a href="../index.php"><h2 class="home">Inicio</h2></a>
                    <a href="./adopta.php"><h2 class="adopta">Adopta</h2></a>
                    <a href="./foro.php"><h2 class="foro">Foro</h2></a>
                    <a href="./contacto.php"><h2 class="contacto">Contacto</h2></a>
                </div>

                <div class="redes">
                    <a href="https://twitter.com/home?lang=es" target="_blank"><img src="./img/logotipo-de-twitter.png"></a>
                    <a href="https://es-es.facebook.com/" target="_blank"><img src="./img/facebook.png"></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="./img/instagram.png"></a>
                </div>

                    <?php

                    if(isset($_SESSION['email'])){
                        
                        echo "<div class='sesionIniciada'> 
                        ".UserController::recogerFoto($_SESSION['email'])."
                        <form method='POST' action='#'>
                            <input type='submit' class='cerrarSesion' name='cerrarSesion' value='Cerrar  Sesión' id='cerrarSesion'>
                        </form>
                        </div>";
                    }else{

                        echo "<h2 class='entra' id='divEntrada'>Entra</h2>";
                    }

                ?>
            </div>

    </header>

    <main>

    <div class="contenedorDIV">
        <div class="login" id="divL">

            <img src="./img/perroIcono.png">
            <h3>Iniciar Sesión</h3>
            <hr>

            <form action="#" method="POST">
                <p>
                    <input type="text" name="correoSesion" placeholder="  Email" class="inserta inicioS" id="emailLog">
                </p>

                <p>
                    <input type="password" name="passSesion" placeholder="  Contraseña" class="inserta inicioS" id="passLog">
                </p>
                <p>
                    <input type="submit" name="completarLogin" value="Entra" class="completaLogin" id="botonLogin" >
                </p>

                <p class="Registrate" id="botonRegistrate">Si no tienes una cuenta <a href="" target="_blank" id="registro">Regístrate</a></p>

            </form>


        </div>

        <div class="registro" id="divR">

            <img src="./img/perroIcono.png">
            <h3>Regístrate</h3>
            <hr>

            <form action="#" method="POST">
                <p>
                    <input type="text" name="email" placeholder="  Email" class="inserta inicioS" id="email">
                </p>

                <p>
                    <input type="password" name="contraseña" placeholder="  Contraseña" class="inserta inicioS" id="contraseña">
                </p>

                <p>
                    <input type="password" name="Repcontraseña" placeholder="  Repetir Contraseña" class="inserta inicioS" id="Repcontraseña">
                </p>

                <p>
                    <input type="text" name="usuario" placeholder="  Nombre Usuario" class="inserta inicioS" id="usuario">
                </p>

                <p>
                    <input type="submit" name="completarRegistro" value="Regístrate" class="completaLogin" id="botonRegistro" >
                </p>

                <p class="textobotonLogin" id="textobotonLogin">Si ya tienes una cuenta <a href="" target="_blank" id="Entra">Entra</a></p>

            </form>


        </div>

        <div class="producto">

        <form action="#" method="post" enctype="multipart/form-data">

            <div class="edad">
                <label for="edad">Edad: </label>
                <input type="text" name="edad" required>
            </div>

            <div class="nombre">
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" required>
            </div>

            <div class="descripcion">
                <label for="descripcion">Descripcion: </label>
                <textarea name="descripcion" rows="10" columns="300" required></textarea>
            </div>

            <div class="especie">
                <label for="especie">especie: </label>
                <input type="text" name="especie" required>
            </div>

            <div class="imagen">
                Selecciona una imagen del animal:
                <input type="file" name="image"/>
            </div>

            <div class="localidad">
                <label for="localidad">Localidad: </label>
                <input type="text" name="localidad" required>
            </div>

            <div class="raza">
                <label for="raza">Raza: </label>
                <input type="text" name="raza" required>
            </div>

            <div class="sexo">
                <label for="sexo">Sexo: </label>
                <input type="text" name="sexo" required>
            </div>

            <div class="tamaño">
                <label for="tamaño">tamaño: </label>
                <input type="text" name="tamaño" required>
            </div>

            <div class="boton">
                <input type="submit" name="submit" value="Subir Animal"/>
            </div>
            
        </form>

        </div>

        <?php

            if(isset($_POST["submit"])){

                $check = getimagesize($_FILES["image"]["tmp_name"]);

                    if($check !== false){
                        $edad = $_POST['edad'];
                        $nombre = $_POST['nombre'];
                        $descripcion = $_POST['descripcion'];
                        $especie = $_POST['especie'];
                        $image = $_FILES['image']['tmp_name'];
                        $imagen = addslashes(file_get_contents($image));
                        $localidad = $_POST['localidad'];
                        $raza = $_POST['raza'];
                        $sexo = $_POST['sexo'];
                        $tamaño = $_POST['tamaño'];

                        echo $edad;
                        echo $nombre;
                        echo $descripcion;
                        echo $especie;
                        echo $localidad;
                        echo $raza;
                        echo $sexo;
                        echo $tamaño;

                        AnimalesController::creaAnimalController($edad,$especie,$imagen,$localidad,$nombre,$raza,$sexo,$tamaño);

                if($animal){
                    echo "Se ha subido el animal correctamente.";
                }else{
                    echo "La subida ha fallado, intentalo de nuevo.";
                }

            }else{
                    echo "No se ha seleccionado ninguna imagen.";
            }
        }

        ?>

        <div class="volver">
        <form action="./perfil.php" method="post" enctype="multipart/form-data">

        <input type="submit" name="submit" value="Volver"/>

        </form>
        </div>

    </main>

    <footer>
        <div class="piedepagina">
            <div class="pie1">
                <img src="./img/iconoadoptatupet.png">
                <h1 class="tituloPie">AdoptaTuPet.es</h1>
            
            <ol>
                <li><p>Apartado de Correos 9</p></li>
                <li><p>9 Grupos Rocío</p></li>
                <li><p>Ceuta (España)</p></li>
                <li><p> XXX XXX XXX</p></li>
                <li><p>adoptatupet@adoptatupet.es</p></li>
            </ol>
                <div class="redesPie">
                            <a href="https://twitter.com/home?lang=es" target="_blank"><img src="./img/logotipo-de-twitter.png"></a>
                            <a href="https://es-es.facebook.com/" target="_blank"><img src="./img/facebook.png"></a>
                            <a href="https://www.instagram.com/" target="_blank"><img src="./img/instagram.png"></a>
                </div>
            </div>
            <div class="pie2">
                <ol>
                    <li><p>Inicio</p></li>
                    <li><p>Adopta</p></li>
                    <li><p>Foro</p></li>
                    <li><p>Contacto</p></li>
                </ol>
            </div>
            <div class="pie3">
                <h2>Localización</h2>
                <img src="./img/map.png">
            </div>
        </div>
        <div class="textoPie"><p>© 2022 AdoptaTuPet. Todos los derechos reservados. Aviso legal, Política de privacidad y protección de datos personales.</p></div>
    </footer>

    <!-- <script src="../model/js/ajax.js"></script>
    <script src="../model/js/cambiaDatos.js"></script>
    <script src="../model/js/clear.js"></script>
    <script src="../model/js/enter.js"></script>
    <script src="../model/js/index.js"></script>
    <script src="../model/js/loginAjax.js"></script> -->
    <script src="../js/openDivs.js"></script>
    <!-- <script src="../model/js/registerAjax.js"></script> -->

</body>

</html>