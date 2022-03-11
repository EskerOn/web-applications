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
          <li><a href="indexADM.php"><span>Inicio</span></a></li>
          <li><a href="consultasADM.php"><span>Consultas</span></a></li>
          <li><a href="altas.php"class="current"><span>Altas</span></a></li>
		  <li><a href="bajas.php"><span>Bajas</span></a></li>
		  <li><a href="actualizacion.php"><span>Actualizacion</span></a></li>
          <li><a href="reportes.php"><span>Reportes</span></a></li>
          <li><a href="index.php"><span>Salir</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="container">
    <div id="sidebar">
      <h2>Buscar pelicula </h2>
      <form action="buscar.php" method="post">
        <fieldset>
        <legend>Buscar pelicula</legend>
        <div> <span>
          <label for="txtsearch"> t&Iacute;tulo:<img src="images/magnify.png" alt="search" /></label>
        </span>
          <p><span> 
		   
		   </span> <span>
		   
            <input type="text" name="txtsearch" title="Text input: search" id="txtsearch" size="25" />
			<input type="submit" name="enviar" value="Enviar"/>
            </span> </p>
          <p>Lista de peliculas Recientes</p>
          <p>-1</p>
          <p>-2 </p>
        </div>
        </fieldset>
      </form>
      </div>
    <div id="content">
		<h2>Alta</h2>
		<h2>Insertar nueva pelicula</h2>
    <form action="Agregado.php" method="POST" enctype="multipart/form-data">
    Titulo:
    <input type="text" name="tit" required>
    <br> <br>
    Director:
    <input type="text" name="dir" required>
    <br><br>
    Actor:
    <input type="text" name="act" required>
    <br><br>
    Selecciona el ranking de la pelicula:
    <select name="ran">
        <option value="50">50</option>
        <option value="55">55</option>
        <option value="60">60</option>
        <option value="65">65</option>
        <option value="70" selected>70</option>
        <option value="75">75</option>
        <option value="80">80</option>
        <option value="85">85</option>
        <option value="90">90</option>
        <option value="95">95</option>
        <option value="100">100</option>
    </select>
    <br><br>
    Imagen de la pelicula:
    <input type="file" name="archivo">
    <br><br>
    <input type="submit" name="enviar" value="Enviar">
    </form>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<div id="footer"> <a href="#">CSS de </a><a rel="nofollow noopener noreferrer" target="_blank" href="https://www.free-css.com/free-css-templates/page8/chesspiece-2">https://www.free-css.com/free-css-templates/page8/chesspiece-2</a></div>
</body>
</html>
