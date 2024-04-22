<?php
include 'database.php';

//Seleccion de la tabla
$sql = "SELECT * FROM stock"; 
$resultado = $conexion->query($sql);


$conexion->close();
?>