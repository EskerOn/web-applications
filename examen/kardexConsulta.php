<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kardex</title>
</head>
<body>
<h1>Kardex </h1><!-- encabezado-->
    <?php  
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"calificaciones");
    $id_recibido=$_REQUEST['id'];
    $result=mysqli_query($link,"select * from alumnos where id_alumno = $id_recibido");
    $row=mysqli_fetch_array($result);
    $nombre_alumno=$row['nombre'];
    $foto=$row['foto'];
    $email=$row['email'];
    echo"Nombre: $nombre_alumno<br>";
    echo"Email: $email<br>";
    echo"<img src='img/$foto' width='80' height='80'/> </A>";

    $result=mysqli_query($link,"select * from kardex where id_alumno = $id_recibido");
    $suma=0;
    $acreditadas=0;
    echo "<table border='1'>";
    echo "<TR><TD> Materia</TD><TD> Calificacion </TD> <TD> Acreditada</TD></TR>";
    while ($row=mysqli_fetch_array($result)){
        $materia_id=$row['id_materia'];
        $result2=mysqli_query($link,"select * from materias where id_materia = $materia_id");
        $row2=mysqli_fetch_array($result2);
        $materia=$row2['nombre'];
        $calificacion=$row['calificacion'];
        $suma=$suma+$calificacion;
        if ($calificacion>5){
            $acreditada="Si";
            $acreditadas=$acreditadas+1;
        }else{
            $acreditada="No";
        }
        echo"<TR><TD>$materia</TD><TD>$calificacion</TD><TD>$acreditada</TD>  </TR>";  
    }
    echo "</table>";
    echo "<br>";
    $noaprobadas=mysqli_num_rows($result)-$acreditadas;
    $promedio=$suma/mysqli_num_rows($result);
    echo "Promedio General:  $promedio";
    echo "<br>";
    echo "Numero de materias: ".mysqli_num_rows($result);
    echo "<br>";
    echo "Numero de materias acreditadas: $acreditadas";
    echo "<br>";
    echo "Numero de materias no aprobadas: $noaprobadas";
    echo "<br>";
    echo "<a href='kardex.php'>Regresar</a>";
    echo "<br>";
    echo "<br>";
    echo"</table>";

    echo "<form action='modificaCalificacion.php' method='post'>";
        echo "Selecciona la materia a modificar:";
        echo "<SELECT NAME='id_materia'>";
        $result=mysqli_query($link,"select * from kardex where id_alumno = $id_recibido");
        while ($row=mysqli_fetch_array($result)){
            $materia_id=$row['id_materia'];
            $result2=mysqli_query($link,"select * from materias where id_materia = $materia_id");
            $row2=mysqli_fetch_array($result2);
            $materia=$row2['nombre'];
            echo "<OPTION VALUE=$materia_id>$materia";
        }
        echo "</SELECT>";
        echo "<br>";
        echo "<br>";
        echo "Calificacion:";
        echo "<input type='text' name='calificacion'>";
        echo "<br>";
        echo "<br>";
        echo "<input type='hidden' name='id_alumno' value='$id_recibido'>";
        echo "<input type='submit' value='Modificar'>";

        mysqli_free_result($result); 
        mysqli_close($link); 
    ?> 
    <br>
    <br>
    <br>  
       
    </form>


</body>
</html>