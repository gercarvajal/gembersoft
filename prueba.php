<?php
//conectamos la bd
include 'functions/setup.php';

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
  
  <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Usuarios registrado
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>Nombre</th>
                      <th>Rut</th>
                      <th>Direccion</th>
                      <th>Correo</th>
                      <th>NumeroDireccion</th>
                      <th>Telefono</th>
                      <th>Estado</th>
                      </tr>
                    </thead>

                      
                    <tbody>

                    
                    <?php
                $sql = "SELECT
                usuario.Rut,
                usuario.Nombre,
                usuario.Direccion,
                usuario.NumeroDire,
                usuario.Estado,
                usuario.Correo,
                usuario.Apaterno
              FROM
                usuario";
                $result = mysqli_query(conexion(), $sql);
                while ($datospe = mysqli_fetch_array($result)) {
                ?>
                     <td><?php echo $datospe['Nombre']; ?><br><?php echo $datospe['Apaterno']; ?></td>
                      <td><?php echo $datospe['Rut']; ?></td>
                      <td><?php echo $datospe['Direccion']; ?></td>
                      <td><?php echo $datospe['Correo']; ?></td>
                      <td><?php echo $datospe['NumeroDire']; ?></td>
                      <td><?php echo $datospe['Telefono']; ?></td>
                    <td>
                      <?php
                      if ($datos['Estado'] == 0) {
                      ?>
                        <h1>inactivo</h1>
                      <?php
                      } else {
                      ?>
                        <H1>Activo</H1>
                      <?php
                      }

                      ?>
                    </td>
                  
                  
                <?php
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