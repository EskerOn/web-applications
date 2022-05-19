<?php
$usu = $_REQUEST['usuario'];
$pas = $_REQUEST['passwd'];
$name = $_REQUEST['nombre'];
$mail = $_REQUEST['mail'];

echo "Usuario: $usu <br>";
echo "Password: $pas <br>";
echo "Nombre: $name <br>";
echo "Correo: $mail <br>";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"rutasturisticas");
$result=mysqli_query($link,"select * from usuarios where username='$usu'");
if ($row=mysqli_fetch_array($result)){
    echo "Usuario encontrado en la tabla clientes <br>";
	header("Location: erroruser.php");
}
else{
	$sql = "insert into usuarios (nombre, username, password, tipo, email) VALUES( '$name', '$usu', '$pas', 1, '$mail')";
    mysqli_query($link, $sql);
    header("Location: registroExitoso.php");
	mysqli_free_result($result); 
	mysqli_close($link);
}
?>