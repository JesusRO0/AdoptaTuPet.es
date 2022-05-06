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
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <header>
            <div class="menu">

                <div class="titulo">
                    <img src="./views/img/iconoadoptatupet.png">
                    <h1 class="inicio">AdoptaTuPet.es</h1>
                </div>

                <div class="secciones">
                    <h2 class="home">Inicio</h2>
                    <h2 class="adopta">Adopta</h2>
                    <h2 class="foro">Foro</h2>
                    <h2 class="contacto">Contacto</h2>
                </div>

                <div class="redes">
                    <a href="https://twitter.com/home?lang=es" target="_blank"><img src="./views/img/logotipo-de-twitter.png"></a>
                    <a href="https://es-es.facebook.com/" target="_blank"><img src="./views/img/facebook.png"></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="./views/img/instagram.png"></a>
                </div>

                <h2 class="entra boton inicioSesion" id="openDL">Entra</h2>
            </div>

    </header>

    <main>

    <div class="edit" id="divPerf">
            <form method="POST" action="perfil.php">
                <input type="submit" class="miPerfil" id="miPerf" value="Mi Perfil"></input>
            </form>
            <hr>
            <form method="POST" action="#">
                <input name="closeSesion" type="submit" class="cerrar" id="cerSes" value="Cerrar Sesión"></input>
            </form>
        </div>

        <div class="Registro" id="divReg">

            <!--Posicionar arriba a la derecha para cuando se pulse el botón-->
            <!--Lo de aparecer o desaparecer va con js-->

                <p>
                    <label for="correoRegistro">Correo electrónico: </label><br>
                    <input type="text" name="correoRegistro" placeholder="micorreo@correo.com" class="inserta" id="correoRegistro">
                </p>

                <p>
                    <label for="nombreRegistro">Nombre: </label><br>
                    <input type="text" name="nombreRegistro" placeholder="Inserta tu nombre" class="inserta" id="nombreRegistro">
                </p>

                <p>
                    <label for="passRegistro">Contraseña: </label><br>
                    <input type="password" name="passRegistro" placeholder="Tu contraseña" class="inserta" id="passRegistro">
                </p>
                <p>
                    <input type="submit" name="completarRegistro" value="Registrate" class="completaRegistro" id="botonRegistro">
                </p>
                <p id="errorR"></p>

        </div>

        <!--Posicionar arriba a la derecha para cuando se pulse el botón-->
        <!--Lo de aparecer o desaparecer va con js-->
        <div class="login" id="divL">

            <form action="#" method="POST">
                <p>
                    <label for="correoSesion">Correo electrónico: </label><br>
                    <input type="text" name="correoSesion" placeholder="micorreo@correo.com" class="inserta inicioS" id="emailLog">
                </p>

                <p>
                    <label for="passSesion">Contraseña: </label><br>
                    <input type="password" name="passSesion" placeholder="password" class="inserta inicioS" id="passLog">
                </p>
                <p>
                    <input type="submit" name="completarLogin" value="IniciarSesion" class="completaLogin" id="botonLogin" >
                </p>


            </form>


        </div>
    
        <div class="contenedor">
            <img class="bannerperro" src="./views/img/bannerperro.jpg">
                <div class="primerbanner">
                    <div class="separador"></div>
                    <div class="textoprimerbanner">
                        <h1>¡Adopta!</h1>
                        <h2>Salva dos vidas, la del animal que adoptas y la del que ocupa su lugar en nuestro centro de adopción.</h2>
                    </div>
                </div>
        </div>

    </main>

    <!-- <footer>
        <h2>Diseño de Interfaces Web - 2DAW. Ceuta.</h2>
    </footer> -->

    <script src="./js/ajax.js"></script>
    <script src="./js/cambiaDatos.js"></script>
    <script src="./js/clear.js"></script>
    <script src="./js/enter.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/loginAjax.js"></script>
    <script src="./js/openDivs.js"></script>
    <script src="./js/registerAjax.js"></script>


    <?php
        creaHeader();

    ?> 
</body>

</html>