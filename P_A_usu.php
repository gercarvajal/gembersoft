<?php
//conectamos la bd
include 'conexion.php';
//llamamos la tabla de la bd
$id=$_GET["idUsuario"];

$sql="SELECT * FROM usuario WHERE idUsuario='$id'";
//comparamos para mostrar resultados 
$result=mysqli_query($conn, $sql);
?>  

<!DOCTYPE html>
<html lang="en">
<link href="resource/css/admin.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="resource/css/listuser.css">  


<header class="page-header">

  <nav>
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>

    
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3>Administrador</h3>
      </li>
      <li>
        <a href="prueba.php"><span class="material-symbols-outlined">group_add</span>VOLVER</a>
      </li>
      
      <li>
      <li>
      <a href="index.html" aria-expanded="true" aria-label="collapse menu"><span class="material-symbols-outlined">logout</span>Salir</a>
        <div class="switch">
          <input type="checkbox" id="mode" checked>
          <label for="mode">
            <span></span><span>Negro</span>
          </label>
        </div>
        <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu"></button>
      </li>
    </ul>


  </nav>


</header>
<style>
  body{
    overflow:hidden;
  }
  .div1{
      width: 150%;
 }
 .button {
  background-color: #e6621f; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<section class="page-content">
  <section class="search-and-user">
   
    <div class="admin-profile">
      <div class="notifications">
        
        <svg>
          <use xlink:href="#users"></use>
        </svg>
      </div>
    </div>
  </section>
  
  
<section class="grid">
  

<div class="div1">
<form action="P_Actua.php" method="POST">
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
		</tr>
	</thead>
	<tbody>
  <?php
  //esta linea recorre la base de datos, TODOS LOS DATOS
  while($datos=mysqli_fetch_array($result)){
  ?>
		<tr>
            <input type="hidden" value="<?php echo $datos['idUsuario']?>" name=id>
            <td><input type="text" value="<?php echo $datos['Nombre'] ?>" name="nom"></td>
            <td><input type="text" value="<?php echo $datos['Apaterno'] ?>" name="ape"></td>
            <td><input type="text" value="<?php echo $datos['Rut'] ?>" name="rut"></td>
            <td><input type="text" value="<?php echo $datos['Correo'] ?>" name="email"></td>
            <td><input type="text" value="<?php echo $datos['Telefono'] ?>" name="tel"></td>
            <td><input type="text" value="<?php echo $datos['Direccion'] ?>" name="dir"></td>
            
		</tr>
   <?php
      }
   ?>
	</tbody>
</table>
<center><input class="button" type="submit" value="actualizar"></center>

</form>
</div>







  </section>
  <footer class="page-footer">
   
  </footer>
  <script src="resource/js/css/a.js"></script>
</section>
</html> 