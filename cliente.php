<?php
  require_once "plantillas\header.php";
  require_once "usuario.php";

  $id = $_GET['id'];
  $usuario = new Usuario();
  $usuario->iniciar($id);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
 echo '<h1>Benvenido'.$usuario->getNombre().'</h1>';
?>
<br>
<h2>en construccion</h2>
</body>
</html>