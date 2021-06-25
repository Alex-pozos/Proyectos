create database if not exists bd1;

use bd1;

CREATE TABLE if not exists articulos (
  codigo int AUTO_INCREMENT,
  descripcion varchar(50),
  precio float,
  PRIMARY KEY (codigo)
)engine = InnoDB;
