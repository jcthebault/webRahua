<?php
include 'conn.php';

// Iniciar sesión
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $adminUser = $_POST['admin_user'];
    $adminPass = $_POST['admin_pass'];
    // Crear un array para almacenar mensajes de error
    $adminErr = [];
    // Comprobar si los campos están vacíos
    if(empty($adminUser)) $adminErr[] = "--> Usuario";
    if(empty($adminPass)) $adminErr[] = "--> Contraseña";

    // Si hay errores, almacenar el mensaje de error en una variable de sesión y redirigir al usuario al formulario de inicio de sesión
    if(!empty($adminErr)) {
        $_SESSION['error'] = "Datos incompletos: \n" . implode("\n", $adminErr);
        header("Location: ../../index.php");
        exit();
    }

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM administrador WHERE usuario_admin='$adminUser' AND pass_admin='$adminPass'";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        // Usuario y contraseña válidos, redireccionar al usuario
        header("Location: ../../views/inicio.php");
        exit();
    } else {
    // Usuario o contraseña incorrectos
        $_SESSION['error'] = "Usuario o contraseña incorrectos";
        echo "<script>alert('El error es: {$_SESSION['error']}');</script>";
        header("Location: ../../index.php");
        exit();
    }


    // Cerrar la conexión
    $conexion->close();
}
?>