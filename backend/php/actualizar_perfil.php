<?php
include 'database.php';
session_start();

if (!isset($_SESSION["usuario_nick"])) {
    header("Location: ../../views/forms/login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $apellido = $_POST["apellido"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $numcasa = $_POST["numcasa"];
    $localidad = $_POST["localidad"];
    $partido = $_POST["partido"];
    $provincia = $_POST["provincia"];

    $usuario_nick = $_SESSION["usuario_nick"];

    $sql = "UPDATE usuario SET usuario_apellido = ?, usuario_nombre = ?, usuario_correo = ?, usuario_telefono = ?, usuario_direccion = ?, usuario_numcasa = ?, usuario_localidad = ?, usuario_partido = ?, usuario_provincia = ? WHERE usuario_nick = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssssssss", $apellido, $nombre, $correo, $telefono, $direccion, $numcasa, $localidad, $partido, $provincia, $usuario_nick);

    if ($stmt->execute()) {
        header("Location: ../../views/pages/user.php");
        
    } else {
        echo "Error al actualizar los datos: " . $stmt->error;
    }

    $stmt->close();
}
?>
