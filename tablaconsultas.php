<?php
    require_once "plantillas/header.php";
    require_once "usuario.php";
    include_once "mysql/conexion.php";

    $pais = $_GET['pais'];
    $id = $_GET['id'];

    
       $sql = "SELECT codPais FROM pais WHERE pais = ?";

        $consulta7 = mysqli_prepare($mysql,$sql);
        mysqli_stmt_bind_param($consulta7, "s", $pais);
        mysqli_stmt_execute($consulta7);
        mysqli_stmt_bind_result($consulta7,$codpais);
        mysqli_stmt_fetch($consulta7);

        $consulta7->close();

        if(isset($_POST["publicar_pre"])){

        if($id != 1){
            $tituloP = $_POST['titulo'];
            $descripcionp = $_POST['descripcion'];
            $sql = "INSERT INTO pregunta(titulo, descripcion, codPais, identificacion) VALUES (?,?,?,?)";
            $consulta5 = mysqli_prepare($mysql,$sql);
            mysqli_stmt_bind_param($consulta5,"ssii",$tituloP,$descripcionp,$codpais,$id);
            mysqli_stmt_execute($consulta5); 
        }else{
             echo'inicie sesion';
        }       
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosforo\tablaconsultas.css">
    <title> foro temas</title>
</head>
<body>
    
 <h1 >Bienvenido a tu foro</h1>

    <table >
            <tr>
                <th>FORO </th>
                <th>TITULO</th>
            <!--    <th>RESPUESTAS</th> -->
            
            </tr>
            <?php

    $sql = "SELECT pregunta.titulo , pais.pais FROM pregunta INNER JOIN pais ON pregunta.codPais = pais.codPais 
    WHERE pais = ?";

    $consulta = mysqli_prepare($mysql,$sql);
    mysqli_stmt_bind_param($consulta, "s", $pais);
    mysqli_stmt_execute($consulta);
    mysqli_stmt_bind_result($consulta,$foro,$titulo);

                $id = $_GET['id'];
                 while(mysqli_stmt_fetch($consulta)){
                    echo '<tr>';
                    echo '<td>'.$titulo.'</td>';
                    echo '<td> <a href="preguntas_repues.php?titulo='.$foro.'&id='.$id.'">'.$foro.' </a></td>';
                    echo '</tr>';
                    
                }
                $consulta->close();
            ?>           
    </table>      
    <!--tabla empezar tema   -->
   
            <div class="entrada-form">
                <h3>Empezar tema</h3>   
                <form action="" method="POST">
                    <p>
                        <label type="text">Titulo</label>
                        <input  type="text" name="titulo">
                    </p>
                    <p class="block">
                       <label type="text">Descripcion</label> 
                        <textarea name="descripcion" rows="3"></textarea>
                        
                    </p>
                    <p class="block">
                        <button name="publicar_pre">
                            Publicar pregunta
                        </button>
                    </p>
              </form>
            </div> 
        
           

       <br>
    

<?php
 require_once "plantillas/footer.php";
 ?>