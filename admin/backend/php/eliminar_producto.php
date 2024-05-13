<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $productoId = $_POST["id_producto"];
    
    // Eliminar el producto de la base de datos
    $sql = "DELETE FROM stock WHERE id_prod = $productoId";

    if ($conexion->query($sql) === TRUE) {
        // Si la eliminación fue exitosa, devolver una respuesta satisfactoria
        echo "Producto eliminado correctamente";
    } else {
        // Si ocurrió un error durante la eliminación, devolver un mensaje de error
        echo "Error al eliminar el producto: " . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>
