<?php
session_start();
$anteriorpass = $_REQUEST['pass'];
$NuevaPass = $_REQUEST['pass1'];
$usu = $_REQUEST['usuario'];

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"rutasturisticas");
$result=mysqli_query($link,"select * from usuarios where username='$usu'");
if ($row=mysqli_fetch_array($result)){
    echo "Usuario encontrado en la tabla clientes <br>";
    $password=$row['password'];
    if ($password==$anteriorpass){
        $sql = "update usuarios set password='$NuevaPass' where username='$usu'";
        mysqli_query($link, $sql);
        header("Location: cambiarPassExitoso.php");
        mysqli_free_result($result);
        mysqli_close($link);
    }
    else
    {
        #echo "Password no válido <br>";
        header("Location: errorpasswordchange.php");
    }
}
?>