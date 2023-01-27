<?php
    require_once "plantillas/header.php";
    require_once "usuario.php";

    if(isset($_POST['iniciar'])){

        $nombre = $_POST['nombre'];
        $id = $_POST['id'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $email1 = $_POST['email1'];
        $contrasena = $_POST['contrasena'];
        $contrasena1 = $_POST['contrasena1'];


        if($email === $email1){
            if($contrasena === $contrasena1){
                $usuario = new Usuario();
                $usuario->Registro($id,$nombre,$edad,$email,$contrasena,$direccion,$telefono);

                header('Location: iniciarsesion.php');
            }else{
                echo 'Su contraseña no concuerda';
            }
        }else{
            echo 'Su correo no concuerda';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="estilosforo\registro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Registro</title>
</head>
<!--
<body>
   
    <body>
     
        <form action="" method = "POST">
        <p>Nombre</p><input type="text" name="nombre" id="nombre"required>
        <p>Identificacion</p><input type="text" name="id" id="id"required>
        <p>Edad</p><input type="text" name="edad" id="edad"required>
        <p>Direccion</p><input type="text" name="direccion" id="direccion">
        <p>Telefono</p><input type="text" name="telefono" id="telefono">
        <p>Correo</p><input type="email" name="email" id="email"required>
        <p>Confirmar correo</p><input type="email" name="email1" id =  "email1" required>
        <p>Contraseña</p><input type="password" name="contrasena" id="contrasena"required>
        <p>Confirmar contraseña</p><input type="password" name="contrasena1" id = "contrasena1" required>
        <input type="submit" value = "Enviar datos" id = "iniciar" name="iniciar" required/>
        </form>
    </body>
-->
    
     
    <form action="" method="POST" class="formulario" id="formulario">
        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__usuario">
            <label for="usuario" class="formulario__label">Nombre</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
        </div>

        <!-- Grupo: Nombre -->
        <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Identificacion</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="id" id="id" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
        </div>

        <!-- Grupo: Edad -->
        <div class="formulario__grupo" id="grupo__password">
            <label for="password" class="formulario__label">Edad</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="edad" id="edad" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
        </div>

        <!-- Grupo: Direccion -->
        <div class="formulario__grupo" id="grupo__password2">
            <label for="password2" class="formulario__label">Direccion</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="direccion" id="direccion">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
        </div>

        <!-- Grupo: Telefono -->
        <div class="formulario__grupo" id="grupo__correo">
            <label for="correo" class="formulario__label">Telefono</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="telefono" id="telefono">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
        </div>

        <!-- Grupo: correo -->
        <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">Correo</label>
            <div class="formulario__grupo-input">
                <input type="email" class="formulario__input" name="email" id="email" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
        </div>

        <!-- Grupo: Confirmar correo -->
        <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">Confirmar correo</label>
            <div class="formulario__grupo-input">
                <input type="email" class="formulario__input" name="email1" id="email1" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
        </div>

        <!-- Grupo: Contraseña -->
        <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">contraseña</label>
            <div class="formulario__grupo-input">
                <input type="password" class="formulario__input" name="contrasena" id="contrasena" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
        </div>

        <!-- Grupo: Confirmar contraseña-->
        <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">Confirmar contraseña</label>
            <div class="formulario__grupo-input">
                <input type="password" class="formulario__input" name="contrasena1" id="contrasena1" required>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
        </div>

        

        <!-- Grupo: Terminos y Condiciones -->
        <div class="formulario__grupo" id="grupo__terminos">
            <label class="formulario__label">
                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                Acepto los Terminos y Condiciones
            </label>
        </div>

        <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
        </div>

        <div class="formulario__grupo formulario__grupo-btn-enviar">
       
        <!-- <BOTON ENVIAR  -->
            <input type="submit" value="Enviar datos" id="iniciar" name ="iniciar" class="formulario__btn">Enviar</button>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
        </div>
    </form>


</html>