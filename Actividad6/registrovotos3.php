<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de votos</title>
</head>
<body>
<?php
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"votosDB");

  $partidoid=$_REQUEST['voto'];
  $personaid=$_REQUEST['persona'];
      
  $sql = "INSERT INTO votos (fecha_eleccion, id_persona, id_partido) VALUES(CURDATE(), $personaid, $partidoid);";
  if (mysqli_query($link, $sql)) {
    echo "Voto registrado correctamente";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }
  
  echo "<br>";
  echo"<a href='registrovotos.php'>Regresar</a>";

  mysqli_close($link); 

?>
  
</body>
</html>