<?php
include 'conn.php';

// Verificar si se han enviado los datos del formulario
if(isset($_POST['sorteo_1']) && isset($_POST['sorteo_2'])) {
    // Obtener los datos del formulario
    $titulo = $_POST['sorteo_1'];
    $cuerpo = $_POST['sorteo_2'];

    // Preparar la consulta SQL utilizando una sentencia preparada
    $sql = "INSERT INTO sorteo (titulo_sorteo, cuerpo_sorteo) VALUES (?, ?)";
    $stmt = $conexion->prepare($sql);

    // Vincular los parámetros y ejecutar la consulta
    $stmt->bind_param("ss", $titulo, $cuerpo);
    if ($stmt->execute()) {
        echo "Aviso cargado correctamente";
        // Redireccionar a una página específica después de la inserción exitosa
        header("Location: {$_SERVER['HTTP_REFERER']}"); // Redireccionar a la página anterior
        exit(); // Asegurar que el script no siga ejecutándose después de la redirección
    } else {
        echo "Error al cargar los datos: " . $conexion->error;
    }

    // Cerrar la sentencia preparada
    $stmt->close();
} else {
    echo "No se han recibido datos del formulario.";
}

// Cerrar la conexión
$conexion->close();
?>
