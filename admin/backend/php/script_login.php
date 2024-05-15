<?php
session_start();

include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminUser = $_POST['admin_user'];
    $adminPass = $_POST['admin_pass'];

    $adminErr = [];
    if(empty($adminUser)) $adminErr[] = "--> Usuario";
    if(empty($adminPass)) $adminErr[] = "--> Contraseña";

    if (!empty($adminErr)) {
        $_SESSION['error'] = "Datos incompletos: \n" . implode("\n", $adminErr);
        header("Location: ../../index.php");
        exit();
    }

    $sql = "SELECT * FROM administrador WHERE usuario_admin='$adminUser' AND pass_admin='$adminPass'";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        header("Location: ../../views/carga_productos.php");
        exit();
    } else {
        $_SESSION['error'] = "Usuario o contraseña incorrectos";
        header("Location: ../../index.php");
        exit();
    }
}
?>
