<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Videoteca</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php session_start(); 
if(isset($_SESSION['kusuario']))
  {
    if ($_SESSION['tuser']==1) ;
	  else header("Location:index.php"); 
  }
else header("Location:index.php");  
?>
<div id="wrap">
  <div id="masthead">
    <h1>Videoteca</h1>
    <div id="menucontainer">
      <div id="menunav">
        <ul>
          <li><a href="indexCliente.php"><span>Inicio</span></a></li>
          <li><a href="consultasCliente.php" class="current" ><span>Consultas</span></a></li>
          <li><a href="rentasCliente.php"><span>Rentas</span></a></li>
          <li><a href="PeliculasRentadas.php"><span>Peliculas Rentadas</span></a></li>
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
    <h2>Consulta de peliculas en la videoteca </h2>
      <p>
	<?PHP
	   $link=mysqli_connect("localhost","root","");
	   mysqli_select_db($link,"videoteca");
	
	   $result=mysqli_query($link,"select * from pelicula");
	
	   echo "<table border='1'>";
	   echo "<TR><TD> Id_ Pelicula</TD><TD> Titulo </TD>
			 <TD> Director</TD><TD>Actor</TD><TD> Imagen </TD> </TR>";
	
	   while ($row=mysqli_fetch_array($result))
	   {
		  $id=$row['id_pelicula'];
		  $ti=$row['titulo'];
		  $di=$row['director'];
		  $ac=$row['actor'];
		  $im=$row['imagen'];
	
		  echo"<TR><TD>$id</TD><TD>$ti</TD><TD>$di</TD><TD>$ac</TD>
			   <TD>
			   <img src='misImagenes/$im' width='80' height='80'/> </A>
			   </TD> </TR>";  
	   }
	   mysqli_free_result($result); 
	   mysqli_close($link); 
	   echo"</table>";
	?>    
	  </p>
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
