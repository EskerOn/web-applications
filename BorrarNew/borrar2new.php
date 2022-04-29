<html>
<head>


</head>
<body>
<?php 
   include("conexion.php"); 
   $link=Conectarse(); 
   $id=$_GET['id_pelicula'];
//   echo "el valor es : $id";  
   mysqli_query($link,"delete from pelicula where id_pelicula = '$id'"); 
   header("Location: borrarnew.php"); 
?> 
</body>
