<?php
// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos del formulario están presentes
    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) && isset($_POST['telefono']) && isset($_POST['asunto']) && isset($_POST['mensaje'])) {
        // Recibir datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        // Configurar correo electrónico
        $destinatario = "juliothebault@hotmail.com";
        $asunto_email = "Mensaje de contacto: $asunto";
        $cuerpo_email = "Nombre: $nombre\nApellido: $apellido\nCorreo electrónico: $correo\nTelefono: $telefono\nMensaje:\n$mensaje";

        // Enviar correo electrónico
        if (mail($destinatario, $asunto_email, $cuerpo_email)) {
            echo "¡Correo electrónico enviado con éxito!";
            header("location: ../../views/forms/contacto.php");
            exit;
        } else {
            echo "Hubo un error al enviar el correo electrónico. Por favor, inténtalo de nuevo más tarde.";
        }
    } else {
        echo "Error: Todos los campos del formulario deben ser completados.";
    }
} else {
    echo "Error: El formulario no ha sido enviado correctamente.";
}
?>
