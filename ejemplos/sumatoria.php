<html>
<head><title> Datos </title></head>
<body>
<h3> Sumatoria </h3>
<img src="code.png" width="145" height="100">
<hr>
<?PHP
function sumatoria($n1, $n2)
{
 $suma=0;
 for($i=$n1;$i<=$n2;$i++)
   $suma=$suma+$i; 
 return $suma;
}


$ini=$_REQUEST['inicio'];
$fin=$_REQUEST['final'];
$n=$_REQUEST['numero'];
echo "Inicio= $ini <br>";
echo "Fin= $fin <br>";
echo "Numero de datos= $n <br>";


$res=sumatoria($ini,$fin);
echo "La sumatoria de $ini hast $fin = $res <br>"; 

//print("La sumatoria de $ini hast $fin = $suma <br>"); 
//printf("La sumatoria de %d hast %d = %d <br>",$ini,$fin,$suma); 


for($i=0;$i<$n;$i++)
   $A[$i]=rand(1,20);

echo"<br> Datos del arreglo <br>";
for($i=0;$i<$n;$i++)
   echo "$A[$i] ";

for($k=0;$k<$n;$k++)
{
   for ($i=0; $i<$n-1;$i++) 
   if($A[$i]>$A[$i+1]){
                       $temp=$A[$i];
                       $A[$i]=$A[$i+1];
                       $A[$i+1]=$temp; 
                      }
}
echo"<br> Datos ordenados <br>";
for($i=0;$i<$n;$i++)
   echo "$A[$i] ";

?>
</body>
</html>