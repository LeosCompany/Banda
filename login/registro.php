<?php session_start();

require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $password = hash('sha512', $password);
  $rol = $_POST['rol'];

  $errores = '';

  //validar los campos de texto
  if (empty($usuario) || empty($password) || empty($rol)) {
    $errores .= '<li class="error"> Por favor rellene todos los campos  </li>';
  }else {
    //validar que el usuario no existe
    $conexion = conexion($bd_config);
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
    $statement->execute([
      'usuario' => $usuario
    ]);
    $resultado = $statement->fetch();

    if ($resultado != false) {
      $errores .= '<li class="error"> Este usuario ya existe  </li> ';
    }
  }

if ($errores == '') {
  $conexion = conexion($bd_config);
  $statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, password, tipo_usuario)
  VALUES(null, :usuario, :password, :tipo_usuario)');
  $statement->execute([
    ':usuario' => $usuario,
    ':password' => $password,
    ':tipo_usuario' => $rol
  ]);

header('location'.RUTA.'login.php');

}

}

require 'views/registro.view.php';

 ?>
