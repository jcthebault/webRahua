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
    <!-- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+10&display=swap" rel="stylesheet">


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
                <span class="">Hola</span>
                <p class="header__subtitulo salsa">Maquillaje y cuidado personal</p>
            </div>
        </div>        
    </header><!--Header-->
    <nav class="navegacion">
        <div class="navegacion__enlaces" >
            <a class="navegacion__enlaces--link wid_nav" href="index.php">Inicio</a>
            <a class="navegacion__enlaces--link wid_nav" href="views/pages/productos.php">Productos</a>
            <a class="navegacion__enlaces--link wid_nav" href="views/forms/contacto.php">Contacto</a>
                <a class="navegacion__enlaces--link wid_nav-img" href="views/pages/carrito.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart-copy" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M11.5 17h-5.5v-14h-2" />
                        <path d="M6 5l14 1l-1 7h-13" />
                        <path d="M15 19l2 2l4 -4" />
                      </svg>
                </a>
                <a class="navegacion__enlaces--link wid_nav-img" href="views/forms/login.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                </a>
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
                            echo  '<h4 class="main__section--subtitulo">' . $producto['titulo_importante'] . '</h4>';
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
                            echo  '<h4 class="main__section--subtitulo">' . $producto['titulo_novedad'] . '</h4>';
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
                            echo  '<h4 class="main__section--subtitulo">' . $producto['titulo_sorteo'] . '</h4>';
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