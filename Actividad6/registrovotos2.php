<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Votos</title>
</head>
<body>
<h1>Formulario de registro de votos </h1><!-- encabezado-->

<h2> Selecciona el partido de tu preferencia </h2>

</table>
    <?php  
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"votosDB");
    $id_recibido=$_REQUEST['nombre_persona'];
    $result=mysqli_query($link,"select * from padronelectoral where id_persona = $id_recibido");
    $row=mysqli_fetch_array($result);
    $nombre=$row['nombre'];
    $estado=$row['estado'];
    $municipio=$row['municipio'];
    $fecha_nac=$row['fecha_nac'];
    $resultpartidos=mysqli_query($link,"select * from partidos");
    echo "<form action='registrovotos3.php' method='post'>";
    echo "<input type='hidden' name='persona' value=$id_recibido>";
    echo "<table style='width:50%'>";
    while ($row=mysqli_fetch_array($resultpartidos)){
        $id=$row['id_partido'];
        $nombrepartido=$row['nombre_partido'];
        $siglas=$row['siglas'];
        $logo=$row['imagen'];
        echo "<tr>";
        echo "<td>";
        echo "<img src='$logo' width='50px' height='50px'>";
        echo "</td>";
        echo "<td>";
        echo "<input type='radio' name='voto' value='$id'>";
        echo "</td>";
        echo "<td>";
        echo "$siglas";
        echo "</td>";
        echo "<td>";
        echo "$nombrepartido";
        echo "</td>";
        echo "</tr>";

    }
    echo "</table>";
    #boton registrar voto
    echo "<input type='submit' name='RegistraVoto' value='Registrar Voto'>";
    echo "</form>";
    echo "<h2>Datos de la persona</h2>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Nombre:</td>";
    echo "<td>$nombre</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Estado:</td>";
    echo "<td>$estado</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Municipio:</td>";
    echo "<td>$municipio</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Fecha de nacimiento:</td>";
    echo "<td>$fecha_nac</td>";
    echo "</tr>";
    echo "</table>";
    echo "<br>";
    echo"<a href='registrovotos.php'>Regresar</a>";

    mysqli_free_result($result);
    mysqli_close($link); 

    ?> 
    

</body>
</html>