<?php 
$rutaid = $_REQUEST['id_ruta'];
$comment = $_REQUEST['comentario'];
$autor = $_REQUEST['autor'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"rutasturisticas");

$sql="insert into comentarios (ruta, comentario, autor) values ($rutaid, '$comment', '$autor')";
$result=mysqli_query($link,$sql);
session_start(); 
  if(isset($_SESSION['usuario']))
    {
      if ($_SESSION['tuser']==0)
      {
        header("Location: detalleAdm.php?id_ruta=$rutaid");
      }
      else
      {
        header("Location: detalleUser.php?id_ruta=$rutaid");
      }
    }
    else
        {
        header("Location: index.php");
        }
?>
