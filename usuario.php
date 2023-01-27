<?php

    class Usuario{
        
        private $identificacion;
        private $nombre;
        private $edad;
        private $correo;
        private $direccion;
        private $imagen;
        private $telefono;
        private $rol;

       /* public function __construct(){
            
        }*/

        public function iniciar($id){
            
            include ("mysql/conexion.php");
    
            $sql = 'SELECT  usuario.identificacion, usuario.nombre,usuario.edad,usuario.correo,
            usuario.direccion,usuario.imagen,usuario.telefono,rol.ubicacion 
            FROM usuario JOIN rol USING (codRol) WHERE identificacion = ?';

            $consulta = mysqli_prepare($mysql,$sql);
            mysqli_stmt_bind_param($consulta, "i", $id);
            mysqli_stmt_execute($consulta);
            mysqli_stmt_bind_result($consulta,$id,$nombre,$edad,$correo,$direccion,$imagen,$telefono,$rol);
            mysqli_stmt_fetch($consulta);


                $this->identificacion = $id;
                $this->nombre = $nombre;
                $this->edad = $edad;
                $this->correo = $correo;
                $this->direccion = $direccion;
                $this->imagen = $imagen;
                $this->telefono = $telefono;
                $this->rol = $rol;
   
            $consulta->close();
        }
        public function Registro($id,$nombre,$edad,$correo,$cont,$direccion,$telefono){
            $rol = 2;
            include("mysql/conexion.php");
            $sql = "INSERT into usuario (identificacion,nombre,edad,correo,contrasena,direccion,telefono,codRol) VALUES
            (?,?,?,?,?,?,?,?)";
            $consulta = mysqli_prepare($mysql,$sql);

            mysqli_stmt_bind_param($consulta, "ssissssi", $id, $nombre,$edad,$correo,$cont,$direccion,$telefono,$rol);
            mysqli_stmt_execute($consulta);

            $consulta->close();
        }

        public function getId(){
            return $this->identificacion;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function getDireccion(){
            return $this->direccion;
        }
        public function getRol(){
            return $this->rol;
        }
        public function Sesion($username,$password){
            include ("mysql/conexion.php");

            $sql = "SELECT identificacion FROM usuario WHERE correo = ? AND contrasena = ?";
            $consulta = mysqli_prepare($mysql,$sql);

            //i = entero | d = decimal | b = bool | s = cadena | c = caracter
            mysqli_stmt_bind_param($consulta, "ss", $username, $password);
            mysqli_stmt_execute($consulta);
            mysqli_stmt_bind_result($consulta,$id1);
            mysqli_stmt_fetch($consulta);

            if($id1 == null){
                return 1;
            }else{
                return $id1;
            }
            $consulta->close();
        }
    }
?>