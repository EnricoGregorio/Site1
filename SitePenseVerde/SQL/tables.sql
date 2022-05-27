CREATE DATABASE semma;

USE semma;

CREATE TABLE Gestor(
    id INT AUTO_INCREMENT,
    username VARCHAR(64) NOT NULL UNIQUE,
    pass VARCHAR(25) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE Posts(
    id INT AUTO_INCREMENT,
    dtpost VARCHAR(10) NOT NULL,
    titulo VARCHAR(64) NOT NULL UNIQUE,
    -- img VARCHAR(20),
    nomearquivo VARCHAR(69) NOT NULL UNIQUE,
    resumo VARCHAR(250) NOT NULL,
    PRIMARY KEY(id)
);

-- CREATE TABLE Usuarios(
--     id INT AUTO_INCREMENT,
--     nome VARCHAR(60) NOT NULL,
--     email VARCHAR(30) NOT NULL UNIQUE,
--     senha VARCHAR(20) NOT NULL,
--     PRIMARY KEY(id)
-- );

CREATE TABLE DatasColetas(
    id INT AUTO_INCREMENT,
    dtcoleta DATE NOT NULL,
    hrcoleta TIME NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
);

-- CREATE TABLE Enderecos(
--     id INT AUTO_INCREMENT,
--     cep VARCHAR(9) NOT NULL,
--     rua VARCHAR(100) NOT NULL,
--     numcasa VARCHAR(5) NOT NULL,
--     bairro VARCHAR(100) NOT NULL,
--     cidade VARCHAR(100) NOT NULL,
--     uf VARCHAR(2) NOT NULL,
--     id_usuario INT NOT NULL UNIQUE,
--     PRIMARY KEY(id),
--     FOREIGN KEY(id_usuario) REFERENCES Usuarios(id)
-- );