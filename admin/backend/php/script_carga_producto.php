<?php
include 'conn.php';

// Verificar si se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST['producto_id'];
    $nombre = $_POST['nombre_prod'];
    $descripcion = $_POST['descripcion_prod'];
    $precio = $_POST['precio_prod'];
    $cantidad = $_POST['cantidad_prod'];


    // Verificar si se recibió una imagen
    if(isset($_FILES['img_prod']) && $_FILES['img_prod']['size'] > 0) {
        // Obtener el contenido de la imagen
        $imagen_contenido = file_get_contents($_FILES['img_prod']['tmp_name']);
    } else {
        // Si no se recibe una imagen, asignar null
        $imagen_contenido = null;
    }

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Cargar a la base de datos
    $sql = "INSERT INTO stock (id_prod, image_prod, nombre_prod, descripcion_prod, precio_prod, cantidad_prod) 
            VALUES (?, ?, ?, ?, ?, ?)";

    // Preparar la declaración
    $stmt = $conexion->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param('isssdi', $id, $imagen_contenido, $nombre, $descripcion, $precio, $cantidad);
    // 'isssdi' indica los tipos de datos de los parámetros en el mismo orden que se encuentran en la consulta SQL.
    // 'i' para integer, 's' para string, 'd' para double.

    // Ejecutar la declaración
    if ($stmt->execute()) {
        echo "Producto cargado correctamente";
        header("Location: {$_SERVER['HTTP_REFERER']}"); // Redireccionar a la página anterior
        exit(); // Asegurar que el script no siga ejecutándose después de la redirección
    }else {
      echo "Error al cargar el producto: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();

    // Cerrar la conexión
    $conexion->close();
} else {
    echo "No se recibieron datos del formulario.";
}
?>
