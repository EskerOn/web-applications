<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Videoteca</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<div id="wrap">
  <div id="masthead">
    <h1>Videoteca</h1>
    <div id="menucontainer">
      <div id="menunav">
        <ul>
          <li><a href="indexCliente.php" class="current"><span>Inicio</span></a></li>
          <li><a href="consultasCliente.php"><span>Consultas</span></a></li>
          <li><a href="rentasCliente.php"><span>Rentas</span></a></li>
          <li><a href="index.php"><span>Salir</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="container">
    <div id="sidebar">
      <h2>Buscarpelicula</h2>
      <form action="buscar.php" method="post">
        <fieldset>
        <legend>Buscar pelicula</legend>
        <div> <span>
          <label for="txtsearch"> Titulo:<img src="images/magnify.png" alt="search" /></label>
          </span> <span>
          <input type="text" name="txtsearch" title="Text input: search" id="txtsearch" size="25" required />
          </span> </div>
		  <br />
		<input type="submit" name="enviar" value="Enviar"  />
        </fieldset>
		<br />
      </form>
      <p>Lista de Peliculas Recientes</p>
      <p>- Pelicula 1</p>
      <p>-Pelicula 2 </p>
    </div>
    <div id="content">
      <h2>Bienvenido.</h2>
      <p>Gracias por registrarte en VIDEOTECA.</p>
      <p>Ahora   tienes acceso a nuestro catalogo de  peliculas recientes de nivel nacional e internacional, podras encontrar los titulos de mayor exito.</p>
      <p>Renta la pelicula que sea de tu agrado. </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<div id="footer">Pagina CSS de www.free-css.com </div>
</body>
</html>
