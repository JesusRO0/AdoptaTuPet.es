## AdoptaTuPet.es
Una página Web destinada a la adopción y al trato de nuestras mascotas felinas y perrunas. (Proyecto Final Desarrollo de Aplicaciones Web)

### Descripción

La página web estará estructurada en distintos apartados:

  - Un home donde básicamente los usuarios pueden subir posts de sus animales a modo de red social, parecido a un foro en vivo donde se pueden subir toda clase de cosa relaccionadas con los animales.
  - Un apartado de adopción donde aparecerán en columnas los datos de los animales y sus fotos, tambíen se podrá subir anuncios de adopción de un animal del usuario si esta regisrado (Main theme).
  - Otro apartado de anuncios generales donde los usuarios verán mensajes de otros usuarios sobre información de los animales tales como busquedas, desapariciones y su información de contacto.
  - Información sobre la pagína en general con información propia.
  - Por último una tienda donde se encontrarán accesorios y juguetes para ellos (Esto puede cambiar).

La idea surge de la página https://www.adoptapet.com/, la modificaremos para mejorarla incluyendo el apartado de noticias y anuncios que pueden ser interesantes a la hora de interactuar con el usuario, se usarán dos apis con imágenes de animales.

#### Horario

- Prácticas de 8:00 a 14:00.
- Proyecto: 2h al día de Lunes a Jueves, información, investigación y programación.

### Introducción

#### Estudio de alternativas.

Referencias: https://www.adoptapet.com/, https://adopcionanimal.es/ y https://bambu-difunde.net/.

- Pros.

Nuestra página tendra unos apartados adicionales que las páginas mencionadas anteriormente no tienen, como por ejemplo, el foro que será nuestro home page. Los usuarios verán una serie de posts relaccionadas con el mundo animal, fotos, momentos que quieran compartir con sus animales, comentarios, tambíen se podrá comentar y votar esos hilos para expresar si te ha gustado ese post, este apartado estará enfocado a la interacción del usuario.

También habrá otro apartado solo de anuncios, habrá un tablón de anuncios donde los usuarios puden colgar post de "Se busca" o desapariciones de sus mascotas así como información de la mascota y lo sucedido, además de información de contacto del usuario. Este apartado tampoco lo abarca las demás páginas y creo que será un buen apunte para ayudar al usuario.

- Contras.

Puede ser tedioso a la hora de hacerlo pero se intentrá ser lo más fiel posible a los objetivos que se están dando aunque algúnos se puedan quedar atrás, la tienda por ejemplo es un apartado muy común entre las demás páginas así que puede que se elimine en un futuro o cambie a algo parecido a una venta de accesorios de segunda mano de usuarios.

La parte de adopción será igual que las demás no tendra nada novedoso y el apartado de interés sobre la página también.


### Planificación

- Diagrama de Gantt

Se ha realizado un diagrama de Gantt que se irá actualizando cuando empiece ha cambiar algunas cosas.

- Ciclo de desarrollo

El ciclo de desarrollo constará de seis fases:

  1. Fase de planificación: Básicamente será el anteproyecto, una idea con su nombre y el objetivo del proyecto. También se realizará un caso de uso que tenga todos los objetivos de nuestra página web.
  2. Fase de diseño: Bocetos, modelos, mockups, gama cromática y por último hoja de estilo.
  3. Fase de diselo lógico: Organizar las carpetas del proyecto en una arquitectura MVC, realizar un diagrama de clases y un modelo entidad-relación.
  4. Fase de implementación: Empezár la BBDD con la ayuda del diagrama y Entidad-Relación propuesta, luego empezar a diseñar la pagina empezando por el home y las adopciones.
  5. Fase de prueba y despliegue: Nos aseguramos del correcto funcionamiento del proyecto en su ubicación definitiva teniendo en cuenta dependencias y versiones necesarias entre todos los componentes involucrados.
  6. Fase de ampliacion: En esta fase solo se tendrá en cuenta los cambios que se podrían haber realizado a la hora de hacer el proyecto o bíen los que se quedaron por el camino.

### Análisis software

- Requisitos funcionales

El sistema tendrá usuario registrado, y no registrado.
Constará de autenticación a la hora de registrarse e iniciar sesión.
El usuario tendrá privilegios para subir posts.
El usuario tendrá que estar registrado si quiere interactuar con los posts de los demás usuarios.
El usuario registrado y no registrado podrá acceder a toda la información.
Los anuncios o posts tendrán un tiempo de vida.

- Requisitos no funcionales

Cuando el usuario se identifique saldrá una notificación de bienvenida (o esa es la idea).
El sistema será intuitivo para cualquier usuario.
Los colores y animación serán los descritos en diseño (colores en proceso).
Cuando el usuario intente subir algun post y no está registrado el sistema le avisará automaticamente.

- Caso de uso

![Caso de Uso](https://github.com/JesusRO0/AdoptaTuPet.es/blob/main/Casodeuso.png)

### Diseño lógico

- Arquitectura MVC

![MVC](https://github.com/JesusRO0/AdoptaTuPet.es/blob/main/ModeloMVC.png)

- Diagrama de Clases

![UML](https://github.com/JesusRO0/AdoptaTuPet.es/blob/main/UML.png)

- Diagrama Entidad-Relación

![E-R](https://github.com/JesusRO0/AdoptaTuPet.es/blob/main/E-R%20AdoptaTuPet.es.png)

- Grafo Relacional.

![Grafo](https://github.com/JesusRO0/AdoptaTuPet.es/blob/main/Grafo%20Relacional%20ATP.es.pdf)

### Diseño de interfaces / Diseño Centrado en el Usuario (DCU)

- Gama cromática

Para los colores usaremos una gama de azul para dar sensación de libertad con un tono adicional naranja que sobresalta bastante y le da un toque de emoción y personalidad. #E7F6FC , #87DDFF y #ED7F05.
![GamaCromática](https://github.com/JesusRO0/AdoptaTuPet.es/blob/main/GamaCromatica.png)

- Letras

Títulos: Fredoka.
Cuerpo: Raleway.

- Icono de la Página

![Icono](https://github.com/JesusRO0/AdoptaTuPet.es/blob/main/iconoadoptatupet.png)

- Mockup, diseño de alta fidelidad.

![Mockup](https://github.com/JesusRO0/AdoptaTuPet.es/blob/main/AdoptaTuPetes.pdf)

- Guía de Estilo.

![Guía](https://github.com/JesusRO0/AdoptaTuPet.es/blob/main/Gu%C3%ADaDeEstilo.pdf)

#### Análisis del proyecto

- No se va ha usar boostrap, solo vanilla css.
- Tampoco se utilizará Laravel por falta de tiempo.
- Vanilla javascript.
- Solo perros y gatos, posible ampliación con más animales.
- Foro y tienda serán posibles ampliaciónes.
- Diseño de movil y cambios del desktop hechos, el tema favoritos no ha dado tiempo.
- Se ha utilizado una API de cursiosidades de gatos llamada API Facts Cats.

Se ha realizado cambios en el color y la letra en algunos apartados tales como en el index y contacto, se ha terminado el header que compartirán todos los apartados más el footer, dentro del header se ha creado los bloques de iniciar sesión y regístrate mediante javascript.  

El apartado de index.php y contacto.php está terminado, falta implementar más estilos e animaciones pero más adelamnte, además del diseño de móvil. El siguiente punto es crear un usuario administrador en la base de datos y darle permisos solo a él para poder subir datos de los animales a la página, también se insertarán 20 mascotas que podrán verse en el apartado adopta.php.  

En adopta.php se verán todas las mascotas que se podrán adoptar y poder guardarlas en favoritos, entre el día 19/05 20/05 debería estar implementado, se usará mysqli para ello.  

El siguiente paso sería modificar el animal.php que se trata del mismo perfil de un animal cuando se ha clickeado, allí se verá un perfil y el botón para poder adoptarlo, a parte tendremos acceso a una API donde nos recomendará tips para nuestras mascotas. Una vez que se realice la adopción normalmente se le comunica al usuario un mensaje/mail donde obtiene toda la información sobre la protectora que tiene a esa mascota, se interntará mandar ese correo o mensaje.  

22/05 Se ha modificado el apartado de model y controller del proyecto añadiendo las funciones que necesitaba del usuario y animal, del usuario se ha añadido un registro y un iniciar sesión funcional, tambien el mostrar su foto de perfil default y poder subir una propia. Del apartado animal el poder subir animales y guardar su favorito, se ha modificado el diseño y añadido el apartado perfil, mensajes, favoritos y subirAnimal. Faltaría subir animales a la BBDD y poder mostrarlos en el apartado de adopta.php que ya se ha creado una función previa para ello. Se debería crear un model y un controller específico para el subirAnimal.php y subir correctamente los animales a la BBDD. El tema del foro se aplazará hasta que se muestre todo lo escrito previamente y se logre el diseño en móvil.  

Se ha conseguido crear un apartado especial en el perfil.php donde si se inicia sesión con el email "adoptatupet@gmail.es" contraseña "1234" se desbloqueará un botón nuevo donde al pulsarlo te llevará a una la página de subeAnimal.php donde se ha conseguido insertar animales en la BBDD. Se ha cambiado más el diseño para hacerlo más responsive y el siguiente paso en el día 24/05 es crear las comprobaciones necesarias con js (preparadas) y usar las expresiones regulares con html (requisito mínimo) y empezar a crear el diseño tablet y móvil como se ha planteado, para adopta.php hay que comprobar si se muestran los animales insertados y mejorar su diseño con grid o flex.  

26/05 Se ha terminado tanto el apartado de adopta.php como los cambios del perfil.php, se han subido algunos animales a la bbdd y se han mostrado en adopta.php, se han realizado muchas consultas y condicionales para hacer funcionar el filtro, se pueden filtrar los animales, se ha modificado los cambios del usuario en perfil.php con AJAX, los cambios que se pueden hacer es cambiar el nombre del usuario, email y añadir una localidad. También en el mismo apartado de perfil.php se puede cambiar la imagen de perfil del usuario. Habría que ver si se puede añadir el favorito al animal aunque de momento solo se va a mejorar el diseño tanto en desktop como en movil y finalmente se va a cancelar el apartado de Foro y será una posible ampliación como la tienda de accesorios de animales.  

Cuando hacemos click en un animal podemos ver su perfil, con todas sus propiedades como nombre, localidad, tamaño etc. El botón de adoptar animal será solo un alert() de javascript, realmente te tendría que llegar un correo informándote de que protectora tiene la posesión de ese animal y se pondría en contacto con el usuario para llegar a la adopción. Más abajo después de la descripción del animal se ha utilizado una API de cursiosidad de gatos, llamada API Facts Cats, y lo que devulve es un json con un tip de nuestros amigos gatunos lamentablemente en inglés.  

30/05 Se ha entregado el proyecto con el diseño de móvil terminado, para temas de ampliación se tendrá en cuenta el foro y la tienda, también se pueden añadir pequeñas modificaciones como ver tu usuario e email en tu perfil y poder darle me gusta a un animal y guardarlo en favoritos.  

DOMINIO WEB: https://adoptatupet.000webhostapp.com/
