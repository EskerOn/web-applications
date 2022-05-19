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
  <h1>Modifica ruta </h1>
<?PHP
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"rutasturisticas");
  $rutaid=$_GET['id_ruta'];

  $usuario = $_SESSION['ID'];
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"rutasturisticas");
  echo "Agregar puntos";
  echo "<br>";
  echo "<br>";
  echo "<form action='agregaPuntos.php' method='post'>";
      echo "<select name='punto'>";
      $link=mysqli_connect("localhost","root","");
      mysqli_select_db($link,"rutasturisticas");
      $result=mysqli_query($link,"SELECT * FROM puntos");
      #mostrar los puntosque no estan en la ruta
      while($row=mysqli_fetch_array($result)){
        $result2=mysqli_query($link,"SELECT * FROM rutapunto WHERE id_ruta=$rutaid AND id_punto=$row[id_punto]");
        if(mysqli_num_rows($result2)==0){
          echo "<option value='$row[id_punto]'>".utf8_encode($row['nombre'])."</option>";
        }
        else{
          $row2=mysqli_fetch_array($result2);
          echo "<option value='$row[id_punto]' disabled>".utf8_encode($row['nombre'])."</option>";
        }

        
      }
      echo "</select>";


  echo "<input type='hidden' name='nombre' value=''>";
  echo "<input type='hidden' name='descripcion' value=''>";
  echo "<input type='hidden' name='imagen' value=''>";
  echo "<input type='hidden' name='rutaid' value='$rutaid'>";
  echo "<input type='submit' value='Agregar'>";
  echo "</form>";
  echo "<br>";
  echo "<br>";


  echo "Quitar puntos";
  echo "<br>";
  echo "<br>";
  echo "<form action='quitaPuntos.php' method='post'>";
      echo "<select name='punto'>";
      $result=mysqli_query($link,"SELECT * FROM rutapunto WHERE id_ruta=$rutaid");
      while($row=mysqli_fetch_array($result)){
        $result2=mysqli_query($link,"SELECT * FROM puntos WHERE id_punto=$row[id_punto]");
        $row2=mysqli_fetch_array($result2);
        echo "<option value='$row2[id_punto]'>".utf8_encode($row2['nombre'])."</option>";
      }
      #mostrar los puntosque no estan en la ruta

  echo "<input type='hidden' name='rutaid' value='$rutaid'>";

  echo "<input type='submit' value='Quitar Puntos'>";
  echo "</form>";
  echo "<br>";
  echo "<br>";
  echo "Modificar informacion";
  echo "<form action='modificaInfo.php' method='post'>";
  echo "<input type='hidden' name='rutaid' value='$rutaid'>";
  echo "<br>";
  echo "<input type='submit' value='Modificar Informacion'>";
  echo "</form>";

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