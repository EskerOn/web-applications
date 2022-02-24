<html>
<head><title>Grafica</title></head>
<body>
 <h2> Grafica del ranking de las peliculas </h2>
<hr>
<?PHP
include "libchart/classes/libchart.php";

$chart = new HorizontalBarChart(600,270);
$datos = new XYDataSet();

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"videoteca");
$result=mysqli_query($link,"select titulo,ranking from pelicula");

while ($row=mysqli_fetch_array($result))
{
  $ti=$row['titulo'];
  $ra=$row['ranking']; 
  $datos->addPoint(new Point("$ti",$ra));
}

$chart->setDataSet($datos);
$chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 240));
$chart->setTitle("Ranking de las peliculas");
$chart->render("generated/demo1.jpg");
?>
<img src="generated/demo1.jpg">
<br>
<A href="datosVideoteca.php">Regresar </A>
</body
</html>