DROP DATABASE IF EXISTS TransCopacabana;
CREATE DATABASE TransCopacabana;
USE TransCopacabana;

CREATE TABLE rol(
idRol INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL 
)ENGINE=InnoDB;
INSERT INTO rol
VALUES(NULL,'Administrador');

CREATE TABLE Personal(
idEmpleado INT AUTO_INCREMENT PRIMARY KEY,
idRol INT NOT NULL,
ci VARCHAR(15) UNIQUE,
primerNombre VARCHAR(15) NOT NULL, 
segundoNombre VARCHAR(15), 
apellidoPaterno VARCHAR(15) NOT NULL, 
apellidoMaterno VARCHAR(15) NULL,
telefono INT NOT NULL,
genero ENUM('F','M') NOT NULL,
fechaNacimiento DATE NOT NULL,
usuario VARCHAR(30) NULL,
contrasenia VARCHAR(30) NULL,
activo bool NOT NULL,
FOREIGN KEY(idRol) REFERENCES rol(idRol)ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

INSERT INTO Personal
VALUES(NULL,1,'12345','Luis','Miguel','Lima','Vidal',67293829,'M','1999-02-04','llima','12345',TRUE);

CREATE TABLE ruta(
idRutas INT AUTO_INCREMENT PRIMARY KEY,
salida VARCHAR(30) NOT NULL,
llegada VARCHAR(30) NOT NULL 
)ENGINE=InnoDB;

INSERT INTO ruta
VALUES(NULL,'Cochabamba','Tarija');


CREATE TABLE bus(
idBus INT AUTO_INCREMENT PRIMARY KEY,
nPlaca VARCHAR(30) NOT NULL,
modelo VARCHAR(30) NOT NULL,
tipoBus VARCHAR(30) NOT NULL
)ENGINE=InnoDB;

INSERT INTO bus
VALUES(NULL,'852PHD','NIBOL','Cama');

CREATE TABLE asignarRutaBus(
idAsignarRutasBus INT AUTO_INCREMENT PRIMARY KEY,
idRutas INT NOT NULL,
idBus INT NOT NULL,
horaSalida TIME NOT NULL,
precio INT NOT NULL,
FOREIGN KEY(idRutas) REFERENCES ruta(idRutas)ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY(idBus) REFERENCES bus(idBus)ON UPDATE CASCADE ON DELETE CASCADE
)ENGINE=InnoDB;

INSERT INTO asignarRutaBus
VALUES(NULL,1,1,'21:30:00',120);


-- Consultas de Prueba
SELECT idRutas , CONCAT_WS('-',salida,llegada) as Ruta
from ruta
order by salida;



SELECT * FROM ruta WHERE salida = 'Cochabamba'  and llegada='Tarija';
