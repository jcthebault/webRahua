<?php
include 'conn.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $id_producto = $_POST["edit_producto_id"];
    $nombre = $_POST["edit_nombre_prod"];
    $descripcion = $_POST["edit_descripcion_prod"];
    $precio = $_POST["edit_precio_prod"];
    $cantidad = $_POST["edit_cantidad_prod"];
    
    $sql = "UPDATE stock SET nombre_prod='$nombre', descripcion_prod='$descripcion', precio_prod='$precio', cantidad_prod ='$cantidad' WHERE id_prod='$id_producto'";

    if($conexion->query($sql)=== TRUE){
        echo "Producto cargado correctamente";
        header("Location: {$_SERVER['HTTP_REFERER']}"); // Redireccionar a la página anterior
        exit(); // Asegurar que el script no siga ejecutándose después de la redirección
    }else {
      echo "Error al cargar el producto: " . $stmt->error;
    }

    $conexion->close();
}
