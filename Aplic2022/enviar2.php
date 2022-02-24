<html>
<head><title> Formularios </title></head>
<body>
<h2> Enviar Datos </h2>
<hr>
<FORM action="enviar2.php" method="post">

Introduzca su nombre:
<input type="text" name="nombre">
<br>
<br>
Seleccione genero:
<input type="radio" name="genero" value="mujer" CHECKED> Mujer
<input type="radio" name="genero" value="hombre"> Hombre
<br>
<br>
Introduce tu edad:
<SELECT NAME="edad">
   <OPTION VALUE="20">20
   <OPTION VALUE="21">21
   <OPTION VALUE="22">22
   <OPTION VALUE="23" SELECTED>23
   <OPTION VALUE="24">24
   <OPTION VALUE="25">25
   <OPTION VALUE="26">26
   <OPTION VALUE="27">27
   <OPTION VALUE="28">28
   <OPTION VALUE="29">29
   <OPTION VALUE="30">30
   <OPTION VALUE="31">31
</SELECT>
<br>
<br>
<input type="submit" name="enviar" value=" Enviar Datos ">
</FORM>
<?PHP
if(isset($_POST['enviar']))
{
  $fp=fopen("salida.dat","a+");
  $nom=$_REQUEST['nombre'];
  $gen=$_REQUEST['genero'];
  $ed=$_REQUEST['edad'];

  echo "Nombre: $nom <br>";
  echo "Genero: $gen <br>";
  echo "Edad: $ed <br>";

  fwrite($fp,"$nom $gen $ed\n");
 fclose($fp);
}
?>

</body>
</html>