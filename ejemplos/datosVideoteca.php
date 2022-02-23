<html>
<head><title> Videoteca </title></head>
<body>
<h2> Datos de la videoteca </h2>
<hr>
<?PHP
   $link=mysqli_connect("localhost","root","");
   mysqli_select_db($link,"videoteca");

   $result=mysqli_query($link,"select * from pelicula");
   
   ?>
   
   <table border="1">;
   <tr> <td> id pelicula </td> <td> titulo </td> <td> Director </td> <td> Actor </td> <td> Imagen </td> </tr>
   
   <?php
   while ($row=mysqli_fetch_array($result))
   {
      $id=$row['id_pelicula'];
      $ti=$row['titulo'];
      $di=$row['director'];
      $ac=$row['actor'];
      $img=$row['imagen'];
      #echo "$id $ti $di $ac <br>";
      echo "<tr> <td> $id </td> <td> $ti </td> <td> $di </td> <td> $ac </td> <td> <A href='datosVideoteca2.php?id_peli=$id'> <img src='misimagenes/$img' width='80' height='80' </img> </A> </td> </tr> ";
   }
   mysqli_free_result($result); 
   mysqli_close($link); 
?>  
</table>
</body>
</html>