DROP DATABASE IF EXISTS calificaciones;
CREATE DATABASE calificaciones;
use calificaciones;

CREATE TABLE alumnos(
  id_alumno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  foto VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL
);

CREATE TABLE materias(
  id_materia INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL
);

CREATE TABLE kardex(
  id_kardex INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_alumno INT NOT NULL,
  id_materia INT NOT NULL,
  calificacion INT NOT NULL,
  FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno),
  FOREIGN KEY (id_materia) REFERENCES materias(id_materia)
);


INSERT INTO alumnos (nombre, foto, email) VALUES ('Juan Perez', 'jperez.jpg', 'jperez@gmail.com');
INSERT INTO alumnos (nombre, foto, email) VALUES ('Pedro Rodriguez', 'prodriguez.jpg', 'prodriguez@gmail.com');
INSERT INTO alumnos (nombre, foto, email) VALUES ('Maria Lopez', 'mlopez.jpg', 'mlopez@gmail.com');

INSERT INTO materias (nombre) VALUES ('Matematicas');
INSERT INTO materias (nombre) VALUES ('Fisica');
INSERT INTO materias (nombre) VALUES ('Quimica');
INSERT INTO materias (nombre) VALUES ('Biologia');
INSERT INTO materias (nombre) VALUES ('Historia');
INSERT INTO materias (nombre) VALUES ('Geografia');
INSERT INTO materias (nombre) VALUES ('Ingles');
INSERT INTO materias (nombre) VALUES ('Sociologia');

INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (1, 1, 6);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (1, 7, 5);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (1, 6, 4);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (1, 4, 7);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (1, 5, 7);

INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (2, 1, 5);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (2, 2, 7);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (2, 6, 5);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (2, 4, 6);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (2, 7, 5);

INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (3, 1, 9);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (3, 2, 8);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (3, 3, 8);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (3, 4, 7);
INSERT INTO kardex (id_alumno, id_materia, calificacion) VALUES (3, 5, 6);
