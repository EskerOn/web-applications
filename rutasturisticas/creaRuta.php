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
        <li><a  href="indexUsuario.php">Inicio</a></li>
        <li><a href="consultaUser.php">Consultar rutas</a></li>
        <li><a class="active" href="#">Mis Rutas</a>
          <ul>
            <li><a href="creaRuta.php">Crear ruta</a></li>
            <li><a href="modificaRutaUser.php">Modificar ruta</a></li>
            <li><a href="eliminaRutaUser.php">Eliminar ruta</a></li>
          </ul>
        </li>
        <li><a  href="perfil.php">Mi Perfil</a></li>
        <li><a  href="salir.php">salir</a></li>
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
    <h1>Crea tu ruta </h1>


    <p>Crear Ruta</p>
    <form action="creandoRuta.php" method="POST" enctype="multipart/form-data">
    Nombre de la ruta:
    <input type="text" name="nombre" size="50" required>
    <br>
    <br>
    Descripcion:
    <br>
    <br>
    <input type="text" name="descripcion" size="150" required>
    <br>
    <br>
<input type='hidden' name='ruta1' value='0'>
<input type='hidden' name='ruta2' value='0'>


    <br>
    <br>
    Imagen:
    <input type="file" name="archivo">
    <br><br>
    <input type="submit" name="enviar" value="Continuar">
    </form>
    <br>
    <br>
    <br>
    <h1>Crear Punto Nuevo</h1>
    <form action="creaPunto.php">
    Los puntos disponibles son:
    <br>
    <br>
    <?php
    echo "<select name='punto'>";
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"rutasturisticas");
    $result=mysqli_query($link,"SELECT * FROM puntos");
    while($row=mysqli_fetch_array($result)){
      echo "<option value='".$row['id']."'>".utf8_encode($row['nombre'])."</option>";
    }
    echo "</select>";
    ?>
    <br>
    <br>


    <input type="submit" value="Crear Punto" />
    </form>   

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