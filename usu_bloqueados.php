<?php
//conectamos la bd
include 'conexion.php';
//llamamos la tabla de la bd
$sql="SELECT * FROM usuario";
//comparamos para mostrar resultados 
$result=mysqli_query($conn, $sql);
?>  

<!DOCTYPE html>
<html lang="en">
<link href="resource/css/admin.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="resource/css/listuser.css">  



<table class="container">
  
  <h2 class="usuarios">USUARIOS</h2><br><br>
	<thead>
   
		<tr>
			<th><h1>Nombre</h1></th>
      <th><h1>Apellido</h1></th>
			<th><h1>Rut</h1></th>
			<th><h1>Correo</h1></th>
			<th><h1>Telefono</h1></th>
      <th><h1>Dirección</h1></th>
      <th><h1>Desbloquear</h1></th>
		</tr>
	</thead>
	<tbody>
  <?php
  //esta linea recorre la base de datos, TODOS LOS DATOS
    while($datos=mysqli_fetch_array($result)){
      if($datos['Estado']==0){
  ?>
		<tr>
      <td style="display:none;"><?php echo $datos['idUsuario'] ?></td>
			<td><?php echo $datos['Nombre'] ?></td>
			<td><?php echo $datos['Apaterno'] ?></td>
      <td><?php echo $datos['Rut'] ?></td>
      <td><?php echo $datos['Correo'] ?></td>
      <td><?php echo $datos['Telefono'] ?></td>
      <td><?php echo $datos['Direccion'] ?></td>
      
      <td><a href="procesar_desbloquear.php?idUsuario=<?php echo $datos['idUsuario']?>" values="boton">Desbloquear</a></td>
		</tr>
   <?php
      }
      }
   ?>
	</tbody>
</table>