<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE VOTOS</title>
</head>
<body>
    <h2>REGISTRO DE VOTOS</h2>
    <hr>
    <form action="registrovotos2.php" method="post">
    <?php
        $link=mysqli_connect("localhost","root","");
        mysqli_select_db($link,"votosDB");
        $result=mysqli_query($link,"select * from padronelectoral");
        echo "Selecciona tu nombre:";
        echo "<SELECT NAME='nombre_persona'>";
        while ($row=mysqli_fetch_array($result)){
            $id=$row['id_persona'];
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