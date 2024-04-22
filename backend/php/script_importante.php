<?php
include 'database.php';

$sql = "SELECT * FROM importante"; 
$resultado = $conexion->query($sql);

$conexion->close();
?>