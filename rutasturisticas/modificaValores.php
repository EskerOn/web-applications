<?php 
$rutaid = $_REQUEST['rutaid'];
$nombre = $_REQUEST['nombre'];
$descripcion = $_REQUEST['descripcion'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"rutasturisticas");
$sql="update rutas set nombre='$nombre', descripcion='$descripcion' where id_ruta=$rutaid";
$result=mysqli_query($link,$sql);
header("Location: consultaUser.php");
?>