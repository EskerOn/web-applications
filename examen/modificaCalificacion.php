<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambia calificacion</title>
</head>
<body>
    <h2>Cambiar Calificacion</h2>
    <hr>
    <?php  
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"calificaciones");
    $id_alumno=$_REQUEST['id_alumno'];
    $id_materia=$_REQUEST['id_materia'];
    $calificacion=$_REQUEST['calificacion'];
    #actualizar calificacion en la base de datos
    $result=mysqli_query($link,"update kardex set calificacion=$calificacion where id_alumno=$id_alumno and id_materia=$id_materia");    
    if ($result){
        echo "Calificacion actualizada";
    }else{
        echo "No se pudo actualizar la calificacion";
    }
    echo "<br>";
    echo "<br>";
    echo "<a href='kardex.php'>Regresar</a>";
    mysqli_close($link);
    ?>
    <br>
    <br>
    <br>
</body>
</html> 