<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $telefono=$_POST["telefono"];
    $pass=$_POST["pass"];
    $insertar="INSERT INTO usuarios(nombre,email,telefono,pass)
               VALUES('".$nombre."','".$email."','".$telefono."','".$pass."')";
    $resultado=$mysqlConexion->query($insertar);
    if($resultado==true){
        echo "El usuario fue insertardo exitosamente";
    }else{
        echo "Ha ocurrido un error no se puede insertar usuario";
    }
    $mysqlConexion->close();
}