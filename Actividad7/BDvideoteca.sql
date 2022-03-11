
CREATE DATABASE videoteca;
use videoteca;

CREATE TABLE pelicula(
  id_pelicula INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(64) NOT NULL,
  director VARCHAR(128) NOT NULL,
  actor VARCHAR(128) NOT NULL
);


CREATE TABLE clientes(
  id_cliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cliente VARCHAR(64) NOT NULL
);

CREATE TABLE rentas(
  fecha_inicio date NOT NULL,
  fecha_fin date NOT NULL,
  id_cliente INT NOT NULL, 
  id_pelicula INT NOT NULL,
  FOREIGN KEY(id_cliente) REFERENCES clientes(id_cliente),
  FOREIGN KEY(id_pelicula) REFERENCES pelicula(id_pelicula), 
  PRIMARY KEY(id_cliente,id_pelicula, fecha_inicio)
);

ALTER TABLE clientes ADD COLUMN year INT(4);

INSERT INTO pelicula (titulo, director, actor) VALUES( 'Blade Runner', 'Ridley Scott', 'Harrison Ford' ); 
INSERT INTO pelicula (titulo, director, actor) VALUES( 'Alien', 'Ridley Scott', 'Sigourney Weaver' ); 
INSERT INTO pelicula (titulo, director, actor) VALUES( 'Doce monos', 'Terry Gilliam', 'Bruce Willis' ); 
INSERT INTO pelicula (titulo, director, actor) VALUES( 'Contact', 'Robert Zemeckis', 'Jodie Foster' ); 
INSERT INTO pelicula (titulo, director, actor) VALUES( 'Tron', 'Steven Lisberger', 'Jeff Bridges' ); 
INSERT INTO pelicula (titulo, director, actor) VALUES( 'La guerra de las galaxias', 'George Lucas', 'Harrison Ford' ); 

INSERT INTO clientes (cliente, year) VALUES( 'Jorge Perez', 1980); 
INSERT INTO clientes (cliente, year) VALUES( 'Juan Dominguez', 1950);
INSERT INTO clientes (cliente, year) VALUES( 'Jose Luis Lopez', 1967);

INSERT INTO rentas (id_cliente, id_pelicula, fecha_inicio,fecha_fin) values(3,6,"2022/02/15","2022/02/19"); 

INSERT INTO rentas (id_cliente, id_pelicula, fecha_inicio,fecha_fin) 
select clientes.id_cliente,pelicula.id_pelicula,CURDATE(),CURDATE()+2 
from clientes,pelicula where clientes.cliente='Jorge Perez' and pelicula.titulo='Tron'; 

INSERT INTO rentas (id_cliente, id_pelicula, fecha_inicio,fecha_fin) 
select clientes.id_cliente,pelicula.id_pelicula,CURDATE(),CURDATE()+2 
from clientes,pelicula where clientes.cliente='Jorge Perez' and pelicula.titulo='Doce monos';

INSERT INTO rentas (id_cliente, id_pelicula, fecha_inicio,fecha_fin) 
select clientes.id_cliente,pelicula.id_pelicula,CURDATE(),CURDATE()+2 
from clientes,pelicula where clientes.cliente='Jorge Perez' and pelicula.titulo='Contact';

INSERT INTO rentas (id_cliente, id_pelicula, fecha_inicio,fecha_fin) 
select clientes.id_cliente,pelicula.id_pelicula,CURDATE(),CURDATE()+2 
from clientes,pelicula where clientes.cliente='Juan Dominguez' and pelicula.titulo='Contact';


 ALTER TABLE pelicula ADD imagen varchar(64);
 UPDATE pelicula SET imagen="imagen1.jpg" where id_pelicula=1;
 UPDATE pelicula SET imagen="imagen2.jpg" where id_pelicula=2;
 UPDATE pelicula SET imagen="imagen3.jpg" where id_pelicula=3;
 UPDATE pelicula SET imagen="imagen4.jpg" where id_pelicula=4;
 UPDATE pelicula SET imagen="imagen5.jpg" where id_pelicula=5;
 UPDATE pelicula SET imagen="imagen6.jpg" where id_pelicula=6;

 ALTER TABLE pelicula ADD ranking int(3); 
 UPDATE pelicula SET ranking=50 where id_pelicula=1;
 UPDATE pelicula SET ranking=45 where id_pelicula=2;
 UPDATE pelicula SET ranking=80 where id_pelicula=3;
 UPDATE pelicula SET ranking=70 where id_pelicula=4;
 UPDATE pelicula SET ranking=50 where id_pelicula=5;
 UPDATE pelicula SET ranking=85 where id_pelicula=6;

use videoteca;
ALTER TABLE clientes ADD COLUMN usuario VARCHAR(32);
ALTER TABLE clientes ADD COLUMN password VARCHAR(32);
ALTER TABLE clientes ADD COLUMN tipo INT(1);

UPDATE clientes SET usuario="jperez", password="123", tipo=1 where id_cliente=1;
UPDATE clientes SET usuario="jdominguez", password="124", tipo=1 where id_cliente=2;
UPDATE clientes SET usuario="jlopez", password="125", tipo=1 where id_cliente=3;

INSERT INTO clientes (cliente, year, usuario, password, tipo) VALUES( 'Administrador', 2022, 'adm', '1234', 0);
