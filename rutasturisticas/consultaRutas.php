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
<title>Rutas</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="./styles/layout.css" type="text/css" />
</head>
<body id="top">
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
  <h1>Consulta rutas túrisitcas</h1>
    
    <p>Listas creadas por usuarios</p>
    <?PHP

	   $link=mysqli_connect("localhost","root","");
     mysqli_select_db($link,"rutasturisticas");


	   $result=mysqli_query($link,"SELECT * FROM rutas");
	
	   echo "<table border='1'>";
	   echo "<TR><TD> Nombre </TD>
			 <TD> Autor </TD><TD>Descripción</TD><TD> Imagen </TD> <TD> Calificación </TD> </TR>";
	
	   while ($row=mysqli_fetch_array($result))
	   {
		  $id=$row['id_ruta'];
		  $nombre=utf8_encode($row['nombre']);
		  $autor=$row['autor'];
      $result2=mysqli_query($link,"SELECT * FROM usuarios WHERE id_user='$autor'");
      $row2=mysqli_fetch_array($result2);
      $username=utf8_encode($row2['username']);
		  $desc=utf8_encode($row['descripcion']);
		  $im=$row['imagen'];
      $cal=$row['calificacion'];
	
      echo"<TR><TD>$nombre</TD><TD>$username</TD><TD>$desc</TD>
      <TD>
      <a href=detalleInternauta.php?id_ruta=$id>
      <img src='img/$im' width='150' height='150'/>
      </a>
      </TD> 
      <TD>$cal</TD>
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