<?php

include 'conexion.php';//llamo a la conexion

$sql="INSERT INTO usuario SET Nombre='".$_POST['txtnombre']."',Correo='".$_POST['txtemail']."',Direccion='".$_POST['txtdireccion']."',Clave='".md5($_POST['txtclave'])."',Rut='".$_POST['txtrut']."',Telefono=".$_POST['txttelefono'];

mysqli_query($conn,$sql);
header("Location:login.php");

?>