<?php

include("functions/setup.php");

session_start();

if (isset($_SESSION['usuario'])) {


?>
  <!doctype html>
  <html lang="en">
 

  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="resource/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="resource/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="resource/css/style1.css" />
    <title>Inicio</title>
  </head>

  <body>
       <?php
      if ($_SESSION['tipo'] == "1") //Administrador
      {
      ?>
      <body>
     <!-- top navigation bar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
       <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"href="#">Bienvenido/a: <?php echo $_SESSION['usuario']; ?> <?php echo $_SESSION['usuarioap']; ?></a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Buscar"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
      
        </div>
      </div>
      </nav>
      <!-- top navigation bar -->
      <!-- offcanvas -->
      <div
        class="offcanvas offcanvas-start sidebar-nav bg-dark"
        tabindex="-1"
        id="sidebar"
      >
        <div class="offcanvas-body p-0">
          <nav class="navbar-dark">
            <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                Inicio
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-1-square"></i></span>
                <span>Administrador</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Opciones
              </div>
            </li>
       
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-people-fill"></i></span>
                <span>Usuarios</span>
              </a>
            </li>

            <li>
              <a href="AgregarProducto.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-images"></i></span>
                <span>productos</span>
              </a>
            </li>

            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-grid-1x2"></i></span>
                <span>Coleccion de productos</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-shop"></i></span>
                <span>Pedidos</span>
              </a>
            </li>





            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Acciones
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Lista de pedidos</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tablas de usuario</span>
              </a>
            </li>
            <li>
              <a href="cerrarsesion.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-box-arrow-left"></i></span>
                <span>salir</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
        </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Inicio</h4>
          </div>
        </div>
       

        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Area Chart Example
              </div>
              <div class="card-body">
                <canvas class="chart" width="400" height="200"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Area Chart Example
              </div>
              <div class="card-body">
                <canvas class="chart" width="400" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>

        
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
                <tr>
                     <td><?php echo $datospe['Nombre']; ?><br><?php echo $datospe['Apaterno']; ?></td>
                      <td><?php echo $datospe['Rut']; ?></td>
                      <td><?php echo $datospe['Direccion']; ?></td>
                      <td><?php echo $datospe['Correo']; ?></td>
                      <td><?php echo $datospe['NumeroDire']; ?></td>
                      <td><?php echo $datospe['Telefono']; ?></td>
                    <td>
                      <?php
                      if ($datospe['Estado'] == 0) {
                      ?>
                      
                      <?php
                      } else {
                      ?>
                       
                      <?php
                      }

                      ?>
                    </td>
                  
                  
                <?php
                }
                ?>
                     </tr>
                    </tbody>
                  
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
     


      <?php
      } else
      ?>
      <?php if ($_SESSION['tipo'] == '2') //cliente
    {
      header('Location:index.html');
      ?>
        
     
        
      <?php
    } else
      ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="resource/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="resource/js/jquery-3.5.1.js"></script>
    <script src="resource/js/jquery.dataTables.min.js"></script>
    <script src="resource/js/dataTables.bootstrap5.min.js"></script>
    <script src="resource/js/script.js"></script>

  </body>

  </html>
<?php
} else {
  header('Location:penka.php');
}
?>