-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Categoria (
idCategoria INT(11) PRIMARY KEY AUTO_INCREMENT,
tipo VARCHAR(20)
);

CREATE TABLE Postagem (
idPost INT(11) PRIMARY KEY AUTO_INCREMENT,
conteudo TEXT,
titulo VARCHAR(50),
aprovado BOOLEAN DEFAULT 0,
dataPostagem DATETIME,
idUser INT(11),
idCategoria INT(11),
FOREIGN KEY(idCategoria) REFERENCES Categoria (idCategoria)
);

CREATE TABLE Usuario (
idUser INT(11) PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(50),
email VARCHAR(50),
sobrenome VARCHAR(50),
admin BOOLEAN DEFAULT 0,
senha VARCHAR(10)
);

CREATE TABLE Comentario (
idComentario INT(11) PRIMARY KEY AUTO_INCREMENT,
conteudoComentario VARCHAR(256),
dataComentario DATETIME,
aprovado BOOLEAN DEFAULT 0,
idUser INT(11),
FOREIGN KEY(idUser) REFERENCES Usuario (idUser)
);

ALTER TABLE Postagem ADD FOREIGN KEY(idUser) REFERENCES Usuario (idUser);