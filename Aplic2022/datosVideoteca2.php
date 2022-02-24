<html>
<head><title> Videoteca </title></head>
<body>
<h2> Datos de la videoteca </h2>
<hr>
<?PHP
   $link=mysqli_connect("localhost","root","");
   mysqli_select_db($link,"videoteca");
   $id=$_GET['id_peli'];
 
   $result=mysqli_query($link,"select * from pelicula where id_pelicula=$id");

   
   $row=mysqli_fetch_array($result);
   $ti=$row['titulo'];
   $di=$row['director'];
   $ac=$row['actor'];
   $im=$row['imagen'];
   $ra=$row['ranking'];

   echo "<img src='misImagenes/$im' width='200' height='250'/> <br>";
   echo "Titulo: $ti <br>";   
   echo "Director: $di <br>";
   echo "Actor: $ti <br>";
   echo "Ranking: $ra <br>";

   mysqli_free_result($result); 
   mysqli_close($link); 
   echo "<br><A href='datosVideoteca.php'> Regresar </A>";

?>  

</body>
</html>