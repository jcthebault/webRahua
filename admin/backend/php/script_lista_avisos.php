<?php
include 'conn.php';

$sql = "SELECT * FROM importante"; 
$resultado = $conexion->query($sql);

$conexion->close();
?>