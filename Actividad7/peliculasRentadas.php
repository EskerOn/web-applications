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
          <li><a href="consultasCliente.php" ><span>Consultas</span></a></li>
          <li><a href="rentasCliente.php"><span>Rentas</span></a></li>
          <li><a href="PeliculasRentadas.php" class="current"><span>Peliculas Rentadas</span></a></li>
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
      <h2>Peliculas rentadas. </h2>
      <p>
      <?PHP
        $link=mysqli_connect("localhost","root","");
        mysqli_select_db($link,"videoteca");
        $idc=$_SESSION['ID'] ;
        $result=mysqli_query($link,"select * from rentas where id_cliente='$idc'");
      
        echo "<table border='1'>";
        echo "<TR><TD> Titulo</TD><TD> Fecha de renta </TD>
          <TD> Fecha de entrega </TD><TD> Imagen </TD> </TR>";
        
        while ($row=mysqli_fetch_array($result))
        {
          $id=$row['id_pelicula'];
          $result_pelicula=mysqli_query($link,"select * from pelicula where id_pelicula='".$id."'");
          $row_pelicula=mysqli_fetch_array($result_pelicula);
          $title=$row_pelicula['titulo'];
          $inicio=$row['fecha_inicio'];
          $fin=$row['fecha_fin'];
          $im=$row_pelicula['imagen'];
      
          echo"<TR><TD>$title</TD><TD>$inicio</TD><TD>$fin</TD>
            <TD>
            <img src='misImagenes/$im' width='80' height='80'/> </A>
            </TD> </TR>";  
            mysqli_free_result($result_pelicula); 
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
