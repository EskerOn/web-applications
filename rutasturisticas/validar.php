<?php
session_start();
$usu = $_REQUEST['usuario'];
$pas = $_REQUEST['passwd'];

echo "Usuario: $usu <br>";
echo "Password: $pas <br>";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"rutasturisticas");
$result=mysqli_query($link,"select username,password,tipo, id_user from usuarios where username='$usu'");
if ($row=mysqli_fetch_array($result)){
    echo "Usuario encontrado en la tabla clientes <br>";
    $password=$row['password'];
    if ($password==$pas){
        $ti=$row['tipo'];
        $_SESSION['usuario']=$usu; //session variable
        $_SESSION['tuser']=$ti;
        $_SESSION['ID']=$row['id_user'];
        if ($ti==1){
            #echo "Usted es cliente <br>";
            header("Location: indexUsuario.php");
        }
        if ($ti==0){
            #echo "Usted es Admin <br>";
            header("Location: indexAdm.php");
        }
    }
    else
    {
        #echo "Password no válido <br>";
        header("Location: errorpassword.php");
    }
}
else
{
    #echo "Usuario no válido <br>";
    header("Location: errorlogin.php");
}
?>