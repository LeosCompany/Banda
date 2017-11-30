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
        <div class="comit">
          
          <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="input-group">
          <i class="fa fa-lock icons" aria-hidden="false"> </i>
          <input type="password" name="password" placeholder="Contraseña" class="form-control">
        </div>
        <div class="input-group">
          <select class="form-control" name="rol">
            <option value="">Selecciona un Privilegio</option>
            <option value="administrador">Administrador</option>
              <option value="usuario">Usuario</option>
          </select>
        </div>

        <button type="submit" name="submit" class="btn btn-flat-green">Ingresar</button>
      </form>

      <a href="#" class="login-link"> ¿No tienes una cuenta? </a>
    </div>
  </body>

</html>
