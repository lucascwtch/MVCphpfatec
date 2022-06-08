CREATE DATABASE jogaria DEFAULT CHARACTER SET utf8;
USE jogaria;

CREATE TABLE jogos(
    nome VARCHAR(255) NOT NULL,
   	programador VARCHAR(255),
    quantidade_niveis INT NOT NULL,
    preco VARCHAR(255) NOT NULL,
    flag TINYINT(1) NULL DEFAULT 0,
    data DATE NOT NULL,
    PRIMARY KEY(nome)
    );
    