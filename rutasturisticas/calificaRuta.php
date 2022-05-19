<?php 
$rutaid = $_REQUEST['id_ruta'];
$cal = $_REQUEST['calificacion'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"rutasturisticas");
$sql="select * from rutas where id_ruta=$rutaid";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result);
$cal=($row['calificacion']+$cal)/2;
$sql="update rutas set calificacion=$cal where id_ruta=$rutaid";
$result=mysqli_query($link,$sql);
session_start(); 
  if(isset($_SESSION['usuario']))
    {
      if ($_SESSION['tuser']==0)
      {
        header("Location: consultaRutasAdm.php");
      }
      else
      {
        header("Location: consultaUser.php");
      }
    }
    else
        {
        header("Location: index.php");
        }

?>
