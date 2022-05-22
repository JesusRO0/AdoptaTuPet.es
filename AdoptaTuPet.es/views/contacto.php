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
    <link rel="stylesheet" href="./css/contacto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&family=Raleway:wght@100;300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <?php

    require_once "../controller/ControllerUser.php";

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
                <p class="errorL"></p>
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
    </div>
    <div class="contenedor" id="Contenedor">
        <div class="definicion">
            <img src="./img/iconoadoptatupet.png">
            <h1>AdoptaTuPet.es es una plataforma de adopción de animales, cuyo fin es ayudar a las
            protectoras a dar visibilidad en internet a sus animales. Trabajamos por y para los animales sin
            hogar.</h1>
        </div>
        <div class="atributos">
            <div>
                <h1>Adopción</h1>
                <p>No compres, adopta. Ese es
                    nuestro lema y nunca nos
                    cansaremos de repetirlo. Miles
                    de animales son abandonados
                    cada año en España.</p>
            </div>
            <div>
                <h1>Equipo</h1>
                <p>AdoptaTuPet está formada por
                    voluntarios de varias
                    protectoras y conocemos de
                    primera mano las necesidades
                    de las asociaciones.</p>
            </div>
            <div>
                <h1>Amor</h1>
                <p>Nuestro amor por los animales
                    es lo que mueve este proyecto.
                    Queremos ayudar a los
                    animales abandonados a
                    encontrar una familia.</p>
            </div>
            <div>
                <h1>Esterilización</h1>
                <p>Una sola perra sin esterilizar y
                    su descendencia pueden
                    producir 67.000 cachorros en
                    sólo seis años. Esterilizar salva
                    vidas.</p>
            </div>
            <div>
                <h1>Familia</h1>
                <p>Nuestros animales son familia
                    y como tal deben ser tratados.
                    Debemos cuidarlos y acudir al
                    veterinario periódicamente.</p>
            </div>
            <div>
                <h1>Abuelitos</h1>
                <p>Sabemos que los cachorros son
                    monísimos, pero hay muchos
                    viejecitos esperando una
                    oportunidad, recuerda que te lo
                    agradecerán toda la vida.</p>
            </div>
        </div>
        <div class="tituloPreguntas">
            <h1>Si necesitas más información o tienes alguna duda, accede a nuestras preguntas frecuentes</h1>
            <a href="#tituloPreguntasFrecuentes"><h2 class="botonPreguntas">PREGUNTAS FRECUENTES</h2></a>
        </div>
        <div class="pasosAdoptar">
            <h1>Si quieres adoptar</h1>
            <p>☆</p>
            <div class="pasos">
                <div class="paso1">
                    <img src="./img/paso1.svg">
                    <h1>1. Busca</h1>
                    <p>Nuestra web tiene: perros y gatos.
                    Con nuestro filtro puedes afinar tu
                    búsqueda, para que se adapte a tus
                    necesidades.</p>
                </div>
                <div class="paso2">
                    <img src="./img/paso2.svg">
                    <h1>2. Contacta</h1>
                    <p>¿Ya has encontrado el animal que te
                    enamora? Clica en adoptar y contactarás
                    directamente con la protectora (debes
                    estar registrado para enviar mensajes).
                    Recuerda que haciendo clic en el icono de
                    corazón del animal, quedará añadido a
                    favoritos.</p>
                </div>
                <div class="paso3">
                    <img src="./img/paso3.svg">
                    <h1>3. Adopta</h1>
                    <p>Una vez enviado el mensaje, la
                    protectora contactará contigo para
                    indicarte como adoptar.</p>
                </div>
            </div>
        </div>
        <div class="contactar">
            <h1>Contacta con el equipo de AdoptaTuPet.es</h1>
            <p class="informacion">El equipo de adoptauperro.es responderá encantado a tus dudas, comentarios o propuestas, aún así, te recordamos que nuestro
                portal sirve como soporte para que las protectoras y refugios publiquen sus anuncios, por lo que si lo que deseas es recibir
                información sobre alguno de los anuncios publicados, te recomendamos contactar directamente con los anunciantes.</p>
            <form action="#" method="POST">
                <p>
                    <input type="text" name="nombre" placeholder="  Nombre" class="nombre" id="Nombre">
                    <input type="text" name="email" placeholder="  Email" class="email" id="Email">
                </p>

                <p>
                    <input type="text" name="asunto" placeholder="  Asunto" class="asunto" id="Asunto">
                </p>

                <p>
                    <textarea name="mensaje" placeholder="  Mensaje" class="mensaje" id="Mensaje" rows="10" cols="50"></textarea>
                </p>

                <p>
                    <input type="submit" name="botonEnviar" value="Enviar" class="enviar" id="Enviar">
                </p>

            </form>

        </div>
        <div class="preguntas">
            <h1 id="tituloPreguntasFrecuentes">Preguntas Frecuentes</h1>
            <select name="preguntasFrecuentes" id="preguntasFrecuentes">
                <option value="default">¿Porqué he creado AdoptaTuPet.es?</option>
            </select>
            <select name="preguntasFrecuentes" id="preguntasFrecuentes">
                <option value="default">¿Porqué he creado AdoptaTuPet.es?</option>
            </select>
            <select name="preguntasFrecuentes" id="preguntasFrecuentes">
                <option value="default">¿Porqué he creado AdoptaTuPet.es?</option>
            </select>
            <h1>Ayuda y Soporte</h1>
            <select name="preguntasFrecuentes" id="preguntasFrecuentes">
                <option value="default">¿Porqué he creado AdoptaTuPet.es?</option>
            </select>
            <select name="preguntasFrecuentes" id="preguntasFrecuentes">
                <option value="default">¿Porqué he creado AdoptaTuPet.es?</option>
            </select>
            <select name="preguntasFrecuentes" id="preguntasFrecuentes">
                <option value="default">¿Porqué he creado AdoptaTuPet.es?</option>
            </select>
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

    <!-- <script src="/model/js/ajax.js"></script>
    <script src="/model/js/cambiaDatos.js"></script>
    <script src="/model/js/clear.js"></script>
    <script src="/model/js/enter.js"></script>
    <script src="/model/js/index.js"></script>
    <script src="/model/js/loginAjax.js"></script> -->
    <script src="../js/openDivs.js"></script>
    <!-- <script src="/model/js/registerAjax.js"></script> -->

</body>

</html>