<!DOCTYPE html>
<html lang="en">
<head>
    <!-- INDEX -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Lemon&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Salsa&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <!--Style Sheets-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/mq.css">
    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="/assets/js/main.js"></script>
    <title>Rauha!</title>
</head>
<body>
    <header class="header header_grid">
        <div class="header__img">
            <img src="assets/img/rahua_logo.png" alt="Logo Rahua Web">
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
            <a class="navegacion__enlaces--link wid_nav" href="index.php">Inicio</a>
            <a class="navegacion__enlaces--link wid_nav" href="views/pages/productos.php">Productos</a>
            <a class="navegacion__enlaces--link wid_nav" href="views/forms/contacto.php">Contacto</a>
            <a class="navegacion__enlaces--link wid_nav" href="views/pages/carrito.php">Carrito</a>
            <!-- Cambio de icono -->
            <?php
            session_start();
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['usuario_nick'])) {
                // Si el usuario ha iniciado sesión, muestra el nombre de usuario y el enlace para cerrar sesión
                echo '<a class="navegacion__enlaces--link wid_nav" href="views/pages/user.php" >' . $_SESSION['usuario_nick'] . '</a>';
            } else {
                // Si el usuario no ha iniciado sesión, muestra el enlace de inicio de sesión
                echo '<a class="navegacion__enlaces--link wid_nav" href="views/forms/login.php">sesion</a>';
            }
            ?>
        </div>
    </nav><!--Nav-->
    <div class="titulo">
        <h2 class="titulo_style">inicio</h2>
        <div id="inicio2"></div>
    </div>
    <main class="main">
        <div class="main__cont--1">
            <h2 class="main__section--titulo">Importante</h2>
            <section class="main__section">
                <?php
                include 'backend/php/script_importante.php';
                if ($resultado->num_rows > 0) {
                    // Comienza la tabla HTML
                    while ($producto = $resultado->fetch_assoc()) {
                        echo '<div class="main__section--banner">';
                        echo '<h4 class="main__section--subtitulo">' . $producto['titulo_importante'] . '</h4>';
                        echo '<p class="main__section--parrafo">' . nl2br($producto['cuerpo_importante']) . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo "No se encontraron registros en la sección IMPORTANTE.";
                }

                ?>

            </section>
        </div>
        <div class="main__cont--2">
            <h2 class="main__section--titulo">Novedades</h2>
            <section class="main__section">
                <?php
                include 'backend/php/script_novedades.php';
                if ($resultado->num_rows > 0) {
                    // Comienza la tabla HTML
                    while ($producto = $resultado->fetch_assoc()) {
                        echo '<div class="main__section--banner">';
                        echo '<h4 class="main__section--subtitulo">' . $producto['titulo_novedad'] . '</h4>';
                        echo '<p class="main__section--parrafo">' . nl2br($producto['cuerpo_novedad']) . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo "No se encontraron registros en la sección NOVEDADES.";
                }
                ?>
            </section>
        </div>

        <div class="main__cont--3">
            <h2 class="main__section--titulo">Sorteos</h2>
            <section class="main__section">
                <?php
                include 'backend/php/script_sorteo.php';
                if ($resultado->num_rows > 0) {
                    // Comienza la tabla HTML
                    while ($producto = $resultado->fetch_assoc()) {
                        echo '<div class="main__section--banner">';
                        echo '<h4 class="main__section--subtitulo">' . $producto['titulo_sorteo'] . '</h4>';
                        echo '<p class="main__section--parrafo">' . nl2br($producto['cuerpo_sorteo']) . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo "No se encontraron registros en la sección SORTEOS.";
                }
                ?>
            </section>
        </div>
    </main>
    <footer class="footer">
        <p class="footer_parrafo">Todos los derechos reservados (R)</p>
        <span class="footer__parrafo--nombre">Carolina</span>
    </footer>

</body>

</html>