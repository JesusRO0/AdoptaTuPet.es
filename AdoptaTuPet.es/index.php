<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>AdoptaTuPet.es</title>
    <link rel="icon" href="./views/img/iconoadoptatupet.png">
    <link rel="stylesheet" href="./views/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&family=Raleway:wght@100;300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <?php

    require_once "./controller/ControllerUserIndex.php";

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

    }

    if(isset($_POST['cerrarSesion'])){

        unset($_SESSION['email']);
    }

    ?>

    <header>
            <div class="menu" id="Menu">

                <div class="titulo">
                    <img src="./views/img/iconoadoptatupet.png">
                    <h1 class="inicio">AdoptaTuPet.es</h1>
                </div>

                <div class="secciones">
                    <a href="./index.php"><h2 class="home">Inicio</h2></a>
                    <a href="./views/adopta.php"><h2 class="adopta">Adopta</h2></a>
                    <a href="./views/foro.php"><h2 class="foro">Foro</h2></a>
                    <a href="./views/contacto.php"><h2 class="contacto">Contacto</h2></a>
                </div>

                <div class="redes">
                    <a href="https://twitter.com/home?lang=es" target="_blank"><img src="./views/img/logotipo-de-twitter.png"></a>
                    <a href="https://es-es.facebook.com/" target="_blank"><img src="./views/img/facebook.png"></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="./views/img/instagram.png"></a>
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

            <img src="./views/img/perroIcono.png">
            <h3>Iniciar Sesión</h3>
            <hr>

            <form action="#" method="POST">
                <p>
                    <input type="text" name="correoSesion" placeholder="  Email" class="inserta inicioS" id="emailLog" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                </p>

                <p>
                    <input type="password" name="passSesion" placeholder="  Contraseña" class="inserta inicioS" id="passLog" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,}$" required>
                </p>
                <p>
                    <input type="submit" name="completarLogin" value="Entra" class="completaLogin" id="botonLogin" >
                </p>

                <p class="Registrate" id="botonRegistrate">Si no tienes una cuenta <a href="" target="_blank" id="registro">Regístrate</a></p>
                <p class="errorL"></p>

            </form>


        </div>

        <div class="registro" id="divR">

            <img src="./views/img/perroIcono.png">
            <h3>Regístrate</h3>
            <hr>

            <form action="#" id="formularioRegistro" method="POST">
                <p>
                    <input type="text" name="email" placeholder="  Email" class="inserta inicioS" id="email">
                    <div id="errorEmail" class="hidden">* Ha introducido de manera incorrecta el email, por favor pruebe de nuevo</div>
                </p>

                <p>
                    <input type="password" name="password" placeholder="  Contraseña" class="inserta inicioS" id="password">
                    <div id="errorPassword" class="hidden">* Ha introducido de manera incorrcecta la contraseña, por favor pruebe de nuevo</div>
                </p>

                <p>
                    <input type="password" name="confirmaPassword" placeholder="  Repetir Contraseña" class="inserta inicioS" id="confirmaPassword">
                    <div id="errorConfirmaPassword" class="hidden">* La contraeña que ha introducido no coincide</div>
                </p>

                <p>
                    <input type="text" name="usuario" placeholder="  Nombre Usuario" class="inserta inicioS" id="usuario">
                    <div id="errorUsuario" class="hidden">* Ha introducido de manera incorrecta el usuario, por favor pruebe de nuevo</div>
                </p>

                <p>
                    <input type="submit" name="completarRegistro" value="Regístrate" class="completaLogin" id="botonRegistro">
                    <div id="errorFormulario" class="hidden"><strong>Debe rellenar todos los campos correctamente.</strong></div>
                </p>

                <p class="textobotonLogin" id="textobotonLogin">Si ya tienes una cuenta <a href="" target="_blank" id="Entra">Entra</a></p>

            </form>


        </div>
    </div>
    
        <div class="contenedor" id="Contenedor">

            <img class="bannerperro" src="./views/img/bannerperro.jpg">
                <div class="primerbanner">
                    <div class="separador"></div>
                    <div class="textoprimerbanner">
                        <h1>¡Adopta!</h1>
                        <h2>Salva dos vidas, la del animal que adoptas y la del que ocupa su lugar en nuestro centro de adopción.</h2>
                        <a href="./views/contacto.php" target="_blank"><h1 class="botoncontacto">MÁS INFORMACIÓN</h1></a>
                    </div>
                </div>

            <div class="perroygato">
                <div class="anuncioPerro">
                    <img class="fotoperro" src="./views/img/perro2.png">
                    <div class="infoPerro">
                        <h1>Adopta un perro</h1>
                        <p>Al adoptar un perro adulto o un cachorro en AdoptaTuPet, te lo llevarás a
                        casa vacunado, desparasitado, con análisis de leishmaniosis, con
                        chip y esterilizado.
                        </p>
                        <a href="./views/adopta.php" target="_blank"><h2 class="botonVerPerro">VER PERROS</h2></a>
                    </div>
                    
                </div>

                <div class="anuncioGato">
                    <img class="fotogato" src="./views/img/gato2.png">
                    <div class="infoGato">
                        <h1>Adopta un gato</h1>
                        <p>Al adoptar un perro adulto o un cachorro en AdoptaTuPet, te lo llevarás
                            a casa vacunado, desparasitado, con análisis de leishmaniosis,
                            con chip y esterilizado.
                        </p>
                        <a href="./views/adopta.php" target="_blank"><h2 class="botonVerGato">VER GATOS</h2></a>
                    </div>
                </div>
            </div>

            <img class="headergato" src="./views/img/headergato.jpg">
                <div class="segundobanner">
                    <div class="textosegundobanner">
                        <h1>Centro de Adopción</h1>
                        <h2>Llevamos más de 1 mes luchando por los animales y por conseguir un mundo mas justo para ellos. Desde entonces, hemos ayudado a más de 30.000 animales
                            y hemos conseguido que nuestro Centro de Adopción, pionero en España, sea un espacio global de protección animal que recibe más de 2.000 animales abandonados al año.</h2>
                        <a href="./views/contacto.php" target="_blank"><h1 class="botonbannergato">¡CONTÁCTANOS!</h1></a>
                    </div>
                </div>

            <div class="tercerbanner">
                <div class="contenidotercerbanner">
                    <h1>Últimos anuncios en nuestro FORO</h1>
                    <div>ANUNCIOS</div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="piedepagina">
            <div class="pie1">
                <img src="./views/img/iconoadoptatupet.png">
                <h1 class="tituloPie">AdoptaTuPet.es</h1>
            
            <ol>
                <li><p>Apartado de Correos 9</p></li>
                <li><p>9 Grupos Rocío</p></li>
                <li><p>Ceuta (España)</p></li>
                <li><p> XXX XXX XXX</p></li>
                <li><p>adoptatupet@adoptatupet.es</p></li>
            </ol>
                <div class="redesPie">
                            <a href="https://twitter.com/home?lang=es" target="_blank"><img src="./views/img/logotipo-de-twitter.png"></a>
                            <a href="https://es-es.facebook.com/" target="_blank"><img src="./views/img/facebook.png"></a>
                            <a href="https://www.instagram.com/" target="_blank"><img src="./views/img/instagram.png"></a>
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
                <img src="./views/img/map.png">
            </div>
        </div>
        <div class="textoPie"><p>© 2022 AdoptaTuPet. Todos los derechos reservados. Aviso legal, Política de privacidad y protección de datos personales.</p></div>
    </footer>

    <!-- <script src="/model/js/ajax.js"></script>
    <script src="/model/js/cambiaDatos.js"></script>
    <script src="/model/js/clear.js"></script>
    <script src="/model/js/enter.js"></script>
    
    <script src="/model/js/loginAjax.js"></script> -->
    <script src="./js/index.js"></script>
    <script src="./js/expresionesRegulares.js"></script>
    <script src="./js/openDivs.js"></script>
    <script src="./js/registro.js"></script>
    <!-- <script src="/model/js/registerAjax.js"></script> -->

</body>

</html>