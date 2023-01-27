<?php
    include_once "user/usersesion.php";
    require_once "plantillas\header.php";
    require_once "usuario.php";
    include_once "mysql/conexion.php";

    $user = new UserSession();
    $usuario = new Usuario();

    /*if(isset($_SESSION['user'])){
        $usuario->iniciar($user->getCurrentUser());
        header('Location: index.php?id='.$usuario->getId().'');*/
    if(isset($_POST["ingresar"])){
        $email = $_POST['username'];
        $contrasena = $_POST['password'];
        $id1 = $usuario->Sesion($email,$contrasena);
        $usuario->iniciar($id1);

        if($id1 != 1){
            $user->setCurrentUser($id1);
            $usuario->iniciar($id1);
            header('Location:'.$usuario->getRol().'?id='.$id1.'');
        }else{
            echo 'Usuario y/o Contraseña incorrectas...';
        }
    }    

    
?>

<!DOCTYPE html>

<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>

    <title>Iniciar sesion</title>
    <link rel="icon" href="multimedia\iconos\viajar.png"  >
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="estilosforo\Iniciosesion.css" th:href="@{/css/index.css}">
   
</head>

<body>

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="multimedia\iconos\viajar.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" th:action="@{/login}" method="POST">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                    </div>
                    <button name="ingresar" type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                    
                </form>

                <div class="col-12 forgot">
                    <a href="#">Recordar contrasena?</a>
                </div>

                <div class="col-12 forgot">
                    <a href="registro.php">Crea tu cuenta</a>
               
        </div>
    </div>
</body>
</html>