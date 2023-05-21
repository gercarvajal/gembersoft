<?php

include("functions/setup.php");

session_start();

if (isset($_SESSION['usuario'])) {

    if (isset($_GET['idusu'])) {
        $sqlusu = "SELECT * FROM usuario WHERE Id=" . $_GET['idusu'];
        $resultusu = mysqli_query(conexion(), $sqlusu);
        $datosusu = mysqli_fetch_array($resultusu);
    }
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <title> Panel Principal </title>

        <link rel="stylesheet" href="resource/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="resource/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="resource/css/style1.css" />
    <link rel="stylesheet" href="resource/css/ver.css" />
    <title>Ver  Productos</title>


        <script>
            $(document).ready(function() {
                $('.zoom').hover(function() {
                    $(this).addClass('transition');
                }, function() {
                    $(this).removeClass('transition');
                });
            });
        </script>



        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <style type="text/css">
            #global {
                height: 100%;
                width: 100%;
                border: 1px solid #ddd;
                background: #f1f1f1;
                overflow-y: scroll;
            }

            #mensajes {
                height: auto;
            }

            .texto {
                padding: 4px;
                background: #fff;
            }
        </style>


    </head>

    <body id="bodyprinci" style="height: 1080px; overflow-x: hidden; overflow-y: hidden; ">
        <main>
       
            <?php
            if ($_SESSION['tipo'] == "1") //Profesional
            {
            ?>

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
              <a href="fotos.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-images"></i></span>
                <span>Producto</span>
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
              <a href="principal.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-arrow-left"></i></span>
                <span>volver</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-box-arrow-left"></i></span>
                <span>salir</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>


              
<h1>Galeria de productos</h1>
  <div class="container">

<?php
$sql = "SELECT
 producto.idProducto,
fotos.idFotos,
fotos.Ruta,
 producto.Nombre
FROM
 fotos
INNER JOIN producto ON producto.idProducto =
fotos.Producto_idProducto";
$result = mysqli_query(conexion(), $sql);
?>  
<?php
      while ($datosimg = mysqli_fetch_array($result)) {
                  ?>
      <div class="item red">
        <img src="resource/imgproductos/<?php echo $datosimg['Ruta']; ?>" class="zoom" alt="beautifull view">
        <i class="fa fa-camera"></i>
     </div>
    <?php
      }
  ?>

      </div>


    
                <?php
            }
                ?>
        </main>
   

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
    header('Location:../login/Login.php');
}
?>