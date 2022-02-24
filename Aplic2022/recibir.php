<html>
<head><title> Formularios </title></head>
<body>
<h2> Datos recibidos </h2>
<hr>
<?PHP
$fp=fopen("salida.dat","a+");
$nom=$_REQUEST['nombre'];
$gen=$_REQUEST['genero'];
$ed=$_REQUEST['edad'];

echo "Nombre: $nom <br>";
echo "Genero: $gen <br>";
echo "Edad: $ed <br>";

fwrite($fp,"$nom $gen $ed\n");
fclose($fp);
?>
</body>
</html>