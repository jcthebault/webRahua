
<?php
    //Requeridos
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbase = "rauhadb";
    //Conexion a la base de datos
    $conexion = new mysqli($host,$user,$pass,$dbase);
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
?>