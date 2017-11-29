--
-- Base de datos: `rutasturisticas`
--
CREATE DATABASE IF NOT EXISTS `RutasTuristicas`;
use rutasturisticas;

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(4) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `ubicacion` (
  `idUbicacion`  int(4)NOT NULL AUTO_INCREMENT,
  `latitud` varchar(50)DEFAULT NULL,
  `longitud` varchar(50) DEFAULT NULL,
  `altitud` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUbicacion`)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `aceptacion` (
  `idAceptacion`  int(4) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`idAceptacion`)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `lugarTuristico` (
  `idLugar` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) DEFAULT NULL,
  `descripcion` varchar(70) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `idCategoria` int(4) NOT NULL,
  `idUbicacion` int(4) NOT NULL,
  PRIMARY KEY (`idLugar`),
  FOREIGN KEY (idCategoria) REFERENCES categoria(idCategoria),
  FOREIGN KEY (idUbicacion) REFERENCES ubicacion(idUbicacion)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `foto` (
  `idFoto`  int(4)NOT NULL AUTO_INCREMENT,
  `foto` longblob DEFAULT NULL,
  `idLugar` int(4) NOT NULL,
  PRIMARY KEY (`idFoto`),
  FOREIGN KEY (idLugar) REFERENCES lugarTuristico(idLugar)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `votosAceptacion` (
  `idVotosAceptacion`int(4) NOT NULL AUTO_INCREMENT,
  `idAceptacion`int(4) NOT NULL,
  `idLugar`int(4) NOT NULL,
  PRIMARY KEY (`idVotosAceptacion`),
  FOREIGN KEY (idAceptacion) REFERENCES aceptacion(idAceptacion),
  FOREIGN KEY (idLugar) REFERENCES lugarTuristico(idLugar)
)ENGINE=InnoDB;

  
  
  
  