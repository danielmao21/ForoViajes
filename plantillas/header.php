<?php
  include_once "user/usersesion.php";
  require_once "usuario.php";  
  include_once "mysql/conexion.php";

    $user = new UserSession();
    $id = $user->getCurrentUser();

?>
  
  <link rel="stylesheet" href="estilosforo\styleforo.css"> 

    <section>
        <header>
  
          <nav>
              <ul class="menu">
                <?php

                if($id == null || $id==1){
                  echo'
                  <center>
                  <img id="icono" src="multimedia\iconos\viajar.png" alt=""> 
                  <li> <a href="index.php?id=1">Inicio</a></li>          
                <li> <a href="foro.php?id=1">Foro</a> </li>
                <li> <a href="iniciarsesion.php?=1">Iniciar sesion</a> </li>
                </center> ';  
                }else{
                echo'
                <center>
                <img id="icono" src="multimedia\iconos\viajar.png" alt=""> 
                <li> <a href="index.php?id='.$id.'">Inicio</a></li>
              <li> <a href="foro.php?id='.$id.'">Foro</a> </li>
              <li> <a href="logout.php?id='.$id.'">Cerrar sesion</a> </li>  
              '; 
                }
                ?>
              </ul>    
          </nav>
        </header>
       
      </section>   
