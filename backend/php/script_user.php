<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION["usuario_nick"])) {
    include 'database.php';

    $usuario_nick = $_SESSION["usuario_nick"];

    $query = "SELECT usuario_id FROM usuario WHERE usuario_nick = '$usuario_nick'";

    $resultado = mysqli_query($conexion, $query);

    if($resultado) {
        $fila = mysqli_fetch_assoc($resultado);
        $usuario_id = $fila['usuario_id'];
        $query_carrito = "SELECT stock.nombre_prod, stock.precio_prod 
                          FROM carritocompras
                          INNER JOIN stock ON carritocompras.cod_producto = stock.id_prod
                          WHERE carritocompras.cod_usuario = $usuario_id";

        $resultado_carrito = mysqli_query($conexion, $query_carrito);

    } else {
        echo "Error al obtener el ID de usuario.";
    }


    mysqli_close($conexion);
} else {
    echo "El usuario no ha iniciado sesión.";
}
?>
