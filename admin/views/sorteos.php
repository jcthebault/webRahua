<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Lemon&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Salsa&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../assets/js/main.js"></script>
    <title>Admin-Rauha!</title>
</head>

<body>
    <div class="Contenedor__header">
        <header class="header">
            <div class="header__titulo">
                <h1>Rauha! - Admin</h1>
            </div>
            <div class="header__span">
                <p>Bienvenido al sitio de gestion - Inicio</p>
            </div>
        </header>
    </div>
    <div class="contenedor__navegacion">
        <nav class="navegacion">
            <div class="navegacion__enlaces">
                <a class="navegacion__enlaces--link navegador__enlaces--hover" href="inicio.php">inicio</a>
                <a class="navegacion__enlaces--link navegador__enlaces--hover" href="carga_productos.php">productos</a>
                <a class="navegacion__enlaces--link navegador__enlaces--hover" href="lista_pedidos.php">pedidos</a>
                <a class="navegacion__enlaces--link navegador__enlaces--hover" href="ganancias.php">montos</a>
                <a class="navegacion__enlaces--link navegador__enlaces--hover" href="novedades.php">novedades</a>
                <a class="navegacion__enlaces--link navegador__enlaces--hover" href="sorteos.php">sorteos</a>
                <a class="navegacion__enlaces--link navegador__enlaces--hover" href="avisos.php">avisos</a>
            </div>
        </nav>
    </div>
    <main class="main_main">
        <form action="../backend/php/script_carga_sorteos.php" method="post">
            <div class="titulo_importante">
                <input type="text" name="sorteo_1" id="sorteo_1" placeholder="Ingrese el titulo">
            </div>
            <div class="cuerpo_importante">
                <textarea name="sorteo_2" id="sorteo_2" cols="30" rows="10"></textarea>
            </div>
            <div class="btn_importante">
                <button>CARGAR</button>
            </div>
        </form>
        <?php
        include '../backend/php/script_lista_sorteo.php';
        if ($resultado->num_rows > 0) {
            // Comienza la tabla HTML
            echo '<table class="form_table">';
            echo '<div class= "thead_background">';
            echo '<thead class="thead">';
            echo '<tr>';
            echo '<th>titulo</th>';
            echo '<th>cuerpo</th>';
            echo '<th>opcion</th>';
            echo '</tr>';
            echo '</thead>';
            echo '</div>';
            echo '<div class= "tbody_scroll">';
            echo '<tbody class="tbody">';
            while ($producto = $resultado->fetch_assoc()) {
                echo '<tr class="trbody">';
                echo '<td style="text-align:center;">' . $producto['titulo_sorteo'] . '</td>';
                echo '<td style="text-align:center;">' . $producto['cuerpo_sorteo'] . '</td>';
                echo '<td style="text-align:center;"><button class="btn_general"">Editar</button></td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</div>';
            echo '</table>';
        } else {
            echo "No se encontraron registros en la tabla 'stock'.";
        }
        ?>
    </main>

    <div class="contenedor__footer">
        <footer class="footer">
            <p class="footer__parrafo">Todos los derechos reservados</p>
            <span class="footer__span">Y la queso</span>
        </footer>
    </div>

</body>

</html>