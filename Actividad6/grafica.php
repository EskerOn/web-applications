<html>
<head><title>Grafica</title></head>
<body>
 <h2> Grafica del los votos</h2>
<hr>
<?PHP
    require_once "numvotos.php";
    include "libchart/classes/libchart.php";

    $chart = new HorizontalBarChart(600,270);
    $datos = new XYDataSet();

    $pan = $_REQUEST['pan'];
    $pan = (int)$pan;
    $mc = $_REQUEST['mc'];
    $mc = (int)$mc;
    $morena = $_REQUEST['morena'];
    $morena = (int)$morena;
    $prd = $_REQUEST['prd'];
    $prd = (int)$prd;
    $pri = $_REQUEST['pri'];
    $pri = (int)$pri;
    $pt = $_REQUEST['pt'];
    $pt = (int)$pt;
    $pve = $_REQUEST['pve'];
    $pve = (int)$pve;



    
    
    
    $ti='PVE';
    $ra=$pve;
    $datos->addPoint(new Point("$ti",$ra));
    $ti='PT';
    $ra=$pt;
    $datos->addPoint(new Point("$ti",$ra));
    $ti='PRD';
    $ra=$prd;
    $datos->addPoint(new Point("$ti",$ra));
    $ti='PRI';
    $ra=$pri;
    $datos->addPoint(new Point("$ti",$ra));
    $ti='PAN';
    $ra=$pan;
    $datos->addPoint(new Point("$ti",$ra));
    $ti='MORENA';
    $ra=$morena;
    $datos->addPoint(new Point("$ti",$ra));
    $ti='MC';
    $ra=$mc;
    $datos->addPoint(new Point("$ti",$ra));



$chart->setDataSet($datos);
$chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 240));
$chart->setTitle("Resultados de las votaciones");
$chart->render("generated/ResultadosVotaciones.jpg");
?>
<img src="generated/ResultadosVotaciones.jpg">
<br>
<A href="numvotos.php">Regresar </A>
</body
</html>