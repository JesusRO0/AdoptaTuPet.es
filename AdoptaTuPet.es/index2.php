<!DOCTYPE html>
<html id="html">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Image Search App">
    <meta name="keywords" content="HTML,CSS,JavaScript, images, API">
    <meta name="author" content="Neha Soni">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galor</title>
    <link rel="stylesheet" href="./views/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 
</head>

<body>
    <?php
        require_once('controller/sesiones.php');


        if (isset($_POST['closeSesion'])) {
            cierraSesion();
        }
    ?>
    <header>

        <div class="logo">
            <img src="images/camara.png" alt="logo">
            <h1>Galor</h1>
        </div>
        <p id="errorL"></p>


            <div class='sesion' id="divSesion">
                <div class='boton registro' id='openDR'>Regístrate</div>
                <div class='boton inicioSesion' id='openDL'>Iniciar Sesión</div>
            </div>

            <div class='perfil' id="divPerfil">
                <input type='button' name='perfil' id='perfil' value='V' class="flecha">
                <h3 id="h3User"></h3>
                <img alt='foto_perfil' class='fotoPerfilTop' id="imgUser">
            </div>


        <?php

            if (isset($_POST['completarLogin'])) {
                if (isset($_POST['correoSesion']) && isset($_POST['passSesion'])) {
                echo '<script>console.log(123);</script>';
                }

                iniciarSesion($_POST['correoSesion'], $_POST['passSesion']);
            }

        ?>

            

    </header>
    <hr>
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

        <div class="relleno" id="relleno">
        </div>

        <div class="search">
            <input type="text" class="inputBusqueda" id="inputBusqueda" placeholder="Buscador...">
            <input type="submit" name="enviaBusqueda" id="enviaBusqueda" class="enviaBusqueda boton" value=">" onclick="clearImg(); show(document.getElementById('inputBusqueda').value, page);">
        </div>

        <div class="capaGrande">
            <div class="contenedorImagenes" id="contenedorImagenes">
            </div>
            <button id="prev" class="prev" onclick=" ++page; show(document.getElementById('inputBusqueda').value, page); ">Cargar más</button>
        </div>

    </main>

    <footer>
    <hr>
        <h3>2º Desarrollo de Aplicaciones Web en Entorno Servidor</h3>
    </footer>

    
    <script src="./model/js/ajax.js"></script>
    <script src="./model/js/cambiaDatos.js"></script>
    <script src="./model/js/clear.js"></script>
    <script src="./model/js/enter.js"></script>
    <script src="./model/js/index.js"></script>
    <script src="./model/js/loginAjax.js"></script>
    <script src="./model/js/openDivs.js"></script>
    <script src="./model/js/registerAjax.js"></script>


    <?php
        creaHeader();

    ?>


</body>

</html>