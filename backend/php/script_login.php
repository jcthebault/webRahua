<?php
session_start();
include 'database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar conexión
    $conn = new mysqli($host, $user, $pass, $dbase);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    // Escapar datos del formulario
    $usuario = $conn->real_escape_string($_POST['usuario']);
    $contrasena = $conn->real_escape_string($_POST['password']);
    // Consulta SQL con consulta preparada
    $sql = "SELECT * FROM usuario WHERE usuario_nick = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    // Verificar si se encontró el usuario y verificar la contraseña
    if ($result->num_rows > 0) {
        $fila = $result->fetch_assoc();
        if (password_verify($contrasena, $fila['usuario_pass'])) {
            // Iniciar sesión y redirigir al usuario
            $_SESSION['usuario_nick'] = $usuario;
            echo "success";
            exit();
        } else {
            echo "Nombre de usuario y contraseña incorrectos";
        }
    } else {
        echo "Nombre de usuario y contraseña incorrectos";
    }

    $conn->close();
}
?>
