<?php
session_start();
$Nuevocorreo = $_REQUEST['correo'];
$usu = $_REQUEST['usuario'];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"rutasturisticas");
$result=mysqli_query($link,"select * from usuarios where username='$usu'");
if ($row=mysqli_fetch_array($result)){
    echo "Usuario encontrado en la tabla clientes <br>";
    $sql = "update usuarios set email='$Nuevocorreo' where username='$usu'";
    mysqli_query($link, $sql);
    header("Location: cambiarCorreoExitoso.php");
    mysqli_free_result($result);
    mysqli_close($link);
}
?>