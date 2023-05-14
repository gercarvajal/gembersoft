<?php

include "functions/setup.php";//llamo a la conexion

$sql = "INSERT INTO usuario SET Rut='" . $_POST['txtrut'] . "',Nombre='" . $_POST['txtnombre'] . "',Apaterno='" . $_POST['txtapaterno'] . "',Amaterno='" 
. $_POST['txtamaterno'] . "',Direccion='" . $_POST['txtdireccion'] . "',NumeroDire='" . $_POST['txtndirec'] . "',Correo='" . $_POST['txtcorreo'] . "',Clave='" 
. md5($_POST['txtclave']) . "',Telefono='". $_POST['txttel']."',Estado='1"."',id_tipo_usuario='1'";


mysqli_query(conexion(), $sql);

//print $sql;
header("Location:login.php ");
