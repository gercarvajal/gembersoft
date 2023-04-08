<?php
include 'conexion.php';
$id=$_POST['id'];
$nombre=$_POST['nom'];
$ape=$_POST['ape'];
$rut=$_POST['rut'];

$email=$_POST['email'];
$dir=$_POST['dir'];
$telef=$_POST['tel'];

$sql="UPDATE usuario SET Nombre='$nombre', Apaterno='$ape', Correo='$email', Rut='$rut', Telefono='$telef', Direccion='$dir' Where idUsuario='$id' ";

if (mysqli_query($conn, $sql)) {
    header("Location: prueba.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>