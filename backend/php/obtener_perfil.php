<?php
include 'database.php';

if(isset($_SESSION["usuario_nick"])) {

    $usuario_nick = $_SESSION["usuario_nick"];

    $sql = "SELECT * FROM usuario WHERE usuario_nick = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $usuario_nick);
    $stmt->execute();
    $resultado = $stmt->get_result();
    
    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        // Obtener los datos del usuario
        $fila = $resultado->fetch_assoc();
        $usuario_id = $fila["usuario_id"];
        $usuario_apellido = $fila["usuario_apellido"];
        $usuario_nombre = $fila["usuario_nombre"];
        $usuario_correo = $fila["usuario_correo"];
        $usuario_telefono = $fila["usuario_telefono"];
        $usuario_direccion = $fila["usuario_direccion"];
        $usuario_numcasa = $fila["usuario_numcasa"];
        $usuario_localidad = $fila["usuario_localidad"];
        $usuario_partido = $fila["usuario_partido"];
        $usuario_provincia = $fila["usuario_provincia"];
    } else {
        // No se encontraron datos del usuario
        echo "No se encontraron datos del usuario.";
    }

    // Cerrar la consulta
    $stmt->close();

}
    ?>
