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
    <script src="../../assets/js/carrito.js"></script>
    <script defer src="../../assets/js/checkout.js"></script>
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
                <a class="navegacion__enlaces--link wid_nav-img" href="../pages/carrito.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart-copy" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M11.5 17h-5.5v-14h-2" />
                        <path d="M6 5l14 1l-1 7h-13" />
                        <path d="M15 19l2 2l4 -4" />
                      </svg>
                </a>
            <!-- Cambio de icono -->
            <?php
            session_start();
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['usuario_nick'])) {
                // Si el usuario ha iniciado sesión, muestra el nombre de usuario y el enlace para cerrar sesión
                echo '<div class="usuario_logueado">';
                echo '<span>Bienvenido, ' . $_SESSION['usuario_nick'] . '!</span><br>';
                echo '<a href="../../backend/php/logout.php">Cerrar sesión</a>';
                echo '</div>';
            } else {
                // Si el usuario no ha iniciado sesión, muestra el enlace de inicio de sesión
                echo '<a class="navegacion__enlaces--link wid_nav-img" href="../forms/login.php">';
                echo '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">';
                echo '<path stroke="none" d="M0 0h24v24H0z" fill="none" />';
                echo '<path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />';
                echo '<path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />';
                echo '</svg>';
                echo '</a>';
            }
            ?>
        </div>
    </nav><!--Nav-->
        <div class="titulo">
            <h2 class="titulo_style">Perfil usuario</h2>
        </div>
    <main class="mainUser">
        <div class="usuarioLogin">
            <h3>Hola <b> <?php echo $_SESSION['usuario_nick'];?></b> bienvenido a tu perfil</h3>
        </div>

    </main>
    <footer class="footer">
        <p class="footer_parrafo">Todos los derechos reservados (R)</p>
        <span class="footer__parrafo--nombre">Carolina</span>
    </footer>
    
</body>
</html>