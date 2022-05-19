<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kardex de Calificaciones</title>
</head>
<body>
    <h2>Kardex de Calificaciones</h2>
    <hr>
    <form action="kardexConsulta.php" method="post">
    <?php
        $link=mysqli_connect("localhost","root","");
        mysqli_select_db($link,"calificaciones");
        $result=mysqli_query($link,"select * from alumnos");
        echo "Selecciona tu nombre:";
        echo "<SELECT NAME='id'>";
        while ($row=mysqli_fetch_array($result)){
            $id=$row['id_alumno'];
            $nombre=$row['nombre'];
            echo "<OPTION VALUE=$id>$nombre";
        }
        echo "</SELECT>";
        mysqli_free_result($result); 
        mysqli_close($link); 
    ?> 
    <br>
    <br>
    <br>
    <input type="submit" name="enviar" value="enviar datos">     
       
    </form>
</body>
</html> 