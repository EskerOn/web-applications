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
          <li><a href="indexCliente.php" ><span>Inicio</span></a></li>
          <li><a href="consultasCliente.php" ><span>Consultas</span></a></li>
          <li><a href="rentas.php" class="current"><span>Rentas</span></a></li>
          <li><a href="PeliculasRentadas.php"><span>Peliculas Rentadas</span></a></li>
          <li><a href="salir.php"><span>Salir</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="container">
    <div id="sidebar">
      <h2>Buscar pelicula</h2>
      <form action="buscar.php" method="post">
        <fieldset>
        <legend>Buscar pel&iacute;cula</legend>
        <div> <span>
          <label for="txtsearch"> T&iacute;tulo: <img src="images/magnify.png" alt="search" /></label>
          </span> <span>
          <input type="text" name="txtsearch" title="Text input: search" id="txtsearch" size="25" required />
          </span> </div>
		  <bR />
		<input type="submit" name="enviar" value=" Enviar "  />
        </fieldset>
		<br />
      </form>
      <p>Lista de Peliculas Recienctes</p>
      <p>- Pelicula 1</p>
      <p>- Pelicula 2  </p>
    </div>
    <div id="content">
      <h2> Pelicula Rentada con &eacutexito</h2>
      <p>
	  <?PHP
   $link=mysqli_connect("localhost","root","");
   mysqli_select_db($link,"videoteca");
   
   $id=$_REQUEST['pelicula'];
   $idc=$_SESSION['ID'];

   mysqli_query($link,"insert into rentas (id_cliente, id_pelicula, fecha_inicio, fecha_fin) values ($idc, $id,CURDATE(),CURDATE()+2)");
   
    $NewDate=Date('d-m-y', strtotime('+1 days'));
   echo "<br>Fecha de entrega: $NewDate <br>";
  
    
   mysqli_close($link); 
  ?>
	  
	  
	  
	  </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<div id="footer"><br/> 
  P&aacute;gina CSS de www.free-css.com</div>
</body>
</html>
