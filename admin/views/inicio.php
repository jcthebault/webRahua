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
    <div class="contenedor__main">
        <main class="main">
            <div class="main__section">
                <section class="section__productos">
                    <h2 class="section__titulo">productos</h2>
                    <div class="productos_totales">
                        <div class="vendidos">
                            <h4>Productos vendidos</h4>
                            <div class="scroll_general">

                            </div>
                        </div>
                        <div class="sinStock">
                            <h4>Productos sin Stock</h4>
                            <div class="scroll_general">
                                
                            </div>
                        </div>
                        <div class="reponerStock">
                            <h4>Pendientes de reponer</h4>
                            <div class="scroll_general">
                                
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section__pedidos">
                    <h2 class="section__titulo">pedidos pendientes</h2>

                </section>
                <section class="section__montos">
                    <h2 class="section__titulo">gastos y ganancias</h2>
                    <div class="contenedor_grid">
                        <div class="gastos">
                            <h4>gasto total</h4>
                        </div>
                        <div class="ganancia">
                            <h4>ganancias</h4>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
    <div class="contenedor__footer">
        <footer class="footer">
            <p class="footer__parrafo">Todos los derechos reservados - Prueba de Fallos (R)</p>
            <span class="footer__span">Y la queso</span>
        </footer>
    </div>
</body>
</html>