DROP DATABASE IF EXISTS votosDB; 
CREATE DATABASE votosDB;

USE votosDB;
DROP TABLE IF EXISTS padronelectoral;
CREATE TABLE padronelectoral(
    id_persona INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(64) NOT NULL,
    estado VARCHAR(64) NOT NULL,
    municipio VARCHAR(64) NOT NULL,
    fecha_nac date NOT NULL
);

DROP TABLE IF EXISTS partidos;
CREATE TABLE partidos(
    id_partido INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_partido VARCHAR(64) NOT NULL,
    siglas VARCHAR(64) NOT NULL,
    imagen VARCHAR(64) NOT NULL
);

DROP TABLE IF EXISTS votos;
CREATE TABLE votos(
    id_voto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fecha_eleccion date NOT NULL,
    id_persona INT NOT NULL,
    id_partido INT NOT NULL,
    FOREIGN KEY(id_persona) REFERENCES padronElectoral(id_persona) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(id_partido) REFERENCES partidos(id_partido) ON DELETE CASCADE ON UPDATE CASCADE
);


INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Juan Garcia', 'Puebla', 'Puebla', '1983-03-02');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Ana Hernandez', 'CDMX', 'Cuajimalpa', '1990-05-04');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Pedro Perez', 'Veracruz', 'Xalapa', '1985-10-07');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Juan Gonzalez', 'Nuevo Leon', 'Monterrey', '1979-07-10');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Juan Tapia', 'Morelos', 'Cuernavaca', '1991-11-12');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Lucia Jimenez', 'Puebla', 'Puebla', '1984-12-15');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Gabriel Ramirez', 'Veracruz', 'Xalapa', '1987-01-18');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Guadalupe Lopez', 'Nuevo Leon', 'Monterrey', '1992-02-19');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Carlos santos', 'Gerrero', 'Acapulco', '1986-03-20');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Gustavo Dominguez', 'Sonora', 'Hermosillo', '1993-04-21');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Ana Maria', 'Sinaloa', 'Culiacan', '1989-05-22');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Diego Martinez', 'Jalisco', 'Guadalajara', '1985-06-23');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Eduardo Lopez', 'Michoacan', 'Morelia', '1982-07-24');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Fernando Ibarra', 'Quintana Roo', 'Cancun', '1983-08-25');
INSERT INTO padronelectoral (nombre, estado, municipio, fecha_nac) VALUES( 'Luis Castillo', 'Baja California', 'Mexicali', '1990-09-26');



INSERT INTO partidos (nombre_partido, siglas, imagen) VALUES( 'Partido Accion Nacional', 'PAN', 'img/pan.png');
INSERT INTO partidos (nombre_partido, siglas, imagen) VALUES( 'Partido Revolucionario Institucional', 'PRI', 'img/pri.png');
INSERT INTO partidos (nombre_partido, siglas, imagen) VALUES( 'Partido de la Revolucion Democratica', 'PRD', 'img/prd.png');
INSERT INTO partidos (nombre_partido, siglas, imagen) VALUES( 'Partido del Trabajo', 'PT', 'img/pt.png');
INSERT INTO partidos (nombre_partido, siglas, imagen) VALUES( 'Partido verde ecologista de Mexico', 'PVE', 'img/pve.png');
INSERT INTO partidos (nombre_partido, siglas, imagen) VALUES( 'Movimiento Ciudadano', 'MC', 'img/mc.png');
INSERT INTO partidos (nombre_partido, siglas, imagen) VALUES( 'Movimiento Regeneracion Nacional', 'Morena', 'img/morena.png');


-- Ejemploinsertar voto: INSERT INTO votos (fecha_eleccion, id_persona, id_partido) VALUES( '2018-01-01', 1, 1);



