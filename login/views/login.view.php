<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>login</title>
  </head>

  <body class="bg-image">
    <div class="container">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div class="input-group">
          <i class="fa fa-user-o icons" aria-hidden="false"> </i>
          <input type="text" name="usuario" placeholder="Usuario" class="form-control">
        </div>
        <div class="input-group">
          <i class="fa fa-lock icons" aria-hidden="false"> </i>
          <input type="password" name="password" placeholder="Contraseña" class="form-control">
        </div>

        <button type="submit" name="submit" class="btn btn-flat-green">Ingresar</button>
      </form>

      <a href="#" class="login-link"> ¿No tienes una cuenta? </a>
    </div>
  </body>

</html>
