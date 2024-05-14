<?php
session_start();
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['carrito']) || empty($data['carrito'])) {
    die("Error: Datos de carrito no válidos");
}

include 'database.php'; // Asegúrate de que este archivo tenga la lógica para conectar a la base de datos

if (isset($_SESSION['usuario_nick'])) {
    $sql = "SELECT usuario_id FROM usuario WHERE usuario_nick = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $_SESSION['usuario_nick']);

    if ($stmt->execute()) {
        $stmt->bind_result($usuario_id);
        $stmt->fetch();
        $stmt->close();
    } else {
        echo "Error al ejecutar la consulta: " . $stmt->error;
        exit(); 
    }
} else {
    echo "No se ha iniciado sesión";
    exit();
}

foreach ($data['carrito'] as $producto) {
    $cod_producto = $producto['id'];
    $cantidad = $producto['cantidad']; 

    $sql = "INSERT INTO carritocompras (cod_usuario, cod_producto, cantidad) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("iii", $usuario_id, $cod_producto, $cantidad);

    if ($stmt->execute()) {
        echo "Producto insertado en el carrito correctamente";
    } else {
        echo "Error al insertar producto en el carrito: " . $stmt->error;
    }

    $stmt->close();
}


$conexion->close();
?>
