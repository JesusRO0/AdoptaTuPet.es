<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>AdoptaTuPet.es</title>
    <link rel="icon" href="./img/iconoadoptatupet.png">
    <link rel="stylesheet" href="../css/animal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&family=Raleway:wght@100;300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <?php

    require_once "../controller/ControllerUser.php";
    require_once "../controller/AnimalesController.php"; 
    require_once "../controller/APIController.php";

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
                        <a href='./perfil.php' class='entraMovil' id='divEntradaMovil'><img src='./img/usuario.png'>Perfil</a>
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

                        echo "<script>document.getElementById('divEntradaMovil').style.display = 'none'</script>";
                    }else{

                        echo "<script>document.getElementById('divEntradaMovil').style.display = 'block'</script>";
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

            <img src="./img/perro (1).png">
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
    </div>
    <div class="contenedor" id="Contenedor">

    <?php

        $idAnimal = $_GET['idAnimal'];

        $mostrarAnimal = AnimalesController::MostrarAnimalPerfil($idAnimal);       

    ?>

        <div class="animal">

            <div class="imagenAnimal">
                <?php
                    echo "<img src='data:image/png;base64, ".base64_encode($mostrarAnimal[0]['imagen'])."'>";
                ?>
            </div>

            <div class="perfilAnimal">
                <h1>
                    <?php
                     echo $mostrarAnimal[0]['nombre'];
                    ?>
                </h1>
                <p class="localizacion">
                    <?php
                     echo "<img src='./img/localizacion.png'>".$mostrarAnimal[0]['localidad'];
                    ?>
                </p>
                <hr>
                <h2>Detalles</h2>
                    <ol>
                        <li><p><strong>Raza: </strong>
                            <?php
                                echo $mostrarAnimal[0]['raza'];
                            ?>
                        </p></li>
                        <li><p><strong>Sexo:</strong>
                            <?php
                                echo $mostrarAnimal[0]['sexo'];
                            ?>
                        </p></li>
                        <li><p><strong>Edad:</strong>
                            <?php
                                echo $mostrarAnimal[0]['edad'];
                            ?>
                        </p></li>
                        <li><p class="tamaño"><strong>Tamaño:</strong>
                        <?php
                            echo $mostrarAnimal[0]['tamano'];
                        ?>
                        </p></li>
                    </ol>
                <div class="adoptar">
                    <?php
                        if(isset($_SESSION['email'])){

                            echo "<button onclick='adoptar()'>¡QUIERO ADOPTAR!</button>";
                        }
                    ?>
                    <div class="compartir">
                        <p>Compartir este animal puede salvarle la vida</p>
                        <div class="redesCompartir">
                            <a href="https://twitter.com/home?lang=es" target="_blank"><img src="./img/logotipo-de-twitter.png"></a>
                            <a href="https://es-es.facebook.com/" target="_blank"><img src="./img/facebook.png"></a>
                            <a href="https://www.instagram.com/" target="_blank"><img src="./img/instagram.png"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="descripcion">
            <h2>Descripción</h2>
            <p>
                <?php
                    echo $mostrarAnimal[0]['descripcion'];
                ?>
            </p>
            <hr>
            <h1>Curiosidad Gatuna</h1>
            <p>
                <?php
                
                    echo API::APIFacts();
                    
                ?>
            </p>
        </div>
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

    <script>
        function adoptar() {
            alert("¡GRACIAS POR ADOPTAR!\nTe enviaremos un correo con los datos de la protectora y ellos se pondrá en contacto con usted.");
        }
    </script>
    <script src="../js/index.js"></script>
    <script src="../js/expresionesRegulares.js"></script>
    <script src="../js/openDivs.js"></script>
    <script src="../js/registro.js"></script>

</body>

</html>