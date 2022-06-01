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
    <link rel="stylesheet" href="../css/subirAnimal.css">
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
    $contraseña = $_POST['password'];
    $repContraseña = $_POST['confirmaPassword'];

    UserController::creaUserController($email, $usuario, $contraseña, $repContraseña);
    
}

if(isset($_POST['completarLogin'])){

    $email = $_POST['correoSesion'];
    $contraseña = $_POST['passSesion'];

    UserController::iniciarUser($email, $contraseña);
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
                    <div class="homeMovil">
                        <a href="../index.php">
                            <img src="./img/casa-icono-silueta.png">
                            <h2 class="home2">Inicio</h2>
                        </a>
                    </div>
                    <div class="adoptaMovil">
                        <a href="./adopta.php">
                            <img src="./img/pata.png">
                            <h2 class="adopta2">Adopta</h2>
                        </a>
                    </div>
                    <div class="contactoMovil">
                        <a href="./contacto.php">
                            <img src="./img/chat.png">
                            <h2 class="contacto2">Contacto</h2>
                        </a>
                    </div>

                    <div class="botonMovil">
                    <h2 class='entraMovil' id='divEntradaMovil'><img src='./img/usuario.png'>Entra</h2>
                        <a href='./perfil.php' class='entraPerfilMovil' id='divEntradaPerfilMovil'>
                            <img src='./img/usuario.png'>
                            <h2 class="entraPerfilh2">Perfil<h2>
                        </a>
                    </div>

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
                            <div class='menuSesion'>
                            <a href='./perfil.php'><h3 class='verPerfil'>Ver Perfil</h3></a>
                            <form method='POST' action='#'>
                                <input type='submit' class='cerrarSesion' name='cerrarSesion' value='Cerrar  Sesión' id='cerrarSesion'>
                            </form>
                            </div>
                        </div>";

                        echo "<script>document.getElementById('divEntradaPerfilMovil').style.display = 'block'</script>";
                        echo "<script>document.getElementById('divEntradaMovil').style.display = 'none'</script>";

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
                    <input type="text" name="correoSesion" placeholder="  Email" class="emailLogin" id="emailLog" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                </p>

                <p>
                    <input type="password" name="passSesion" placeholder="  Contraseña" class="contraseñaLogin" id="passLog" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,}$" required>
                </p>
                <p>
                    <input type="submit" name="completarLogin" value="Entra" class="completaLogin" id="botonLogin" >
                </p>

                <p class="Registrate" id="botonRegistrate">Si no tienes una cuenta <a href="" target="_blank" id="registro">Regístrate</a></p>
                <p class="errorL"></p>
            </form>


        </div>

        <div class="registro" id="divR">

            <img src="./img/perroIcono.png">
            <h3>Regístrate</h3>
            <hr>

            <form action="#" id="formularioRegistro" method="POST">
                <p>
                    <input type="text" name="email" placeholder="  Email" class="emailRegistro" id="email">
                    <div id="errorEmail" class="hidden">* Ha introducido de manera incorrecta el email, por favor pruebe de nuevo</div>
                </p>

                <p>
                    <input type="password" name="password" placeholder="  Contraseña" class="contraseñaRegistro" id="password">
                    <div id="errorPassword" class="hidden">* Ha introducido de manera incorrcecta la contraseña, por favor pruebe de nuevo</div>
                </p>

                <p>
                    <input type="password" name="confirmaPassword" placeholder="  Repetir Contraseña" class="repetirContraseña" id="confirmaPassword">
                    <div id="errorConfirmaPassword" class="hidden">* La contraeña que ha introducido no coincide</div>
                </p>

                <p>
                    <input type="text" name="usuario" placeholder="  Nombre Usuario" class="nombreUsuario" id="usuario">
                    <div id="errorUsuario" class="hidden">* Ha introducido de manera incorrecta el usuario, por favor pruebe de nuevo</div>
                </p>

                <p>
                    <input type="submit" name="completarRegistro" value="Regístrate" class="completaLogin" id="botonRegistro">
                    <div id="errorFormulario" class="hidden"><strong>Debe rellenar todos los campos correctamente.</strong></div>
                    <div id="comprobacionEmail"></div>
                </p>

                <p class="textobotonLogin" id="textobotonLogin">Si ya tienes una cuenta <a href="" target="_blank" id="Entra">Entra</a></p>

            </form>


        </div>

        <div class="subirAnimal">

        <h1>Subir Animal</h1>
        <hr>
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
                <textarea name="descripcion" rows="10"></textarea>
            </div>

            <div class="especie">
                <label for="especie">Especie: </label>
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
                <input type="text" name="sexo">
            </div>

            <div class="tamaño">
                <label for="tamaño">Tamaño: </label>
                <input type="text" name="tamaño">
            </div>

            <div class="boton">
                <input type="submit" name="submit" class="inputSubir" value="Subir Animal"/>
            </div>
            
        </form>

        </div>

        <?php

            if(isset($_POST["submit"])){

                $check = getimagesize($_FILES["image"]["tmp_name"]);

                    if($check !== false){
                        $edad = $_POST['edad'];
                        $nombre = $_POST['nombre'];
                        nl2br($descripcion = $_POST['descripcion']);
                        $especie = $_POST['especie'];
                        $image = $_FILES['image']['tmp_name'];
                        $imagen = addslashes(file_get_contents($image));
                        $localidad = $_POST['localidad'];
                        $raza = $_POST['raza'];
                        $sexo = $_POST['sexo'];
                        $tamaño = $_POST['tamaño'];

                        $resultado = AnimalesController::creaAnimalController($nombre,$edad,$especie,$imagen,$localidad,$raza,$sexo,$tamaño,$descripcion);

                if($resultado){
                    echo "Se ha subido el animal correctamente.";
                }else{
                    echo "La subida ha fallado, intentalo de nuevo.";
                }

            }else{
                    echo "No se ha seleccionado ninguna imagen.";
            }
        }

        ?>

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

    <script src="../js/index.js"></script>
    <script src="../js/expresionesRegulares.js"></script>
    <script src="../js/openDivs.js"></script>
    <script src="../js/registro.js"></script>

</body>

</html>
