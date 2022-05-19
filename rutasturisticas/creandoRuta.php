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
    <?php
    $ruta1 = $_REQUEST['ruta1'];
    $ruta2 = $_REQUEST['ruta2'];
    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];
    $im=$_FILES['archivo']['name'];
    $path = "img/".$im;
    copy($_FILES['archivo']['tmp_name'], $path);



    if ($ruta1==0){
      echo "<h2>Ruta: $nombre </h2>";
      echo "<p>Descripcion: $descripcion </p>";

      echo "<p>Agregar Puntos</p>";

      echo "<form action='agregaPuntos.php' method='post'>";
      echo "<select name='punto'>";
      $link=mysqli_connect("localhost","root","");
      mysqli_select_db($link,"rutasturisticas");
      $result=mysqli_query($link,"SELECT * FROM puntos");
      while($row=mysqli_fetch_array($result)){
        echo "<option value='".$row['id_punto']."'>".utf8_encode($row['nombre'])."</option>";
      }
      echo "</select>";
      echo "<br>";
      echo "<br>";
      echo "<input type='hidden' name='nombre' value='".$nombre."'>";
      echo "<input type='hidden' name='descripcion' value='".$descripcion."'>";
      echo "<input type='hidden' name='imagen' value='".$im."'>";
      echo "<input type='hidden' name='rutaid' value='0'>";
      echo "<input type='submit' value='Agregar'>";
      echo "</form>";


    }
    else{
      if ($ruta1==$ruta2){
        echo "<h1>No se puede combinar una ruta consigo misma</h1>";
      }
      else{
        echo "<h1>Combinando rutas</h1>";
      }
    }

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