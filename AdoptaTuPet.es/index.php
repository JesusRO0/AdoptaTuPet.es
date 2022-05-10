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

                <h2 class="entra" id="divEntrada">Entra</h2>
            </div>

    </header>

    <main>

    <!-- <div class="edit" id="divPerf">
            <form method="POST" action="perfil.php">
                <input type="submit" class="miPerfil" id="miPerf" value="Mi Perfil"></input>
            </form>
            <hr>
            <form method="POST" action="#">
                <input name="closeSesion" type="submit" class="cerrar" id="cerSes" value="Cerrar Sesión"></input>
            </form>
    </div> -->

    <div class="contenedorDIV">
        <div class="login" id="divL">

            <img src="./views/img/perro (1).png">
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

            <img src="./views/img/perro (1).png">
            <h3>Regístrate</h3>
            <hr>

            <form action="#" method="POST">
                <p>
                    <input type="text" name="correoSesion" placeholder="  Email" class="inserta inicioS" id="emailLog">
                </p>

                <p>
                    <input type="password" name="passSesion" placeholder="  Contraseña" class="inserta inicioS" id="passLog">
                </p>

                <p>
                    <input type="password" name="passSesionRep" placeholder="  Repetir Contraseña" class="inserta inicioS" id="passLog">
                </p>

                <p>
                    <input type="submit" name="completarLogin" value="Regístrate" class="completaLogin" id="botonLogin" >
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

    <script src="/model/js/ajax.js"></script>
    <script src="/model/js/cambiaDatos.js"></script>
    <script src="/model/js/clear.js"></script>
    <script src="/model/js/enter.js"></script>
    <script src="/model/js/index.js"></script>
    <script src="/model/js/loginAjax.js"></script>
    <script src="./model/js/openDivs.js"></script>
    <script src="/model/js/registerAjax.js"></script>

</body>

</html>