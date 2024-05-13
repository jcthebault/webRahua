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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../../assets/js/producto_carro.js"></script>
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
            <a class="navegacion__enlaces--link wid_nav" href="../pages/carrito.php">Carrito</a>
            <!-- Cambio de icono -->
            <?php
            session_start();
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['usuario_nick'])) {
                // Si el usuario ha iniciado sesión, muestra el nombre de usuario y el enlace para cerrar sesión
                echo '<a class="navegacion__enlaces--link wid_nav" href="user.php" >' . $_SESSION['usuario_nick'] . '</a>';
            } else {
                // Si el usuario no ha iniciado sesión, muestra el enlace de inicio de sesión
                echo '<a class="navegacion__enlaces--link wid_nav" href="../forms/login.php">sesion</a>';
            }
            ?>
        </div>
    </nav><!--Nav-->
    <div class="titulo">
        <h2 class="titulo_style">carrito</h2>
    </div>
    <main class="mainCar">
        <section class="comprasCarr">
            <form class="formulario_compras" method="POST" action="../../backend/php/script_carro.php">
                <table id="cartTable" class="table_carr">
                    <thead class="table_thead" id="tr_body">
                        <tr class="tr_thead">
                            <th class="th_tr-thead">Codigo</th>
                            <th class="th_tr-thead">Nombre</th>
                            <th class="th_tr-thead">$. Unitario</th>
                            <th class="th_tr-thead">Cantidad</th>
                            <th class="th_tr-thead">Subtotal</th>
                            <th class="th_tr-thead">Quitar</th>
                        </tr>
                    </thead>
                    <tbody id="cartBody" class="table_tbody">
                        <!-- Contenido dinámico del carrito -->
                    </tbody>
                </table>
                <div class="bajoTabla"><!-- Totales -->
                    <div class="totalesTabla">
                        <div id="totalPrecios">

                        </div>
                        <div id="totalProductos">

                        </div>
                    </div><!-- Totales -->
                </div>
                    <button id="btnComprar" type="submit" class="btn_general">Comprar</button>
            </form>
        </section>
        <!--Carrito-->
    </main>
    <footer class="footer">
        <p class="footer_parrafo">Todos los derechos reservados (R)</p>
        <span class="footer__parrafo--nombre">Carolina</span>
    </footer>

</body>

</html>