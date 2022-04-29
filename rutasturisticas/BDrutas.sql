DROP DATABASE IF EXISTS rutasturisticas;
CREATE DATABASE rutasturisticas;
use rutasturisticas;

CREATE TABLE usuarios(
  id_user INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  tipo INT NOT NULL
);

CREATE TABLE puntos(
  id_punto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(70) NOT NULL,
  descripcion VARCHAR(500) NOT NULL,
  imagen VARCHAR(50) NOT NULL
);

CREATE TABLE rutas(
  id_ruta INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(70) NOT NULL,
  autor INT NOT NULL,
  FOREIGN KEY (autor) REFERENCES usuarios(id_user),
  descripcion VARCHAR(500) NOT NULL,
  imagen VARCHAR(50) NOT NULL,
  punto_uno INT,
  punto_dos INT,
  punto_tres INT,
  punto_cuatro INT,
  punto_cinco INT,
  punto_seis INT,
  punto_siete INT,
  punto_ocho INT,
  punto_nueve INT,
  punto_diez INT,
  FOREIGN KEY (punto_uno) REFERENCES puntos(id_punto),
  FOREIGN KEY (punto_dos) REFERENCES puntos(id_punto),
  FOREIGN KEY (punto_tres) REFERENCES puntos(id_punto),
  FOREIGN KEY (punto_cuatro) REFERENCES puntos(id_punto),
  FOREIGN KEY (punto_cinco) REFERENCES puntos(id_punto),
  FOREIGN KEY (punto_seis) REFERENCES puntos(id_punto),
  FOREIGN KEY (punto_siete) REFERENCES puntos(id_punto),
  FOREIGN KEY (punto_ocho) REFERENCES puntos(id_punto),
  FOREIGN KEY (punto_nueve) REFERENCES puntos(id_punto),
  FOREIGN KEY (punto_diez) REFERENCES puntos(id_punto),
  calificacion INT
);

CREATE TABLE comentarios(
  id_comentario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  autor INT NOT NULL,
  ruta INT NOT NULL,
  FOREIGN KEY (autor) REFERENCES usuarios(id_user),
  FOREIGN KEY (ruta) REFERENCES rutas(id_ruta),
  comentario VARCHAR(500) NOT NULL
);

INSERT INTO usuarios (nombre, username, password, tipo) VALUES ('Juan perez', 'jperez', '1234', 1);
INSERT INTO usuarios (nombre, username, password, tipo) VALUES ('Pedro rodriguez', 'prodriguez', '1234', 1);
INSERT INTO usuarios (nombre, username, password, tipo) VALUES ('Juan gonzalez', 'jgonzalez', '1234', 1);
INSERT INTO usuarios (nombre, username, password, tipo) VALUES ('administrador', 'Admin', '1234', 0);

INSERT INTO puntos (nombre, descripcion, imagen) VALUES ('Atlixco, Puebla', 'Es conocida por ser la ciudad de las flores ya que alberga un clima agradable debido a su cercanía con el volcán Popocatépetl, por lo que la tierra en Atlixco es la ideal para cultivar una gran variedad de flores.', 'Atlixco.jpg');
INSERT INTO puntos (nombre, descripcion, imagen) VALUES ('Chignahuapan, Puebla', 'El lugar ideal para pasar un momento de relajación y en contacto con la naturaleza, son en las aguas termales, donde podrás encontrar diversión para toda la familia. Las aguas termales se encuentran rodeadas de montañas y una zona boscosa que nos regala hermosos paisajes.', 'Chignahuapan.jpg');
INSERT INTO puntos (nombre, descripcion, imagen) VALUES ('Cholula, Puebla', 'Uno de los atractivos más emblemáticos de Cholula, es la Gran Pirámide, y es la pirámide más grande de Mesoamérica. En donde podrás conectar con la magia de ese gran vestigio y a unos pasos, podrás encontrar el Santuario de Nuestra Señora de los Remedios.', 'Cholula.jpg');
INSERT INTO puntos (nombre, descripcion, imagen) VALUES ('Cuetzalan, Puebla', 'Una de las principales atracciones son las cafetaleras que se encuentran en la emblemática Reserva Azul, un lugar que no te puedes perder si eres amante del café.', 'Cuetzalan.jpg');
INSERT INTO puntos (nombre, descripcion, imagen) VALUES ('Zacatlán, Puebla', 'El nombre completo de este Pueblo Mágico es Zacatlán de las Manzanas, y es debido a su gran producción de manzana. Una de las bebidas características es la sidra artesanal, por lo que no te puedes ir de Zacatlán sin haberla probado.', 'Zacatlan.jpg');

INSERT INTO rutas (nombre, autor, descripcion, imagen, punto_uno, punto_dos, punto_tres, punto_cuatro, punto_cinco, calificacion) VALUES ('Los 5 Pueblos Mágicos de Puebla que no te puedes perder', 1, 'El 5 de mayo, celebramos la legendaria Batalla de Puebla, un día importante y con mucho significado en la historia de México. Para celebrar como se debe, te platicaremos acerca de los 5 Pueblos Mágicos que no te puedes perder en tu siguiente visita a Puebla.', 'Ruta1.jpg', 1, 2, 3, 4, 5, 85);

INSERT INTO comentarios (autor, ruta, comentario) VALUES (2, 1, 'Este es un comentario de prueba');