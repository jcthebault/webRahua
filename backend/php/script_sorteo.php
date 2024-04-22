<?php
include 'database.php';

$sql = "SELECT * FROM sorteo"; 
$resultado = $conexion->query($sql);

$conexion->close();
?>