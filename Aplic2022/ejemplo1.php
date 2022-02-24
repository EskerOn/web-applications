<?php
   require('fpdf16/fpdf.php');
   $pdf=new FPDF();	
   $pdf->AddPage();	//Agregar una pagina
   $pdf->SetFont('Arial','B',20);	//Letra Arial, negrita (Bold), tam. 20
   $pdf->Cell(80,40,'Ejemplo de pdf');
   $pdf->Cell(40,80,'Bienvenidos');
   
	//Nombre del archivo de salida
   $pdf->Output();
   echo "<br>Se ha generado el pdf";
?>
