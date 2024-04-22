<?php
include 'conn.php';

$sql = "SELECT * FROM sorteo"; 
$resultado = $conexion->query($sql);

$conexion->close();
?>