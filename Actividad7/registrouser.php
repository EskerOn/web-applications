<?php
$usu = $_REQUEST['usuario'];
$pas = $_REQUEST['passwd'];
$year = $_REQUEST['year'];
$name = $_REQUEST['nombre'];

echo "Usuario: $usu <br>";
echo "Password: $pas <br>";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"videoteca");
$result=mysqli_query($link,"select usuario from clientes where usuario='$usu'");
if ($row=mysqli_fetch_array($result)){
    echo "Usuario encontrado en la tabla clientes <br>";
	header("Location: erroruser.php");
}
else
{
	$sql = "insert into clientes (cliente, year, usuario, password, tipo) VALUES( '$name', '$year', '$usu', '$pas', 1)";
    mysqli_query($link, $sql);
    header("Location: registrarse.php");
	mysqli_free_result($result); 
	mysqli_close($link);
}
?>