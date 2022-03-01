<html>
<head><title>Grafica</title></head>
<body>
 <h2> Grafica del los votos</h2>
<hr>
<?PHP
    require_once "numvotos.php";
    require('fpdf16/fpdf.php'); 
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

//Generando PDF

class PDF extends FPDF
{
var $B;
var $I;
var $U;
var $HREF;

function PDF($orientation='P',$unit='mm',$format='A4')
{
	//Llama al constructor de la clase padre
	$this->FPDF($orientation,$unit,$format);
	//Iniciaci�n de variables
	$this->B=0;
	$this->I=0;
	$this->U=0;
	$this->HREF='';
}

function WriteHTML($html)
{
	//Int�rprete de HTML
	$html=str_replace("\n",' ',$html);
	$a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
	foreach($a as $i=>$e)
	{
		if($i%2==0)
		{
			//Text
			if($this->HREF)
				$this->PutLink($this->HREF,$e);
			else
				$this->Write(5,$e);
		}
		else
		{
			//Etiqueta
			if($e[0]=='/')
				$this->CloseTag(strtoupper(substr($e,1)));
			else
			{
				//Extraer atributos
				$a2=explode(' ',$e);
				$tag=strtoupper(array_shift($a2));
				$attr=array();
				foreach($a2 as $v)
				{
					if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
						$attr[strtoupper($a3[1])]=$a3[2];
				}
				$this->OpenTag($tag,$attr);
			}
		}
	}
}

function OpenTag($tag,$attr)
{
	//Etiqueta de apertura
	if($tag=='B' || $tag=='I' || $tag=='U')
		$this->SetStyle($tag,true);
	if($tag=='A')
		$this->HREF=$attr['HREF'];
	if($tag=='BR')
		$this->Ln(5);
}

function CloseTag($tag)
{
	//Etiqueta de cierre
	if($tag=='B' || $tag=='I' || $tag=='U')
		$this->SetStyle($tag,false);
	if($tag=='A')
		$this->HREF='';
}

function SetStyle($tag,$enable)
{
	//Modificar estilo y escoger la fuente correspondiente
	$this->$tag+=($enable ? 1 : -1);
	$style='';
	foreach(array('B','I','U') as $s)
	{
		if($this->$s>0)
			$style.=$s;
	}
	$this->SetFont('',$style);
}

function PutLink($URL,$txt)
{
	//Escribir un hiper-enlace
	$this->SetTextColor(0,0,255);
	$this->SetStyle('U',true);
	$this->Write(5,$txt,$URL);
	$this->SetStyle('U',false);
	$this->SetTextColor(0);
}
}

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$html = "<h2> Resultados de la eleccion </h2>";
$html = $html."<br>";
$html = $html."<br>";
$html = $html."Votos MC: ".$mc."<br>";
$html = $html."<br>";
$html = $html."Votos MORENA: ".$morena."<br>";
$html = $html."<br>";
$html = $html."Votos PAN: ".$pan."<br>";
$html = $html."<br>";
$html = $html."Votos PRI: ".$pri."<br>";
$html = $html."<br>";
$html = $html."Votos PRD: ".$prd."<br>";
$html = $html."<br>";
$html = $html."Votos PT: ".$pt."<br>";
$html = $html."<br>";
$html = $html."Votos PVE: ".$pve."<br>";

$pdf->WriteHTML($html);


$pdf->Output("reporte.pdf");

?>
<img src="generated/ResultadosVotaciones.jpg">
<br>
<A href="numvotos.php">Regresar </A>
</body
</html>