<?php
include 'database.php';

//Seleccion de la tabla
$sql = "SELECT * FROM usuario"; 
$resultado = $conexion->query($sql);

$conexion->close();
?>