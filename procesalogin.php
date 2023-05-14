<?php

include("functions/setup.php");

session_start();

$sql="select * from usuario where  Correo='".$_POST['txtcorreo']."' and Clave='".md5($_POST['txtpassword'])."' and Estado=1";
//echo $sql;
//die; 
$result=mysqli_query(conexion(),$sql);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);

if($cont!=0)
{
    $_SESSION['usuario']=$datos['Nombre'];

    $_SESSION['usuarioap']=$datos['Apaterno'];

    $_SESSION['usuarioid']=$datos['idUsuario'];

    $_SESSION['tipo']=$datos['id_tipo_usuario'];

    $_SESSION['usuarioRut']=$datos['Rut'];

    $_SESSION['usuarioCorreo']=$datos['Correo'];

    $_SESSION['usuariodire']=$datos['Direccion'];

    $_SESSION['usuariotel']=$datos['Telefono'];

    $_SESSION['usuariopass']=$datos['Clave'];

    header('Location:principal.php');
}else{
    header('Location:index.php?error');
}
?>