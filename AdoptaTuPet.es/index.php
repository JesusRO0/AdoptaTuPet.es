<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Cilos de Informática</title>
    <link rel="stylesheet" href="informatica.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <header>
        <div class="contenedorLineas">
                <div class="linea1 icono_cruz borde1"></div>
                <div class="linea2 icono_cruz borde2"></div>
                <div class="linea3 icono_cruz borde3"></div>
        </div>
        <div class="menu menuDesplegado menuPlegado">
            <h1 class="inicio">Inicio</h1>
            <div class="clases">
                <h2 class="boton_smr">SMR</h2>
                <h2 class="boton_asir">ASIR</h2>
                <h2 class="boton_daw">Desarrollo Web</h2>
                <h2 class="boton_dam">Desarrollo Multiplataforma</h2>
                <h2 class="boton_cyber">Ciberseguridad</h2>
                <div class="portada">
                    <hr>
                    <h2 class="volver">Volver a la portada</h2>
                </div>
            </div>
        </div>

        
    </header>

    <div class="contenedor">

        <div class="sector1 lienzoinicio visible">
            <div class="bloque">
                <h2>Ciclos Formativos de Informática</h2>
                <img src="img/logo.jpg">
                <p>¿Te apasiona la Informática? Si es así, te invitamos a descubrir los Ciclos Formativos que ofertamos en nuestro Centro. Sin duda podrás encontrar el que más se adapte a tus intereses y comenzar a prepararte para un brillante futuro profesional. Haz clic en el menú de arriba para saber más.</p>
            </div>
        </div>

        <div class="sector2 lienzosmr invisible">
            <div class="bloque">
                <h2>Sistemas Microinformáticos y Redes</h2>
                <img src="img/foto8.jpg">
                <p>El Ciclo Formativo de Grado Medio en Sistemas Microinformáticos y Redes sirve para formar a profesionales expertos en redes informáticas. Podrás por ejemplo diagnosticar disfunciones en sistemas microinformáticos y redes mediante pruebas funcionales. También instalar, configurar y mantener servicios multiusuario, aplicaciones y dispositivos compartidos en un entorno de red local.</p>
            </div>
        </div>

        <div class="sector3 lienzoasir invisible">
            <div class="bloque">
                <h2>Administración de Sistemas Informáticos en Red</h2>
                <img src="img/foto9.jpg">
                <p>El Ciclo Formativo de Grado Superior en Administración de Sistemas Informáticos en Red es muy completo; podrás trabajar como administrador de sistemas, responsable de Informática, técnico en servicios de Internet, técnico de telecomunicaciones, técnico de mensajería electrónica, técnico en teleasistencia, personal de apoyo y soporte técnico, técnico en administración de base de datos, técnico de redes, técnico en entornos web y supervisor de sistemas.</p>
            </div>
        </div>

        <div class="sector4 lienzodaw invisible">
            <div class="bloque">
                <h2>Desarrollo de Aplicaciones Web</h2>
                <img src="img/foto10.jpg">
                <p>El Ciclo Formativo Superior en Desarrollo de Aplicaciones Web es la formación que estás buscando si quieres convertirte en programador o desarrollador web. Por ejemplo, un técnico en Desarrollo de Aplicaciones Web puede acabar trabajando como diseñador web, técnico en SEO, especialista en analítica web o desarrollador front end, back end o full stack. Esta es una de las especialidades que prepara a los alumnos para trabajar en las profesiones más nuevas. Hay múltiples salidas laborales.</p>
            </div>
        </div>

        <div class="sector5 lienzodam invisible">
            <div class="bloque">
                <h2>Desarrollo de Aplicaciones Multiplataforma</h2>
                <img src="img/foto11.jpg">
                <p>En el Ciclo Formativo Superior en Desarrollo de Aplicaciones Multiplataforma se aprende a programar todo tipo de aplicaciones. Los alumnos se forman para ser capaces de dar respuesta a cualquier necesidad, ya sea en PC o móvil. El mundo digital avanza deprisa, las plataformas se optimizan y aparecen nuevos dispositivos. Gracias a la versatilidad del Ciclo, los técnicos pueden trabajar en diferentes campos y plataformas y ofrecer soluciones realmente innovadoras.</p>
            </div>
        </div>
        
        <div class="sector6 lienzocib invisible">
            <div class="bloque">
                <h2>Curso de Ciberseguridad</h2>
                <img src="img/foto12.jpg">
                <p>El Curso de Especialización en Ciberseguridad en Entornos de las Tecnologías de la Información, al que podrás acceder después de finalizar cualquier Ciclo de Grado Superior de la Familia Profesional de Informática, es una reciente novedad en nuestro Centro. En él aprenderás todas las tecnologías relacionadas con la Ciberseguridad, como el análisis forense, el hacking ético o el bastionado de sistemas. La ciberseguridad es un sector en alza, por lo que este curso es un gran complemento para tu formación.</p> 
            </div>
        </div>

    </div>

    <footer>
        <h2>Diseño de Interfaces Web - 2DAW. Ceuta.</h2>
    </footer>
    <script>
        $(document).ready(function() {
            $('.boton_smr').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').addClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').removeClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_asir').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').addClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').removeClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_daw').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').addClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').removeClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_dam').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('invisible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').addClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').removeClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_cyber').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').addClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').removeClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.inicio').on('click', function() {
                $(this).parents().find('.lienzoinicio').addClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').removeClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.volver').on('click', function() {
                $(this).parents().find('.lienzoinicio').addClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').removeClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.contenedorLineas').on('click', function(){
                $(this).toggleClass('.contenedorLineas');
                $(".menuDesplegado").toggleClass('menuPlegado');
                $(".menuPlegado").toggleClass('menuDesplegado');
            });

            //SPOILER LA ANIMACION DE LAS BARRAS SALE MAL.
            /*$('.contenedorLineas').on('click', function(){
                $(this).parents().find('.borde1 .borde2 .borde3').toggleClass('.linea1 .linea2 .linea3 ');
                $(this).parents().find('.linea1 .linea2 .linea3').toggleClass('.borde1 .borde2 .borde3');
            });*/
        });
    </script>  
</body>

</html><!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Cilos de Informática</title>
    <link rel="stylesheet" href="informatica.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <header>
        <div class="contenedorLineas">
                <div class="linea1 icono_cruz borde1"></div>
                <div class="linea2 icono_cruz borde2"></div>
                <div class="linea3 icono_cruz borde3"></div>
        </div>
        <div class="menu menuDesplegado menuPlegado">
            <h1 class="inicio">Inicio</h1>
            <div class="clases">
                <h2 class="boton_smr">SMR</h2>
                <h2 class="boton_asir">ASIR</h2>
                <h2 class="boton_daw">Desarrollo Web</h2>
                <h2 class="boton_dam">Desarrollo Multiplataforma</h2>
                <h2 class="boton_cyber">Ciberseguridad</h2>
                <div class="portada">
                    <hr>
                    <h2 class="volver">Volver a la portada</h2>
                </div>
            </div>
        </div>

        
    </header>

    <div class="contenedor">

        <div class="sector1 lienzoinicio visible">
            <div class="bloque">
                <h2>Ciclos Formativos de Informática</h2>
                <img src="img/logo.jpg">
                <p>¿Te apasiona la Informática? Si es así, te invitamos a descubrir los Ciclos Formativos que ofertamos en nuestro Centro. Sin duda podrás encontrar el que más se adapte a tus intereses y comenzar a prepararte para un brillante futuro profesional. Haz clic en el menú de arriba para saber más.</p>
            </div>
        </div>

        <div class="sector2 lienzosmr invisible">
            <div class="bloque">
                <h2>Sistemas Microinformáticos y Redes</h2>
                <img src="img/foto8.jpg">
                <p>El Ciclo Formativo de Grado Medio en Sistemas Microinformáticos y Redes sirve para formar a profesionales expertos en redes informáticas. Podrás por ejemplo diagnosticar disfunciones en sistemas microinformáticos y redes mediante pruebas funcionales. También instalar, configurar y mantener servicios multiusuario, aplicaciones y dispositivos compartidos en un entorno de red local.</p>
            </div>
        </div>

        <div class="sector3 lienzoasir invisible">
            <div class="bloque">
                <h2>Administración de Sistemas Informáticos en Red</h2>
                <img src="img/foto9.jpg">
                <p>El Ciclo Formativo de Grado Superior en Administración de Sistemas Informáticos en Red es muy completo; podrás trabajar como administrador de sistemas, responsable de Informática, técnico en servicios de Internet, técnico de telecomunicaciones, técnico de mensajería electrónica, técnico en teleasistencia, personal de apoyo y soporte técnico, técnico en administración de base de datos, técnico de redes, técnico en entornos web y supervisor de sistemas.</p>
            </div>
        </div>

        <div class="sector4 lienzodaw invisible">
            <div class="bloque">
                <h2>Desarrollo de Aplicaciones Web</h2>
                <img src="img/foto10.jpg">
                <p>El Ciclo Formativo Superior en Desarrollo de Aplicaciones Web es la formación que estás buscando si quieres convertirte en programador o desarrollador web. Por ejemplo, un técnico en Desarrollo de Aplicaciones Web puede acabar trabajando como diseñador web, técnico en SEO, especialista en analítica web o desarrollador front end, back end o full stack. Esta es una de las especialidades que prepara a los alumnos para trabajar en las profesiones más nuevas. Hay múltiples salidas laborales.</p>
            </div>
        </div>

        <div class="sector5 lienzodam invisible">
            <div class="bloque">
                <h2>Desarrollo de Aplicaciones Multiplataforma</h2>
                <img src="img/foto11.jpg">
                <p>En el Ciclo Formativo Superior en Desarrollo de Aplicaciones Multiplataforma se aprende a programar todo tipo de aplicaciones. Los alumnos se forman para ser capaces de dar respuesta a cualquier necesidad, ya sea en PC o móvil. El mundo digital avanza deprisa, las plataformas se optimizan y aparecen nuevos dispositivos. Gracias a la versatilidad del Ciclo, los técnicos pueden trabajar en diferentes campos y plataformas y ofrecer soluciones realmente innovadoras.</p>
            </div>
        </div>
        
        <div class="sector6 lienzocib invisible">
            <div class="bloque">
                <h2>Curso de Ciberseguridad</h2>
                <img src="img/foto12.jpg">
                <p>El Curso de Especialización en Ciberseguridad en Entornos de las Tecnologías de la Información, al que podrás acceder después de finalizar cualquier Ciclo de Grado Superior de la Familia Profesional de Informática, es una reciente novedad en nuestro Centro. En él aprenderás todas las tecnologías relacionadas con la Ciberseguridad, como el análisis forense, el hacking ético o el bastionado de sistemas. La ciberseguridad es un sector en alza, por lo que este curso es un gran complemento para tu formación.</p> 
            </div>
        </div>

    </div>

    <footer>
        <h2>Diseño de Interfaces Web - 2DAW. Ceuta.</h2>
    </footer>
    <script>
        $(document).ready(function() {
            $('.boton_smr').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').addClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').removeClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_asir').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').addClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').removeClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_daw').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').addClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').removeClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_dam').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('invisible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').addClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').removeClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_cyber').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').addClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').removeClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.inicio').on('click', function() {
                $(this).parents().find('.lienzoinicio').addClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').removeClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.volver').on('click', function() {
                $(this).parents().find('.lienzoinicio').addClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').removeClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.contenedorLineas').on('click', function(){
                $(this).toggleClass('.contenedorLineas');
                $(".menuDesplegado").toggleClass('menuPlegado');
                $(".menuPlegado").toggleClass('menuDesplegado');
            });

            //SPOILER LA ANIMACION DE LAS BARRAS SALE MAL.
            /*$('.contenedorLineas').on('click', function(){
                $(this).parents().find('.borde1 .borde2 .borde3').toggleClass('.linea1 .linea2 .linea3 ');
                $(this).parents().find('.linea1 .linea2 .linea3').toggleClass('.borde1 .borde2 .borde3');
            });*/
        });
    </script>  
</body>

</html><!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Cilos de Informática</title>
    <link rel="stylesheet" href="informatica.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <header>
        <div class="contenedorLineas">
                <div class="linea1 icono_cruz borde1"></div>
                <div class="linea2 icono_cruz borde2"></div>
                <div class="linea3 icono_cruz borde3"></div>
        </div>
        <div class="menu menuDesplegado menuPlegado">
            <h1 class="inicio">Inicio</h1>
            <div class="clases">
                <h2 class="boton_smr">SMR</h2>
                <h2 class="boton_asir">ASIR</h2>
                <h2 class="boton_daw">Desarrollo Web</h2>
                <h2 class="boton_dam">Desarrollo Multiplataforma</h2>
                <h2 class="boton_cyber">Ciberseguridad</h2>
                <div class="portada">
                    <hr>
                    <h2 class="volver">Volver a la portada</h2>
                </div>
            </div>
        </div>

        
    </header>

    <div class="contenedor">

        <div class="sector1 lienzoinicio visible">
            <div class="bloque">
                <h2>Ciclos Formativos de Informática</h2>
                <img src="img/logo.jpg">
                <p>¿Te apasiona la Informática? Si es así, te invitamos a descubrir los Ciclos Formativos que ofertamos en nuestro Centro. Sin duda podrás encontrar el que más se adapte a tus intereses y comenzar a prepararte para un brillante futuro profesional. Haz clic en el menú de arriba para saber más.</p>
            </div>
        </div>

        <div class="sector2 lienzosmr invisible">
            <div class="bloque">
                <h2>Sistemas Microinformáticos y Redes</h2>
                <img src="img/foto8.jpg">
                <p>El Ciclo Formativo de Grado Medio en Sistemas Microinformáticos y Redes sirve para formar a profesionales expertos en redes informáticas. Podrás por ejemplo diagnosticar disfunciones en sistemas microinformáticos y redes mediante pruebas funcionales. También instalar, configurar y mantener servicios multiusuario, aplicaciones y dispositivos compartidos en un entorno de red local.</p>
            </div>
        </div>

        <div class="sector3 lienzoasir invisible">
            <div class="bloque">
                <h2>Administración de Sistemas Informáticos en Red</h2>
                <img src="img/foto9.jpg">
                <p>El Ciclo Formativo de Grado Superior en Administración de Sistemas Informáticos en Red es muy completo; podrás trabajar como administrador de sistemas, responsable de Informática, técnico en servicios de Internet, técnico de telecomunicaciones, técnico de mensajería electrónica, técnico en teleasistencia, personal de apoyo y soporte técnico, técnico en administración de base de datos, técnico de redes, técnico en entornos web y supervisor de sistemas.</p>
            </div>
        </div>

        <div class="sector4 lienzodaw invisible">
            <div class="bloque">
                <h2>Desarrollo de Aplicaciones Web</h2>
                <img src="img/foto10.jpg">
                <p>El Ciclo Formativo Superior en Desarrollo de Aplicaciones Web es la formación que estás buscando si quieres convertirte en programador o desarrollador web. Por ejemplo, un técnico en Desarrollo de Aplicaciones Web puede acabar trabajando como diseñador web, técnico en SEO, especialista en analítica web o desarrollador front end, back end o full stack. Esta es una de las especialidades que prepara a los alumnos para trabajar en las profesiones más nuevas. Hay múltiples salidas laborales.</p>
            </div>
        </div>

        <div class="sector5 lienzodam invisible">
            <div class="bloque">
                <h2>Desarrollo de Aplicaciones Multiplataforma</h2>
                <img src="img/foto11.jpg">
                <p>En el Ciclo Formativo Superior en Desarrollo de Aplicaciones Multiplataforma se aprende a programar todo tipo de aplicaciones. Los alumnos se forman para ser capaces de dar respuesta a cualquier necesidad, ya sea en PC o móvil. El mundo digital avanza deprisa, las plataformas se optimizan y aparecen nuevos dispositivos. Gracias a la versatilidad del Ciclo, los técnicos pueden trabajar en diferentes campos y plataformas y ofrecer soluciones realmente innovadoras.</p>
            </div>
        </div>
        
        <div class="sector6 lienzocib invisible">
            <div class="bloque">
                <h2>Curso de Ciberseguridad</h2>
                <img src="img/foto12.jpg">
                <p>El Curso de Especialización en Ciberseguridad en Entornos de las Tecnologías de la Información, al que podrás acceder después de finalizar cualquier Ciclo de Grado Superior de la Familia Profesional de Informática, es una reciente novedad en nuestro Centro. En él aprenderás todas las tecnologías relacionadas con la Ciberseguridad, como el análisis forense, el hacking ético o el bastionado de sistemas. La ciberseguridad es un sector en alza, por lo que este curso es un gran complemento para tu formación.</p> 
            </div>
        </div>

    </div>

    <footer>
        <h2>Diseño de Interfaces Web - 2DAW. Ceuta.</h2>
    </footer>
    <script>
        $(document).ready(function() {
            $('.boton_smr').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').addClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').removeClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_asir').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').addClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').removeClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_daw').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').addClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').removeClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_dam').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('invisible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').addClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').removeClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_cyber').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').addClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').removeClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.inicio').on('click', function() {
                $(this).parents().find('.lienzoinicio').addClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').removeClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.volver').on('click', function() {
                $(this).parents().find('.lienzoinicio').addClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').removeClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.contenedorLineas').on('click', function(){
                $(this).toggleClass('.contenedorLineas');
                $(".menuDesplegado").toggleClass('menuPlegado');
                $(".menuPlegado").toggleClass('menuDesplegado');
            });

            //SPOILER LA ANIMACION DE LAS BARRAS SALE MAL.
            /*$('.contenedorLineas').on('click', function(){
                $(this).parents().find('.borde1 .borde2 .borde3').toggleClass('.linea1 .linea2 .linea3 ');
                $(this).parents().find('.linea1 .linea2 .linea3').toggleClass('.borde1 .borde2 .borde3');
            });*/
        });
    </script>  
</body>

</html><!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Cilos de Informática</title>
    <link rel="stylesheet" href="informatica.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <header>
        <div class="contenedorLineas">
                <div class="linea1 icono_cruz borde1"></div>
                <div class="linea2 icono_cruz borde2"></div>
                <div class="linea3 icono_cruz borde3"></div>
        </div>
        <div class="menu menuDesplegado menuPlegado">
            <h1 class="inicio">Inicio</h1>
            <div class="clases">
                <h2 class="boton_smr">SMR</h2>
                <h2 class="boton_asir">ASIR</h2>
                <h2 class="boton_daw">Desarrollo Web</h2>
                <h2 class="boton_dam">Desarrollo Multiplataforma</h2>
                <h2 class="boton_cyber">Ciberseguridad</h2>
                <div class="portada">
                    <hr>
                    <h2 class="volver">Volver a la portada</h2>
                </div>
            </div>
        </div>

        
    </header>

    <div class="contenedor">

        <div class="sector1 lienzoinicio visible">
            <div class="bloque">
                <h2>Ciclos Formativos de Informática</h2>
                <img src="img/logo.jpg">
                <p>¿Te apasiona la Informática? Si es así, te invitamos a descubrir los Ciclos Formativos que ofertamos en nuestro Centro. Sin duda podrás encontrar el que más se adapte a tus intereses y comenzar a prepararte para un brillante futuro profesional. Haz clic en el menú de arriba para saber más.</p>
            </div>
        </div>

        <div class="sector2 lienzosmr invisible">
            <div class="bloque">
                <h2>Sistemas Microinformáticos y Redes</h2>
                <img src="img/foto8.jpg">
                <p>El Ciclo Formativo de Grado Medio en Sistemas Microinformáticos y Redes sirve para formar a profesionales expertos en redes informáticas. Podrás por ejemplo diagnosticar disfunciones en sistemas microinformáticos y redes mediante pruebas funcionales. También instalar, configurar y mantener servicios multiusuario, aplicaciones y dispositivos compartidos en un entorno de red local.</p>
            </div>
        </div>

        <div class="sector3 lienzoasir invisible">
            <div class="bloque">
                <h2>Administración de Sistemas Informáticos en Red</h2>
                <img src="img/foto9.jpg">
                <p>El Ciclo Formativo de Grado Superior en Administración de Sistemas Informáticos en Red es muy completo; podrás trabajar como administrador de sistemas, responsable de Informática, técnico en servicios de Internet, técnico de telecomunicaciones, técnico de mensajería electrónica, técnico en teleasistencia, personal de apoyo y soporte técnico, técnico en administración de base de datos, técnico de redes, técnico en entornos web y supervisor de sistemas.</p>
            </div>
        </div>

        <div class="sector4 lienzodaw invisible">
            <div class="bloque">
                <h2>Desarrollo de Aplicaciones Web</h2>
                <img src="img/foto10.jpg">
                <p>El Ciclo Formativo Superior en Desarrollo de Aplicaciones Web es la formación que estás buscando si quieres convertirte en programador o desarrollador web. Por ejemplo, un técnico en Desarrollo de Aplicaciones Web puede acabar trabajando como diseñador web, técnico en SEO, especialista en analítica web o desarrollador front end, back end o full stack. Esta es una de las especialidades que prepara a los alumnos para trabajar en las profesiones más nuevas. Hay múltiples salidas laborales.</p>
            </div>
        </div>

        <div class="sector5 lienzodam invisible">
            <div class="bloque">
                <h2>Desarrollo de Aplicaciones Multiplataforma</h2>
                <img src="img/foto11.jpg">
                <p>En el Ciclo Formativo Superior en Desarrollo de Aplicaciones Multiplataforma se aprende a programar todo tipo de aplicaciones. Los alumnos se forman para ser capaces de dar respuesta a cualquier necesidad, ya sea en PC o móvil. El mundo digital avanza deprisa, las plataformas se optimizan y aparecen nuevos dispositivos. Gracias a la versatilidad del Ciclo, los técnicos pueden trabajar en diferentes campos y plataformas y ofrecer soluciones realmente innovadoras.</p>
            </div>
        </div>
        
        <div class="sector6 lienzocib invisible">
            <div class="bloque">
                <h2>Curso de Ciberseguridad</h2>
                <img src="img/foto12.jpg">
                <p>El Curso de Especialización en Ciberseguridad en Entornos de las Tecnologías de la Información, al que podrás acceder después de finalizar cualquier Ciclo de Grado Superior de la Familia Profesional de Informática, es una reciente novedad en nuestro Centro. En él aprenderás todas las tecnologías relacionadas con la Ciberseguridad, como el análisis forense, el hacking ético o el bastionado de sistemas. La ciberseguridad es un sector en alza, por lo que este curso es un gran complemento para tu formación.</p> 
            </div>
        </div>

    </div>

    <footer>
        <h2>Diseño de Interfaces Web - 2DAW. Ceuta.</h2>
    </footer>
    <script>
        $(document).ready(function() {
            $('.boton_smr').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').addClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').removeClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_asir').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').addClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').removeClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_daw').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').addClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').removeClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_dam').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('invisible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').addClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').removeClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_cyber').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').addClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').removeClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.inicio').on('click', function() {
                $(this).parents().find('.lienzoinicio').addClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').removeClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.volver').on('click', function() {
                $(this).parents().find('.lienzoinicio').addClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').removeClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.contenedorLineas').on('click', function(){
                $(this).toggleClass('.contenedorLineas');
                $(".menuDesplegado").toggleClass('menuPlegado');
                $(".menuPlegado").toggleClass('menuDesplegado');
            });

            //SPOILER LA ANIMACION DE LAS BARRAS SALE MAL.
            /*$('.contenedorLineas').on('click', function(){
                $(this).parents().find('.borde1 .borde2 .borde3').toggleClass('.linea1 .linea2 .linea3 ');
                $(this).parents().find('.linea1 .linea2 .linea3').toggleClass('.borde1 .borde2 .borde3');
            });*/
        });
    </script>  
</body>

</html><!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Cilos de Informática</title>
    <link rel="stylesheet" href="informatica.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <header>
        <div class="contenedorLineas">
                <div class="linea1 icono_cruz borde1"></div>
                <div class="linea2 icono_cruz borde2"></div>
                <div class="linea3 icono_cruz borde3"></div>
        </div>
        <div class="menu menuDesplegado menuPlegado">
            <h1 class="inicio">Inicio</h1>
            <div class="clases">
                <h2 class="boton_smr">SMR</h2>
                <h2 class="boton_asir">ASIR</h2>
                <h2 class="boton_daw">Desarrollo Web</h2>
                <h2 class="boton_dam">Desarrollo Multiplataforma</h2>
                <h2 class="boton_cyber">Ciberseguridad</h2>
                <div class="portada">
                    <hr>
                    <h2 class="volver">Volver a la portada</h2>
                </div>
            </div>
        </div>

        
    </header>

    <div class="contenedor">

        <div class="sector1 lienzoinicio visible">
            <div class="bloque">
                <h2>Ciclos Formativos de Informática</h2>
                <img src="img/logo.jpg">
                <p>¿Te apasiona la Informática? Si es así, te invitamos a descubrir los Ciclos Formativos que ofertamos en nuestro Centro. Sin duda podrás encontrar el que más se adapte a tus intereses y comenzar a prepararte para un brillante futuro profesional. Haz clic en el menú de arriba para saber más.</p>
            </div>
        </div>

        <div class="sector2 lienzosmr invisible">
            <div class="bloque">
                <h2>Sistemas Microinformáticos y Redes</h2>
                <img src="img/foto8.jpg">
                <p>El Ciclo Formativo de Grado Medio en Sistemas Microinformáticos y Redes sirve para formar a profesionales expertos en redes informáticas. Podrás por ejemplo diagnosticar disfunciones en sistemas microinformáticos y redes mediante pruebas funcionales. También instalar, configurar y mantener servicios multiusuario, aplicaciones y dispositivos compartidos en un entorno de red local.</p>
            </div>
        </div>

        <div class="sector3 lienzoasir invisible">
            <div class="bloque">
                <h2>Administración de Sistemas Informáticos en Red</h2>
                <img src="img/foto9.jpg">
                <p>El Ciclo Formativo de Grado Superior en Administración de Sistemas Informáticos en Red es muy completo; podrás trabajar como administrador de sistemas, responsable de Informática, técnico en servicios de Internet, técnico de telecomunicaciones, técnico de mensajería electrónica, técnico en teleasistencia, personal de apoyo y soporte técnico, técnico en administración de base de datos, técnico de redes, técnico en entornos web y supervisor de sistemas.</p>
            </div>
        </div>

        <div class="sector4 lienzodaw invisible">
            <div class="bloque">
                <h2>Desarrollo de Aplicaciones Web</h2>
                <img src="img/foto10.jpg">
                <p>El Ciclo Formativo Superior en Desarrollo de Aplicaciones Web es la formación que estás buscando si quieres convertirte en programador o desarrollador web. Por ejemplo, un técnico en Desarrollo de Aplicaciones Web puede acabar trabajando como diseñador web, técnico en SEO, especialista en analítica web o desarrollador front end, back end o full stack. Esta es una de las especialidades que prepara a los alumnos para trabajar en las profesiones más nuevas. Hay múltiples salidas laborales.</p>
            </div>
        </div>

        <div class="sector5 lienzodam invisible">
            <div class="bloque">
                <h2>Desarrollo de Aplicaciones Multiplataforma</h2>
                <img src="img/foto11.jpg">
                <p>En el Ciclo Formativo Superior en Desarrollo de Aplicaciones Multiplataforma se aprende a programar todo tipo de aplicaciones. Los alumnos se forman para ser capaces de dar respuesta a cualquier necesidad, ya sea en PC o móvil. El mundo digital avanza deprisa, las plataformas se optimizan y aparecen nuevos dispositivos. Gracias a la versatilidad del Ciclo, los técnicos pueden trabajar en diferentes campos y plataformas y ofrecer soluciones realmente innovadoras.</p>
            </div>
        </div>
        
        <div class="sector6 lienzocib invisible">
            <div class="bloque">
                <h2>Curso de Ciberseguridad</h2>
                <img src="img/foto12.jpg">
                <p>El Curso de Especialización en Ciberseguridad en Entornos de las Tecnologías de la Información, al que podrás acceder después de finalizar cualquier Ciclo de Grado Superior de la Familia Profesional de Informática, es una reciente novedad en nuestro Centro. En él aprenderás todas las tecnologías relacionadas con la Ciberseguridad, como el análisis forense, el hacking ético o el bastionado de sistemas. La ciberseguridad es un sector en alza, por lo que este curso es un gran complemento para tu formación.</p> 
            </div>
        </div>

    </div>

    <footer>
        <h2>Diseño de Interfaces Web - 2DAW. Ceuta.</h2>
    </footer>
    <script>
        $(document).ready(function() {
            $('.boton_smr').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').addClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').removeClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_asir').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').addClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').removeClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_daw').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').addClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').removeClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_dam').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('invisible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').addClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').removeClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.boton_cyber').on('click', function() {
                $(this).parents().find('.lienzoinicio').removeClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').addClass('visible');

                $(this).parents().find('.lienzoinicio').addClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').removeClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.inicio').on('click', function() {
                $(this).parents().find('.lienzoinicio').addClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').removeClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.volver').on('click', function() {
                $(this).parents().find('.lienzoinicio').addClass('visible');
                $(this).parents().find('.lienzosmr').removeClass('visible');
                $(this).parents().find('.lienzoasir').removeClass('visible');
                $(this).parents().find('.lienzodaw').removeClass('visible');
                $(this).parents().find('.lienzodam').removeClass('visible');
                $(this).parents().find('.lienzocib').removeClass('visible');

                $(this).parents().find('.lienzoinicio').removeClass('invisible');
                $(this).parents().find('.lienzosmr').addClass('invisible');
                $(this).parents().find('.lienzoasir').addClass('invisible');
                $(this).parents().find('.lienzodaw').addClass('invisible');
                $(this).parents().find('.lienzodam').addClass('invisible');
                $(this).parents().find('.lienzocib').addClass('invisible');

                $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
                $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
            });

            $('.contenedorLineas').on('click', function(){
                $(this).toggleClass('.contenedorLineas');
                $(".menuDesplegado").toggleClass('menuPlegado');
                $(".menuPlegado").toggleClass('menuDesplegado');
            });

            //SPOILER LA ANIMACION DE LAS BARRAS SALE MAL.
            /*$('.contenedorLineas').on('click', function(){
                $(this).parents().find('.borde1 .borde2 .borde3').toggleClass('.linea1 .linea2 .linea3 ');
                $(this).parents().find('.linea1 .linea2 .linea3').toggleClass('.borde1 .borde2 .borde3');
            });*/
        });
    </script>  
</body>

</html>