<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$dbase = "rauhadb";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn = new mysqli($host,$user,$pass,$dbase);

    if($conn->connect_error){
        die("Error de conexion: " . $conn->connect_error);
    }

    $usuario = $conn->real_escape_string($_POST['usuario_nick']);
    $contrasena = $conn->real_escape_string($_POST['usuario_pass']);

    $sql = "SELECT * FROM usuario WHERE usuario_id='$usuario' AND usuario_pass='$contrasena'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $_SESSION['usuario_id']=$usuario;
        header("location: ../../../../index.php");
    } else {
        echo "Nombre de usuario y contraseña incorrectos";
    }

    $conn->close();
}
?>
