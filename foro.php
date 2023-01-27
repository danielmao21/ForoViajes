<?php
    require_once "plantillas/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilosforo\foro.css">
    <title>Explorar</title>
</head>
<body> 

<div  class="contenedor2">

<center><h1> ¡ EXPLORA TU DESTINO !</h1>  </center>
    

<br>
<center><h2> selecciona el continente</h2> </center>


       <!-----------------  LISTAS PAISES  ------------>

       <nav class="meenu">
           

       <?php

       $id = $_GET['id'];
        
        echo'    
        <ul>
            
            <li><a href="#">Europa &#9660; <i class="icon-abajo2"></i></a>
            <ul class="submeenu">
                <button name="italia">
                 <li ><a href="tablaconsultas.php?pais=italia&id='.$id.'"> Italia </a></li>
                </button>
                <br>
                <button name="francia"> 
                 <li><a href="tablaconsultas.php?pais=francia&id='.$id.'">Francia </a></li>
              </button>
              <br>
                <button  name="españa">
                   <li><a href="tablaconsultas.php?pais=españa&id='.$id.'"> España </a></li>
                </button>
  
            </ul>
            </li>
            <li><a href="#">America del sur &#9660;</a>
                <ul class="submeenu">
                  <button name="argentina"> 
                        <li><a href="tablaconsultas.php?pais=argentina&id='.$id.'"> Argentina </a</li>
                  </button>
                  <button name = "colombia">
                       <li><a href="tablaconsultas.php?pais=colombia&id='.$id.'"> Colombia </a></li>
                 </button>
                 <br>
                 <button name="brasil">    
                    <li><a href="tablaconsultas.php?pais=brasil&id='.$id.'"> Brasil </a></li>
                 </button>
                    
                </ul>
            
            </li>
            <li><a href="#">Africa &#9660; </i></a>
            <ul class="submeenu">
                <button name="nigeria">
                 <li><a href="tablaconsultas.php?pais=nigeria&id='.$id.'"> Nigeria</a></li> 
                </button>
                <br>
                <button name="africa">
                    <li><a href="tablaconsultas.php?pais=south africa&id='.$id.'">South Africa </a></li>
                </button>
                
            </ul>
            </li>
            
        </li>

        <li><a href="#">Asia &#9660; </i></a>
        <ul class="submeenu">
            <button name="japon">
                <li><a href="tablaconsultas.php?pais=japon&id='.$id.'"> Japon</a></li>
            </button>
            <br>
            <button name="china">
                <li><a href="tablaconsultas.php?pais=china&id='.$id.'">China</a></li>
            </button>
           
        </ul>
        </li>
        
        </ul>
        ';
      ?>  
    </nav>
</div>
    <br>

</body>
 <?php
 require_once "plantillas/footer.php";
 ?>
