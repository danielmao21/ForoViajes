<?php
  require_once "plantillas\header.php";
    require_once "usuario.php";

    $id = $_GET['id'];
    $usuario = new Usuario();
    $usuario->iniciar($id);
    echo $usuario->getNombre();
?>