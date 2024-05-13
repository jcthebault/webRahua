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
            <h3>Hola <i> <?php echo $_SESSION['usuario_nick'];?></i> bienvenido a tu perfil</h3>
            <main>
                <div class="datosPersonales">
                    <h2>Datos personales</h2>
                </div>
                <div class="historialCompras">
                    <h2>Historial</h2>
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