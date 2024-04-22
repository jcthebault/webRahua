<?php
include '../php/database.php';
// Obtener datos del formulario
$usuario = $_POST['usuario_r'];
$contraseña = $_POST['contra_r'];
$apellido = $_POST['apellido_r'];
$nombre = $_POST['nombre_r'];
$correo = $_POST['corre_r'];
$telefono = $_POST['telefono_r'];
$direccion = $_POST['direccion_r'];
$numcasa = $_POST['numcasa_r'];
$localidad = $_POST['localidad_r'];
$partido = $_POST['partido_r'];
$provincia = $_POST['provincia_r'];

// Validación de correo
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    die("Correo electrónico inválido");
}

// Encriptar la contraseña (puedes usar una función de hash más segura según tus necesidades)
$contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

// Insertar datos en la base de datos
$sql = "INSERT INTO usuario (usuario_nick, usuario_pass, usuario_apellido, usuario_nombre, usuario_correo, usuario_telefono, usuario_direccion, usuario_numcasa, usuario_localidad, usuario_partido, usuario_provincia) 
        VALUES ('$usuario', '$contraseña_encriptada', '$apellido', '$nombre', '$correo' , '$telefono', '$direccion', '$numcasa', '$localidad', '$partido', '$provincia')";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario registrado exitosamente";
} else {
    echo "Error al registrar el usuario: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>