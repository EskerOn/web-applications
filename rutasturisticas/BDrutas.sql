DROP DATABASE IF EXISTS rutasturisticas;
CREATE DATABASE rutasturisticas;
use rutasturisticas;

CREATE TABLE usuarios(
  id_user INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
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
  calificacion INT
);

CREATE TABLE rutapunto(
  id_rutapunto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_ruta INT NOT NULL,
  id_punto INT NOT NULL,
  FOREIGN KEY (id_ruta) REFERENCES rutas(id_ruta),
  FOREIGN KEY (id_punto) REFERENCES puntos(id_punto)
);

CREATE TABLE comentarios(
  id_comentario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  autor INT NOT NULL,
  ruta INT NOT NULL,
  FOREIGN KEY (autor) REFERENCES usuarios(id_user),
  FOREIGN KEY (ruta) REFERENCES rutas(id_ruta),
  comentario VARCHAR(500) NOT NULL
);

INSERT INTO usuarios (nombre, username, password, tipo, email) VALUES ('Juan perez', 'jperez', '1234', 1, 'jperez@mail.com');
INSERT INTO usuarios (nombre, username, password, tipo, email) VALUES ('Pedro rodriguez', 'prodriguez', '1234', 1, 'prodriguez@mail.com');
INSERT INTO usuarios (nombre, username, password, tipo, email) VALUES ('Juan gonzalez', 'jgonzalez', '1234', 1, 'jgonzalez@mail.com');
INSERT INTO usuarios (nombre, username, password, tipo, email) VALUES ('administrador', 'Admin', '1234', 0, 'contacto@rutas.com');

INSERT INTO puntos (nombre, descripcion, imagen) VALUES ('Atlixco, Puebla', 'Es conocida por ser la ciudad de las flores ya que alberga un clima agradable debido a su cercanía con el volcán Popocatépetl, por lo que la tierra en Atlixco es la ideal para cultivar una gran variedad de flores.', 'Atlixco.jpg');
INSERT INTO puntos (nombre, descripcion, imagen) VALUES ('Chignahuapan, Puebla', 'El lugar ideal para pasar un momento de relajación y en contacto con la naturaleza, son en las aguas termales, donde podrás encontrar diversión para toda la familia. Las aguas termales se encuentran rodeadas de montañas y una zona boscosa que nos regala hermosos paisajes.', 'Chignahuapan.jpg');
INSERT INTO puntos (nombre, descripcion, imagen) VALUES ('Cholula, Puebla', 'Uno de los atractivos más emblemáticos de Cholula, es la Gran Pirámide, y es la pirámide más grande de Mesoamérica. En donde podrás conectar con la magia de ese gran vestigio y a unos pasos, podrás encontrar el Santuario de Nuestra Señora de los Remedios.', 'Cholula.jpg');
INSERT INTO puntos (nombre, descripcion, imagen) VALUES ('Cuetzalan, Puebla', 'Una de las principales atracciones son las cafetaleras que se encuentran en la emblemática Reserva Azul, un lugar que no te puedes perder si eres amante del café.', 'Cuetzalan.jpg');
INSERT INTO puntos (nombre, descripcion, imagen) VALUES ('Zacatlán, Puebla', 'El nombre completo de este Pueblo Mágico es Zacatlán de las Manzanas, y es debido a su gran producción de manzana. Una de las bebidas características es la sidra artesanal, por lo que no te puedes ir de Zacatlán sin haberla probado.', 'Zacatlan.jpg');


INSERT INTO rutas (nombre, autor, descripcion, imagen, calificacion) VALUES ('Los 5 Pueblos Mágicos de Puebla que no te puedes perder', 1, 'El 5 de mayo, celebramos la legendaria Batalla de Puebla, un día importante y con mucho significado en la historia de México. Para celebrar como se debe, te platicaremos acerca de los 5 Pueblos Mágicos que no te puedes perder en tu siguiente visita a Puebla.', 'Ruta1.jpg', 85);

INSERT INTO rutapunto (id_ruta, id_punto) VALUES (1, 1);
INSERT INTO rutapunto (id_ruta, id_punto) VALUES (1, 2);
INSERT INTO rutapunto (id_ruta, id_punto) VALUES (1, 3);
INSERT INTO rutapunto (id_ruta, id_punto) VALUES (1, 4);
INSERT INTO rutapunto (id_ruta, id_punto) VALUES (1, 5);

INSERT INTO comentarios (autor, ruta, comentario) VALUES (2, 1, 'Este es un comentario de prueba');