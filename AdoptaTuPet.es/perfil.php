<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="./css/perfil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 
</head>

<body>

    <?php
        require_once('app/sesiones.php');
        require_once('app/imagenDB.php');
    ?>

<header>

    <a href="./index.php">
        <div class="logo">
            <img src="images/camara.png" alt="logo">
            <h1>Galor</h1>
        </div>
    </a>


    <div class='perfil' id="divPerfil">
        <input type='button' name='perfil' id='perfil' value='V' class="flecha">
        <h3 id="h3User"></h3>
        <img alt='foto_perfil' class='fotoPerfilTop' id="imgUser">
    </div>

    

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

        <div class="contenedor">
            <div class="usuario">
                <div class="foto">
                <img alt='foto_perfil' class='fotoPerfil' id="imgPerfil"><br>

                        <form action="./app/subeImagen.php" method="post" enctype="multipart/form-data">
                            <input type="file" value="Cambiar foto" class="botonCambio" name="image" id="phoFile"><br>
                            <input type="submit" value="Cambiar foto" name="cambiaFoto" class="boton cambiaFoto" id="changePho">
                        </form>    
                </div>

                <div class="cambiosUser">
                    <form method="POST" action="perfil.php">
                        <h2 id="h2Perf"></h2>
                        <input id="usuarioIn" type="text" placeholder=" > Cambiar nombre de usuario" class="cambiarNombre">
                        <input type="hidden" id="hiddenEmail" value="<?php echo $_SESSION['email'];?>">
                        <input type="submit" name="cambiaCorreo" id="userChange" class="guardarNombre" value="Guardar nombre de Usuario" onclick="changeName(sesionEmail, document.getElementById('usuarioIn').value);">
                    </form>
                </div>
            </div>
            <div class="correo">
                <form method="POST" action="perfil.php">
                    <h3>Correo</h3>
                    <input type="text" name="correo" id="correo" class="input inputCorreo">
                    <input type="submit" value="Guardar Correo" class="guardarCorreo" name="guardar" id="menosMargen" onclick="changeEmail(sesionEmail, document.getElementById('correo').value);">
                </form>
            </div>

            
        </div>

        <div class="relleno" id="relleno"></div>
    </main>
    <footer>
    <hr>
        <h3>2º Desarrollo de Aplicaciones Web en Entorno Servidor</h3>
    </footer>
    <script src="./js/cambiaDatos.js"></script>
    <script src="./js/perfil.js"></script>
    <script src="./js/openDivsPerfil.js"></script>
    <script src="./js/index.js"></script>


    <?php 
        creaHeader();
        montaPerfil();
    ?>
</body>

</html>