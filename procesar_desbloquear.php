<?php
include 'conexion.php';
$id=$_GET["idUsuario"];
$estado=1;

$sql="UPDATE usuario SET Estado='$estado' Where idUsuario='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: prueba.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>