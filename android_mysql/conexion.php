<?php
$mysqlConexion = new mysqli("localhost","root","","android_mysql1");
if($mysqlConexion->connect_error){
    die ("Ha ocurrido un error en la conexion");
}else{
    echo "¡Conexión exitosa!";
}
?>