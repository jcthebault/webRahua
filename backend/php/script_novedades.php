<?php
include 'database.php';

$sql = "SELECT * FROM novedades"; 
$resultado = $conexion->query($sql);

$conexion->close();
?>