<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="resource/css/style.css" />
    <link rel="icon" type="image/x-icon" href="resource/images/Iconos/favicon2.ico">
    <title>Formularios</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form method="post" action="procesar_login.php" class="sign-in-form">
            <h2 class="title">Bienvenido</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="txtcorreo" type="text" placeholder="Correo" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="txtpassword" type="password" placeholder="Contraseña" />
            </div>
            <a href="#">Recuperar Clave</a>
            <input type="submit" value="Conectar" class="btn solid" />
          </form>
          <form method="post"action="procesausuario.php" class="sign-up-form">
            <h2 class="title">Registrarse</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="txtnombre"type="text" placeholder="Nombre Completo" />
            </div>
            <div class="input-field">
              <i class="fas fa-address-card"></i>
              <input name="txtrut"type="text" placeholder="RUT" />
            </div>
            <div class="input-field">
              <i class="fas fa-hashtag"></i>
              <input name="txtdireccion"type="text" placeholder="Dirección" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone-alt"></i>
              <input name="txttelefono"type="number" placeholder="Teléfono" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="txtemail"type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="txtclave"type="password" placeholder="Contraseña" />
            </div>
            <input type="submit" class="btn" value="Registrarse" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Hola, ¿Nuevo aquí?</h3>
            <p>
              Registrate ingresando tus datos y comienza a navegar.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrarse
            </button>
          </div>
          <img src="resource/images/Iconos/logo2.png" class="image" alt=""/>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Ya tienes cuenta?</h3>
            <p>
              Ingresa aquí usando tu cuenta registrada.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Conectarse
            </button>
          </div>
          <img src="resource/images/Iconos/cementerio.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
