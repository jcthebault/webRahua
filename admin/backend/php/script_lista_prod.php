<?php
include 'conn.php';

$sql = "SELECT * FROM stock"; 
$resultado = $conexion->query($sql);

$conexion->close();
?>