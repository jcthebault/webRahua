<?php
include 'conn.php';

// Verificar si se han enviado los datos del formulario
if(isset($_POST['aviso_1']) && isset($_POST['aviso_2'])) {
    // Obtener los datos del formulario
    $titulo = $_POST['aviso_1'];
    $cuerpo = $_POST['aviso_'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO importante (titulo_importante, cuerpo_importante) VALUES ('$titulo', '$cuerpo')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Aviso cargado correctamente";
        // Redireccionar a una página específica después de la inserción exitosa
        header("Location: {$_SERVER['HTTP_REFERER']}"); // Redireccionar a la página anterior
        exit(); // Asegurar que el script no siga ejecutándose después de la redirección
    } else {
        echo "Error al cargar los datos: " . $conexion->error;
    }
} else {
    echo "No se han recibido datos del formulario.";
}

// Cerrar la conexión
$conexion->close();
?>
