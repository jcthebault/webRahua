<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anta&family=Lemon&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Salsa&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <!--Style Sheets-->
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/general.css">
    <link rel="stylesheet" href="../../assets/css/mq.css">
    <!--Scrips-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../../assets/js/producto_carro.js"></script>
    <title>Rauha!</title>
</head>

<body>
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
            <a class="navegacion__enlaces--link wid_nav" href="productos.php">Productos</a>
            <a class="navegacion__enlaces--link wid_nav" href="../forms/contacto.php">Contacto</a>
            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['usuario_nick'])) {
                // Si el usuario ha iniciado sesión, muestra el nombre de usuario y el enlace para cerrar sesión
                echo '<a class="navegacion__enlaces--link wid_nav" href="carrito.php">Carrito</a>';
            } 
            ?>
            <!-- Cambio de icono -->
            <?php
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
        <h2 class="titulo_style">productos</h2>
    </div>
    <main class="mainProd">
        <!-- I- Contenedor-->
        <div class="contenedor_producto">
            <!--INICIO CONTENEDOR-->
            <?php
    include '../../backend/php/script_producto.php';
    if ($resultado->num_rows > 0) {
        while ($producto = $resultado->fetch_assoc()) {
            echo '<div class="contenedor_php">';
            echo '<p id="idprod_' . $producto['id_prod'] . '">' . $producto['id_prod'] . '</p>';
            echo '<p>';
            $icod = base64_encode($producto['image_prod']);
            $img = '<img class="contenedor_php--imagen" src="data:image/jpeg;base64,' . $icod . '" alt="' . $producto['nombre_prod'] . '">';
            echo $img;
            echo '</p>';
            echo '<h3 id="nombreProducto_' . $producto['id_prod'] . '">' . $producto['nombre_prod'] . '</h3>';
            echo '<p id="descProducto_' . $producto['id_prod'] . '">Descripción:' . $producto['descripcion_prod'] . '</p>';
            echo '<p id="precioProducto_' . $producto['id_prod'] . '">$' . $producto['precio_prod'] . '</p>';

            echo '<form id="agregar_compras_' . $producto['id_prod'] . '" method="post" action="../pages/carrito.php">';
            if (isset($_SESSION['usuario_nick'])) {
                echo '<button class="btn" type="button" onclick="disminuirCantidad(' . $producto['id_prod'] . ')">-</button>';
                echo '<input id="cantProducto_' . $producto['id_prod'] . '" style="text-align: center;" type="number" name="cantidad" value="1" min="1" max="' . $producto['cantidad_prod'] . '" required>';
                echo '<button class="btn" type="button" onclick="aumentarCantidad(' . $producto['id_prod'] . ')">+</button>';
                echo '<button id="btn_agregar_' . $producto['id_prod'] . '" type="button" onclick="agregarAlCarrito(' . $producto['id_prod'] . ')" class="btn__style">Agregar</button>';
            } else {
                echo '<p>Inicie sesión</p>';
            }
                
            echo '</form>';
            echo '</div>';
        }
    } else {
        echo "No hay productos disponibles";
    }
?>


            <!--FIN CONTENEDOR-->
        </div>
        <!-- F- Contendor-->
    </main>
    <footer class="footer">
        <p class="footer_parrafo">Todos los derechos reservados (R)</p>
        <span class="footer__parrafo--nombre">Carolina</span>
    </footer>

</body>

</html>