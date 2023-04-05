<?php
include 'conexion.php';//llamo a la conexion

session_start();
//mala tu wea no sirve 
$correo = $_POST["txtcorreo"];//creo las variables (txt es de los formularios)
$pass = md5($_POST["txtpassword"]);


//llamo los datos a la base de datos 
$query = mysqli_query($conn,"SELECT * FROM usuario WHERE Correo = '".$correo."' and Clave = '".$pass."'");

$nr = mysqli_num_rows($query);

$datos=mysqli_fetch_array($query);

//valido la conexion 
if($nr == 1)
{
	$_SESSION['usuario']=$datos['Correo'];
	header("Location: index.php");
	
}
else if ($nr == 0) 
{
	//header("Location: login.html");
	//echo "No ingreso"; 
	echo "<script> alert('Error');window.location= 'login.html' </script>";
}

?>