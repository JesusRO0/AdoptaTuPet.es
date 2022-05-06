<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foto</title>
    <link rel="stylesheet" href="css/foto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 
</head>

<body>
    <?php
        include_once ('app/crud.php');
        $nLikes = cuentaLikes($_GET['id']);
        if(isset($_SESSION['email'])){
            $liked = compruebaLike($_GET['id'], $_SESSION['email']);
            $datos = muestraDatosUsuario($_SESSION['email']);
            if(!is_null($datos)){
                $userName = $datos['nombre'];
                $pic = $datos['foto'];
            }
        }
        

        if (isset($_POST['closeSesion'])) {
            cierraSesion();
        }
    ?>
    <input type="hidden" id="idImg" value="<?php echo $_GET['id'];?>">
    <input type="hidden" id="idUser" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>">

    <header>

        <a href="index.php">
            <div class="logo">
                <img src="images/camara.png" alt="logo">
                <h1>Galor</h1>
            </div>
        </a>
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
            <form method="POST" action="index.php">
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

        <div class="info">

            <div class="fotoTitulo">
                <img alt="foto" class="bigFoto" id="bigFoto">
                <div class="titulo">
                    <h2 id="titPho">Camino a la libertad</h2>
                    <hr>
                    <p class="descripcion" id="desc">El lugar produce sensación de quietud,
                                            calma, tranquilidad. También de soledad,
                                            pues no se ve ningún rastro de seres
                                            animados en todo él. Puede parecer que
                                            se acaba el verano y llegan los primeros
                                            días del cambio de estación, de una
                                            manera serena y absolutamente natural.
                    </p>
                    <div class="likes">
                        <?php
                        if(isset($_SESSION['email'])){
                            if (isset($liked)) {
                                if ($liked) {
                                    echo '<img src="images/heart.png" alt="foto" class="megusta" id="imgLikes" onclick="quitarLike(idImg, idUser); location.reload();">';
                                }

                                else{
                                    echo '<img src="images/megusta.png" alt="foto" class="megusta" id="imgLikes" onclick="console.log(123);darLike(idImg, idUser); location.reload();">';
                                }
                            }

                        }else{
                            echo '<img src="images/megusta.png" alt="foto" class="megusta" id="imgLikes">';

                        }
                        ?>
                        <p class="numLikes"><?php echo $nLikes;?></p>
                    </div>
                </div>
            </div>

            <div class="separador"></div>

            <div class="comentarios">
                <h3>Comentarios</h3>
                <hr>

                <div class="usuario">
                    <img src="images/camara.png" alt="perfil">
                    <h3><?php if(isset($userName)) {echo $userName;}?></h3>
                    <input type="text" name="comentario" class="comentario" id="comentario" placeholder="Escribe tu comentario público">
                    <input value="Publicar Comentario" type="submit" id="subComment" class="subComment" onclick="if(idUser){ comentar(idImg, idUser, document.getElementById('comentario').value); location.reload();}">
                </div> 

                <?php
                    if (muestraDatosComentario($_GET['id'])) {
                        montaComent();
                    }
                    creaHeader();

                ?>
            </div>

        </div>
    </main>

    <footer>
    <hr>
        <h3>2º Desarrollo de Aplicaciones Web en Entorno Servidor</h3>
    </footer>
    <script>
        window.addEventListener('load', ()=>{
            fotoSola(document.getElementById('idImg').value);
            titulo(document.getElementById('idImg').value);
            desc(document.getElementById('idImg').value);
        });
    </script>
    <script src="js/ajaxUnaFoto.js"></script>
    <script src="js/darLike.js"></script>
    <script src="js/quitarLike.js"></script>
    <script src="js/foto.js"></script>
    <script src="js/comentar.js"></script>
    <script src="js/cambiaDatos.js"></script>
    <script src="js/clear.js"></script>
    <script src="js/index.js"></script>
    <script src="js/loginAjax.js"></script>
    <script src="js/openDivs.js"></script>
    <script src="js/registerAjax.js"></script>





</body>

</html>