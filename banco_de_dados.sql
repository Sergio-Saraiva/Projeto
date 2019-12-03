CREATE DATABASE forum;

use forum;

CREATE TABLE planetas
(
  id INT NOT NULL AUTO_INCREMENT,
  
  nome VARCHAR(50) NOT NULL,
  sistema VARCHAR(50) NOT NULL,
  tamanho VARCHAR(50) NOT NULL,
  tipo VARCHAR(50) NOT NULL,
  nseresvivos VARCHAR(50) NOT NULL,
  coloracao VARCHAR(50) NOT NULL,
  distancia VARCHAR(50) NOT NULL,
  foto VARCHAR(100),
  PRIMARY KEY(id)
);

