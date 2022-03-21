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

- Caso de uso.

![Caso de Uso](https://github.com/JesusRO0/AdoptaTuPet.es/blob/main/Casodeuso.png)
