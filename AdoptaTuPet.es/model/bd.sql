CREATE DATABASE IF NOT EXISTS adoptatupet;

USE adoptatupet;

CREATE TABLE IF NOT EXISTS usuario (
    idUsuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL UNIQUE,
    usuario VARCHAR(100) NOT NULL UNIQUE,
    localidad VARCHAR(120) NOT NULL,
    contrasena VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS animal (
    idAnimal INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    especie VARCHAR(50) NOT NULL,
    raza VARCHAR(100) NOT NULL,
    edad INT(2),
    localidad VARCHAR(120) NOT NULL,
    sexo VARCHAR(100),
    tamano DECIMAL(3,2),
    imagen LONGBLOB NOT NULL,
    idUsuario INT,
    FOREIGN KEY(idUsuario) REFERENCES usuario (idUsuario)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS favoritos (
    idAnimal INT,
    idUsuario INT,
    FOREIGN KEY(idUsuario) REFERENCES usuario (idUsuario)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    FOREIGN KEY(idAnimal) REFERENCES animal (idAnimal)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    PRIMARY KEY (idAnimal, idUsuario)
);

CREATE TABLE IF NOT EXISTS post (
    idPost INT PRIMARY KEY AUTO_INCREMENT,
    contenido VARCHAR(200) NOT NULL
);

CREATE TABLE IF NOT EXISTS comentario (
    idComentario INT PRIMARY KEY AUTO_INCREMENT,
    texto VARCHAR(200) NOT NULL,
    idUsuario INT,
    idPost INT,
    FOREIGN KEY(idUsuario) REFERENCES usuario (idUsuario)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    FOREIGN KEY(idPost) REFERENCES post (idPost)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS likepost (
    idUsuario INT,
    idPost INT,
    FOREIGN KEY(idUsuario) REFERENCES usuario (idUsuario)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    FOREIGN KEY(idPost) REFERENCES post (idPost)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    PRIMARY KEY (idUsuario, idPost)
);