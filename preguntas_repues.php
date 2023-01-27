<?php

    include_once "mysql/conexion.php";
    require_once "plantillas/header.php";
    $titulo = $_GET['titulo'];
    $id = $_GET['id'];

    $sql = "SELECT usuario.nombre, pregunta.descripcion, pregunta.id_pregunta FROM
    pregunta JOIN usuario USING(identificacion) WHERE pregunta.titulo = ?";
    $consulta = mysqli_prepare($mysql,$sql);

    mysqli_stmt_bind_param($consulta, "s", $titulo);
    mysqli_stmt_execute($consulta);
    mysqli_stmt_bind_result($consulta,$nombre,$descripcion,$idp);
    mysqli_stmt_fetch($consulta);

    $consulta->close();
?>
<?php
if(isset($_POST["publicar_res"])){

    if($id != 1){

        $des = $_POST['message'];

        $sql = "INSERT INTO respuesta(descripcion, id_pregunta, identificacion) VALUES (?,?,?)";
        $consulta2 = mysqli_prepare($mysql,$sql);
    
        mysqli_stmt_bind_param($consulta2, "sii", $des,$idp,$id);
        mysqli_stmt_execute($consulta2);
        $consulta2->close();
    }else{
        echo 'Inicie sesion';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosforo\preguntas_respues.css">
    <title>foro preguntas y respuestas</title>
</head>
<body>  



    
      <!-------seccion pregunta completa--------->
      
    <?php
    echo '<h1>'. $titulo.'</h1>';
      ?>

 <!-------seccion pregunta completa--------->
<div id="sec_pr">


<?php
    echo'
    <table  > 
        <tr>
            <th rowspan="3">'.$nombre.'</th>
            <th colspan="2">'.$titulo.'</th>
            
        </tr>
        <tr>
            <td>'.$descripcion.'</td>
            
        </tr>
        
    </table>';
    ?>
</div>

</div>
    <!-------------seccion respuestas------------->
   <br>

   <div id="sec_respuestas" >
     <h1> Respuestas </h1>
     <br>
     <?php

        $sql = "SELECT respuesta.descripcion,usuario.nombre FROM respuesta INNER JOIN usuario ON 
        respuesta.identificacion = usuario.identificacion WHERE respuesta.id_pregunta = ?
        GROUP BY respuesta.descripcion";
        $consulta1 = mysqli_prepare($mysql,$sql);

        mysqli_stmt_bind_param($consulta1, "i", $idp);
        mysqli_stmt_execute($consulta1);
        mysqli_stmt_bind_result($consulta1,$descripcionR,$nombreR);

        while(mysqli_stmt_fetch($consulta1)){   
            echo'<table id="respuestas">';
       
                echo'<tr>';
                    echo'<th rowspan="3">'.$nombreR.' </th>';
                    echo'<th colspan="2">Respuesta a '.$titulo.' </th>';
                    
                echo'</tr>';
                echo'<tr>';
                    echo'<td>'.$descripcionR.'</td>';
                    
                echo'</tr>';  
          
            echo'</table>';  
        }         
        $consulta1->close();
    ?>
   </div>
  




<!--seccion reponder-->
<br>
  
            <div class="contactoform">
                <h3> Responder</h3>
                <form action="" method= "POST">
                    
                   
                    <p class="blocke">
                       <label type="text" required>Descripcion </label> 
                        <textarea name="message" rows="3"></textarea>
                    </p>
                    <p class="blocke">
                        <button name="publicar_res">
                            publicar Respuesta
                        </button>
                    </p>
              </form>
          </div>
    
</body>

<?php
 require_once "plantillas/footer.php";
 ?>

