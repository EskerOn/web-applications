<html>
<head><title>Formularios</title>
<body>
<h2> Formularios </h2>
<hr>
<?PHP
$nom=$_FILES['archivo']['name'];
echo "Nombre del archivo: $nom <br>";
$fp=fopen($nom,"r");
$n=0;
$ed=0;
echo '<form action="formulario3.php" method="POST">';
echo '<select name="alumno">';
while(!feof($fp))
{
  $linea=fgets($fp);
  $tam=strlen($linea); 
  if ($tam>0)
  {
    $n++; 
    $partes=explode(" ",$linea); 
    //echo "Nombre: $partes[0] Edad: $partes[1] <br>";
    $ed=$ed+$partes[1];
    echo "<option value='$partes[0]'> $linea"; 
   } 
}
echo "</select> <br><br>";
echo '<input type="submit" name="enviar" value=" Enviar ">';
echo "</form>";
$pro=$ed/$n;
echo "El promedio de edad de los alumnos es = $pro <br>";

fclose($fp);
?>
</body>
</html>