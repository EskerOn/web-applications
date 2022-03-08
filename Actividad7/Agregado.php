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
          <li><a href="altaBaja.php"class="current"><span>Alta/Baja/Actualizacion</span></a></li>
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
      <h2>insertar nueva pelicula</h2>
    <hr>
    <?php
    $ti=$_REQUEST['tit'];
    $dir=$_REQUEST['dir'];
    $act=$_REQUEST['act'];
    $ran=$_REQUEST['ran'];
    $im=$_FILES['archivo']['name'];

    echo "Titulo: $ti <br>";
    echo "Director: $dir <br>";
    echo "Actor: $act <br>";
    echo "Ranking: $ran <br>";
    echo "Nombre Imagen: $im <br>";

    $ruta = "misImagenes/".$im;
    copy($_FILES['archivo']['tmp_name'], $ruta);
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "videoteca");
    $sql = "insert into pelicula(titulo, director, actor, ranking, imagen) values ('$ti', '$dir', '$act', '$ran', '$im')";
    mysqli_query($link, $sql);
    ?>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<div id="footer"> <a href="#">CSS de </a><a rel="nofollow noopener noreferrer" target="_blank" href="https://www.free-css.com/free-css-templates/page8/chesspiece-2">https://www.free-css.com/free-css-templates/page8/chesspiece-2</a></div>
</body>
</html>
