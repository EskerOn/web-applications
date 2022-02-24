<html>
<head><title> POO </title></head>
<body>
<h2> POO en PHP </h2>
<hr>
<?PHP
  require_once "Rectangulo.php";
  $R1=new Rectangulo(10,5);
  $R2=new Rectangulo(7,22);
  $R3=new Rectangulo(0,0);

  $R1->escribir(" Rectangulo 1 ");
  $R2->escribir(" Rectangulo 2 ");
  $a1=$R1->area();
  $pe1=$R1->perimetro();
  echo "El area del rectangulo 1= $a1 <br>";
  echo "El perimetro del rectangulo 1= $pe1 <br>";  
  $R3->suma($R1,$R2);
  $R3->escribir(" Rectangulo 3"); 
  
?>
</body>
</html>