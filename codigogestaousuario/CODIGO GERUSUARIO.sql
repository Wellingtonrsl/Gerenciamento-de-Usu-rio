create database gerusuario;

create table gerusuario.usuario (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  nickname VARCHAR(50) NOT NULL,
  telefone VARCHAR(15) NOT NULL,
  cep VARCHAR(15) NOT NULL,
  rua VARCHAR(50) NOT NULL,
  numero INT NOT NULL,
  complemento VARCHAR(50) DEFAULT NULL,
  bairro VARCHAR(50) NOT NULL,
  cidade VARCHAR(50) NOT NULL,
  estado VARCHAR(50) NOT NULL
  );