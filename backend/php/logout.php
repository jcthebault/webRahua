<?php
session_start();
// Destruir todas las variables de sesión
$_SESSION = array();
// Finalmente, destruir la sesión
session_destroy();
// Redirigir a la página de inicio
header("Location: ../../index.php");
exit();
?>
