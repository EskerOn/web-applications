<html>
<head><title> Videoteca </title></head>
<body>
<h2> Datos de la videoteca </h2>
<hr>
<?PHP
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"videoteca");
    $id=$_GET['id_peli'];
    $result=mysqli_query($link,"select * from pelicula where id_pelicula = $id");
   
    $row=mysqli_fetch_array($result);
    $id=$row['id_pelicula'];
    $ti=$row['titulo'];
    $di=$row['director'];
    $ac=$row['actor'];
    $img=$row['imagen'];
    $ran=$row['ranking'];
    echo "<img src='misimagenes/$img' width='200' height='250' </img> <br>";
    echo "Titulo: $ti <br>";
    echo "Director: $di <br>";
    echo "Actor: $ac <br>";
    echo "Ranking: $ran <br>";
    echo"<a href='datosvideoteca.php'>Regresar</a>";
    mysqli_free_result($result); 
    mysqli_close($link); 
   ?>

</table>
</body>
</html>