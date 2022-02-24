<html>
<head><title> Videoteca </title></head>
<body>
<h2> Datos de la videoteca </h2>
<hr>
<?PHP
   $link=mysqli_connect("localhost","root","");
   mysqli_select_db($link,"videoteca");

   $result=mysqli_query($link,"select * from pelicula");

   echo"<A href='grafica.php'>Ver Ranking </A><br>";
   echo"<A href='ejemplo2.php'>Generar PDF </A><br><br>";

   echo "<table border='1'>";
   echo "<TR><TD> Id_ Pelicula</TD><TD> Titulo </TD>
         <TD> Director</TD><TD>Actor</TD><TD> Imagen </TD> </TR>";

   while ($row=mysqli_fetch_array($result))
   {
      $id=$row['id_pelicula'];
      $ti=$row['titulo'];
      $di=$row['director'];
      $ac=$row['actor'];
      $im=$row['imagen'];

      echo"<TR><TD>$id</TD><TD>$ti</TD><TD>$di</TD><TD>$ac</TD>
           <TD><A href='datosVideoteca2.php?id_peli=$id'>
           <img src='misImagenes/$im' width='80' height='80'/> </A>
           </TD> </TR>";  
   }
   mysqli_free_result($result); 
   mysqli_close($link); 
   echo"</table>";
?>  

</body>
</html>