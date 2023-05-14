<?php

include("functions/setup.php");

session_start();

if (isset($_SESSION['usuario'])) {

  if (isset($_GET['usuarioid'])) {
    $sqlusu = "SELECT * FROM usuario WHERE idUsuario=" . $_GET['usuarioid'];
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

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon-16x16.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebars.js"></script>
    <script src="assets/js/validardatos.js"></script>
    <script src="assets/js/validarRUT.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/features.css" rel="stylesheet">
    <link href="assets/css/sidebars.css" rel="stylesheet">
    



  </head>

  <body>
    <main>
  
      <?php
      if ($_SESSION['tipo'] == "1") //Administrador
      {
      ?>
      
        <!--Inicio Body-->
        <div class="container px-0 py-5" id="featured-3">
          <h2 class="pb-2 border-bottom">Bienvenido(a): <?php echo $_SESSION['usuario']; ?> <?php echo $_SESSION['usuarioap']; ?> <p style="color: blue;">(Perfil Administrador Users del Servicio)</p>
          </h2>

          <!--ojitooo-->
          <div id="formulario_usuario">
            <div class="container p-5 my-5 border">
              <h4>Usuarios</h4>
              <form action="adminuser.php" method="post" name="form1">
                <div class="row g-3">
                  <div class="col">
                    <input type="text" class="form-control" id="Rut" name="Rut" aria-label="Run" placeholder="Run" oninput="checkRut(this)" value="<?php echo $datosusu['run'] ?>">
                  </div>
                </div>
                <br>
                <div class="row g-3">
                  <div class="col">
                    <input type="text" class="form-control" id="name" name="name" aria-label="Nombre" placeholder="Nombre" value="<?php echo $datosusu['nombre'] ?>">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" id="app" name="app" aria-label="Apellido" placeholder="Apellido" value="<?php echo $datosusu['apellido'] ?>">
                  </div>
                </div>
                <br>
                <div class="row g-3">
                  <div class="col">
                    <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" aria-label="Fecha Nacimiento" placeholder="Fecha Nacimiento" value="<?php echo $datosusu['fecha_nac'] ?>">
                  </div>
                  <div class="col">
                    <input type="email" class="form-control" id="correo" name="correo" aria-label="Correo" placeholder="Correo" value="<?php echo $datosusu['email'] ?>">
                  </div>
                </div>
                <br>
                <div class="row g-3">
                  <div class="col">
                    <input type="radio" class="form-check-input" id="radio" name="sexo" value="Masculino" <?php if ($datosusu['sexo'] == "Masculino") { ?> checked <?php } ?>">
                    <label class="form-check-label" for="radio">
                      Masculino
                    </label>
                    <input type="radio" class="form-check-input" id="radio" name="sexo" value="Femenino" <?php if ($datosusu['sexo'] == "Femenino") { ?> checked <?php } ?>">
                    <label class="form-check-label" for="radio">
                      Femenino
                    </label>
                  </div>
                  <div class="col">
                    <input type="number" class="form-control" id="telefono" name="telefono" aria-label="Telefono" placeholder="Telefono" value="<?php echo $datosusu['telefono'] ?>">
                  </div>
                </div>
                <br>
                <div class="row g-3">
                  <?php
                  if (!isset($_GET['idusu'])) {
                  ?>
                    <div class="col">
                      <input type="password" class="form-control" id="pass" name="pass" aria-label="Contraseña" placeholder="Contraseña">
                    </div>
                  <?php
                  }
                  ?>
                  <div class="col">
                    <select id="estado" name="frmestado" class="form-select">
                      <option value="3">Seleccionar</option>
                      <option value="1" <?php if (isset($_GET['idusu'])) {
                                          if ($datosprop['estado'] == 1) { ?>selected <?php }
                                                                                  } ?>>Activo</option>
                      <option value="0" <?php if (isset($_GET['idusu'])) {
                                          if ($datosprop['estado'] == 0) { ?>selected <?php }
                                                                                  } ?>>Inactivo</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="row g-3">
                  <div class="col">
                    <select id="cars" name="Tipouser" class="form-select">
                      <option value="0">Seleccionar</option>
                      <?php
                      $sqltipo = "select * from tipo_usuario";
                      $resulttipo = mysqli_query(conexion(), $sqltipo);
                      while ($datostipo = mysqli_fetch_array($resulttipo)) {
                      ?>
                        <option value="<?php echo $datostipo['Id']; ?>" <?php if ($datosusu['id_tipo_usuario'] == $datostipo['Id']) { ?>selected <?php } ?>><?php echo $datostipo['nombre_tipo_usuario']; ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-12">
                    <hr>
                    <center>
                      <?php
                      if (!isset($_GET['idusu'])) {
                      ?>
                        <input id="btnIngresar" type="button" value="Ingresar" class="btn btn-success" onclick="validaradmin(this.value);">
                      <?php
                      } else {
                      ?>
                        <input id="btnModificar" type="button" value="Modificar" class="btn btn-warning" onclick="validaradmin(this.value);">
                        <input id="btnEliminar" type="button" value="Eliminar" class="btn btn-danger" onclick="validaradmin(this.value);">
                      <?php
                      }
                      ?>
                      <input id="btnCancelar" type="button" value="Cancelar" class="btn btn-danger" onclick="validaradmin(this.value);">
                      <input type="hidden" id="accion" name="accion">
                      <input type="hidden" id="idoculto" name="idoculto" value="<?php echo $_GET['idusu']; ?>">
                    </center>
                  </div>
                </div>
            </div>

            </form>
          </div>
          <div class="container p-5 my-5 border">
            <h4>Usuarios</h4>
            <div id="grilla" class="overflow-scroll">
              <table class="table table-striped">
                <tr>
                  <th>ID</th>
                  <th>Rut</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Telefono</th>
                  <th>Estado</th>
                  <th>Tipo de Usuario</th>
                  <th>Modificar|Eliminar</th>
                </tr>
                <?php
                $sql = "SELECT
                    usuario.Id,
                    usuario.run,
                    usuario.nombre,
                    usuario.sexo,
                    usuario.apellido,
                    usuario.edad,
                    usuario.telefono,
                    usuario.email,
                    usuario.estado,
                    tipo_usuario.nombre_tipo_usuario
                  FROM
                    usuario
                    INNER JOIN tipo_usuario ON usuario.id_tipo_usuario = tipo_usuario.Id
                    WHERE id_tipo_usuario = 2";
                $result = mysqli_query(conexion(), $sql);
                while ($datos = mysqli_fetch_array($result)) {
                ?>
                  <tr>
                    <td><?php echo $datos['Id']; ?></td>
                    <td><?php echo $datos['run']; ?></td>
                    <td><?php echo $datos['nombre']; ?></td>
                    <td><?php echo $datos['apellido']; ?></td>
                    <td><?php echo $datos['telefono']; ?></td>
                    <td>
                      <?php
                      if ($datos['estado'] == 0) {
                      ?>
                        <img src="assets/images/inactivo.png">
                      <?php
                      } else {
                      ?>
                        <img src="assets/images/activo.png">
                      <?php
                      }

                      ?>
                    </td>
                    <td><?php echo $datos['nombre_tipo_usuario']; ?></td>

                    <td>
                      <a href="adminprincipal.php?idusu=<?php echo $datos['Id']; ?>"><img src="assets/images/updated.png"></a> | <a href="adminuser.php?idelim=<?php echo $datos['Id']; ?>"><img src="assets/images/delete.png"></a>

                    </td>
                  </tr>
                <?php
                }
                ?>
              </table>
            </div>
          </div>
        </div>
        <!--Fin Body-->
      <?php
      }
      ?>
    </main>
  </body>

  </html>
<?php
} else {
  header('Location:index.html');
}
?>