<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Corporation
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Inicio</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="./styles/layout.css" type="text/css" />
</head>
<body id="top">
  <?php
  session_start(); 
  if(isset($_SESSION['usuario']))
    {
      if ($_SESSION['tuser']==1) ;
      else header("Location:index.php"); 
    }
  else header("Location:index.php");  
  ?>
<div class="wrapper col1">
  <div id="head">
    <h1><a href="index.php">Rutas t&uacute;risticas </a></h1>

    <div id="topnav">
    <ul>
        <li><a  href="index.php">Inicio</a></li>
        <li><a class="active" href="consultaRutas.php">Consultar rutas</a></li>
        <li><a  href="registrarse.php">Registarse</a></li>
		    <li><a  href="iniciarSesion.php">Iniciar sesion</a></li>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="submit" name="go" id="go" value="GO" />
          <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
        </fieldset>
      </form>
    </div>
  </div>
</div>
<div class="wrapper col2">
  <div id="breadcrumb">

  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <?PHP
	  $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"rutasturisticas");
    $rutaid=$_GET['id_ruta'];
    $result=mysqli_query($link,"SELECT * FROM rutas WHERE id_ruta='$rutaid'");
    $result2=mysqli_query($link,"SELECT * FROM rutapunto WHERE id_ruta='$rutaid'");

    while ($row=mysqli_fetch_array($result))
	   {
		  $id=$row['id_ruta'];
		  $nombre=utf8_encode($row['nombre']);
		  $autor=$row['autor'];
      $result3=mysqli_query($link,"SELECT * FROM usuarios WHERE id_user='$autor'");
      $row3=mysqli_fetch_array($result3);
      $username=utf8_encode($row3['username']);
		  $desc=utf8_encode($row['descripcion']);
		  $im=$row['imagen'];
      $cal=$row['calificacion'];
      echo "<h1>$nombre</h1>";
      echo "<p>Autor: $username</p>";
      echo "<p>Calificación: $cal</p>";
      echo "<p>Descripción: $desc</p>";
      echo "<img src='img/$im' width='300' height='300'/>";
	   }
     echo "<br><br><h1>Puntos de la ruta</h1>";
	
	   echo "<table border='1'>";
	   echo "<TR><TD> Nombre </TD>
			 <TD>Descripción</TD><TD> Imagen </TD> </TR>";
	
	   while ($row=mysqli_fetch_array($result2))
	   {
		  $idpunto=$row['id_punto'];
      $result3=mysqli_query($link,"SELECT * FROM puntos WHERE id_punto='$idpunto'");
      $row3=mysqli_fetch_array($result3);
      $puntonombre=utf8_encode($row3['nombre']);
      $puntosdesc=utf8_encode($row3['descripcion']);
      $puntosim=$row3['imagen'];

	
		  echo"<TR><TD>$puntonombre</TD><TD>$puntosdesc</TD>
			   <TD>
			   <img src='img/$puntosim' width='150' height='150'/> </A>
			   </TD> 
         </TR>";  
	   }
	   mysqli_free_result($result); 
	   mysqli_close($link); 
	   echo"</table>";
	?>    
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
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
<div class="wrapper col5">
  <div id="footer">
    <!-- End Contact Form -->
    <!-- End Company Details -->
<div id="copyright">
      <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
      <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
      <br class="clear" />
    </div>
    <div class="clear"></div>
  </div>
</div>
</body>
</html>