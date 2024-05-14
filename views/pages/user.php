<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Lemon&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Salsa&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <!--Style Sheets-->
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/general.css">
    <link rel="stylesheet" href="../../assets/css/mq.css">
    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../assets/js/enviar_pedido.js"></script>
    <title>Rauha!</title>
</head>

<body class="the_body">
    <header class="header header_grid">
        <div class="header__img">
            <img src="../../assets/img/rahua_logo.png" alt="Logo Rahua Web">
        </div>
        <div class="header__div">
            <div style="text-align: center;">
                <h1 class="header__titulo lemon">Rauha!</h1>
                <p class="header__subtitulo salsa">Maquillaje y cuidado personal</p>
            </div>
        </div>
    </header><!--Header-->
    <nav class="navegacion">
        <div class="navegacion__enlaces">
            <a class="navegacion__enlaces--link wid_nav" href="../../index.php">Inicio</a>
            <a class="navegacion__enlaces--link wid_nav" href="../pages/productos.php">Productos</a>
            <a class="navegacion__enlaces--link wid_nav" href="../forms/contacto.php">Contacto</a>
            <a class="navegacion__enlaces--link wid_nav" href="../pages/carrito.php">carrito</a>
            <!-- Cambio de icono -->
            <?php
            session_start();
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['usuario_nick'])) {
                // Si el usuario ha iniciado sesión, muestra el nombre de usuario y el enlace para cerrar sesión
                echo '<a class="navegacion__enlaces--link wid_nav" href="user.php" >' . $_SESSION['usuario_nick'] . '</a>';
            } else {
                // Si el usuario no ha iniciado sesión, muestra el enlace de inicio de sesión
                echo '<a class="navegacion__enlaces--link wid_nav" href="../forms/login.php">Sesion</a>';
            }
            ?>
        </div>
    </nav><!--Nav-->
    <div class="titulo">
        <h2 class="titulo_style">Perfil usuario</h2>
    </div>
    <main class="mainUser">
        <div class="usuarioLogin">
            <h3>Hola<i><?php echo $_SESSION['usuario_nick']; ?></i></h3>
            <main>
                <div class="datosPersonales">
                    <h2>Datos personales</h2>
                    <form action="../../backend/php/actualizar_perfil.php" method="POST">
                        <?php include '../../backend/php/obtener_perfil.php'; ?>
                        <div class="campoEdicion">
                            <label for="apellido">Apellido:</label>
                            <input type="text" id="apellido" name="apellido" value="<?php echo $usuario_apellido; ?>">
                        </div>
                        <div class="campoEdicion">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" value="<?php echo $usuario_nombre; ?>">
                        </div>
                        <div class="campoEdicion">
                            <label for="correo">Correo electrónico:</label>
                            <input type="email" id="correo" name="correo" value="<?php echo $usuario_correo; ?>">
                        </div>
                        <div class="campoEdicion">
                            <label for="telefono">Teléfono:</label>
                            <input type="text" id="telefono" name="telefono" value="<?php echo $usuario_telefono; ?>">
                        </div>
                        <div class="campoEdicion">
                            <label for="direccion">Dirección:</label>
                            <input type="text" id="direccion" name="direccion" value="<?php echo $usuario_direccion; ?>">
                        </div>
                        <div class="campoEdicion">
                            <label for="numcasa">Número de casa:</label>
                            <input type="text" id="numcasa" name="numcasa" value="<?php echo $usuario_numcasa; ?>">
                        </div>
                        <div class="campoEdicion">
                            <label for="localidad">Localidad:</label>
                            <input type="text" id="localidad" name="localidad" value="<?php echo $usuario_localidad; ?>">
                        </div>
                        <div class="campoEdicion">
                            <label for="partido">Partido:</label>
                            <input type="text" id="partido" name="partido" value="<?php echo $usuario_partido; ?>">
                        </div>
                        <div class="campoEdicion">
                            <label for="provincia">Provincia:</label>
                            <input type="text" id="provincia" name="provincia" value="<?php echo $usuario_provincia; ?>">
                        </div>
                        <input type="submit" value="Actualizar Datos">
                    </form>

                </div>
                <div class="historialCompras">
                    <h2>Historial de Compras</h2>
                    <?php
                    include '../../backend/php/script_user.php';
                    echo '<div class="div_historial">';
                        if (mysqli_num_rows($resultado_carrito) > 0) {

                            echo "<div>";
                            while ($fila_carrito = mysqli_fetch_assoc($resultado_carrito)) {
                                echo "<div>" . $fila_carrito['nombre_prod'] . " - $" . $fila_carrito['precio_prod'] . "</div>";
                            }
                            echo "</div>";
                        } else {
                            echo "El usuario no tiene productos en el carrito.";
                        }
                    echo "</div>";
                    ?>
                </div>
            </main>
            <a href="../../backend/php/logout.php">Cerrar Sesion</a>
        </div>
        <div class="datosPersonales">
        </div>
    </main>
    <footer class="footer">
        <p class="footer_parrafo">Todos los derechos reservados (R)</p>
        <span class="footer__parrafo--nombre">Carolina</span>
    </footer>

</body>

</html>