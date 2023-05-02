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
        <a href="#usuarios"><span class="material-symbols-outlined">group_add</span>Usuarios</a>
      </li>
      <li>
        <a href="#0"><span class="material-symbols-outlined">add_photo_alternate</span><span>imagenes</span></a>
      </li>
      <li>
        <a href="#0"><span class="material-symbols-outlined">gallery_thumbnail</span><span>Coleccion</span></a>
      </li>
      <li>
        <a href="#0"><span class="material-symbols-outlined">local_shipping</span><span>Pedidos</span></a>
      </li>
      <li>
        <a href="#0"><span class="material-symbols-outlined">arrow_back</span><span>volver</span></a>
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

<table class="container">
  
  <h2 class="usuarios">USUARIOS</h2><br><br>
  <a href="usu_bloqueados.php" values="boton" name="id">uasuarios bloqueados</a>
	<thead>
   
		<tr>
			<th><h1>Nombre</h1></th>
      <th><h1>Apellido</h1></th>
			<th><h1>Rut</h1></th>
			<th><h1>Correo</h1></th>
			<th><h1>Telefono</h1></th>
      <th><h1>Dirección</h1></th>
      <th><h1>Editar</h1></th>
      <th><h1>Bloquear</h1></th>
		</tr>
	</thead>
	<tbody>
  <?php
  //esta linea recorre la base de datos, TODOS LOS DATOS
    while($datos=mysqli_fetch_array($result)){
      if($datos['Estado']==1){
  ?>
		<tr>
      <td style="display:none;"><?php echo $datos['idUsuario'] ?></td>
			<td><?php echo $datos['Nombre'] ?></td>
			<td><?php echo $datos['Apaterno'] ?></td>
      <td><?php echo $datos['Rut'] ?></td>
      <td><?php echo $datos['Correo'] ?></td>
      <td><?php echo $datos['Telefono'] ?></td>
      <td><?php echo $datos['Direccion'] ?></td>
      <td><a href="P_A_usu.php?idUsuario=<?php echo $datos['idUsuario']?>" values="boton">Actualizar</a></td>
      <td><a href="procesar_borrar.php?idUsuario=<?php echo $datos['idUsuario']?>" values="boton">Bloquear</a></td>
		</tr>
   <?php
      }
      }
   ?>
	</tbody>
</table>

</div>
  </section>
  <footer class="page-footer">
   
  </footer>
  <script src="resource/js/css/a.js"></script>
</section>
</html> 