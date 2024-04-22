<?php
include 'conn.php';

// Verificar si se han enviado los datos del formulario
if(isset($_POST['novedad_1']) && isset($_POST['novedad_2'])) {
    // Obtener los datos del formulario
    $titulo = $_POST['novedad_1'];
    $cuerpo = $_POST['novedad_2'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO novedades (titulo_novedad, cuerpo_novedad) VALUES ('$titulo', '$cuerpo')";

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
