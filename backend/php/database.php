
<?php
//Datos de la base de datos
$host = "localhost";
$user = "root";
$pass = '';
$dbase = "rauhadb";
//Conexion a la base de datos
$conexion = new mysqli($host,$user,$pass,$dbase);
//Consulta de conexion
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

?>