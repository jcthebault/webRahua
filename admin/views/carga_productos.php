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
    <script src="../assets/js/carga_producto.js"></script>
    <script src="../assets/js/editar_producto.js"></script>
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
                <a class="navegacion__enlaces--link navegador__enlaces--hover" href="carga_productos.php">productos</a>
                <a class="navegacion__enlaces--link navegador__enlaces--hover" href="lista_pedidos.php">pedidos</a>
                <a class="navegacion__enlaces--link navegador__enlaces--hover" href="ganancias.php">montos</a>
                <a class="navegacion__enlaces--link navegador__enlaces--hover" href="novedades.php">novedades</a>
            </div>
        </nav>
    </div>
    <div class="contenedor_main">
        <main class="mainProd">
            <div class="form_prod">
                <h3>Carga de Productos</h3>
                <?php
                include '../backend/php/conn.php';
                // Obtener el último número de producto cargado
                $sqlUltimoNumero = "SELECT MAX(id_prod) AS last_id FROM stock";
                $resultadoUltimoNumero = $conexion->query($sqlUltimoNumero);
                if ($resultadoUltimoNumero->num_rows > 0) {
                    $rowUltimoNumero = $resultadoUltimoNumero->fetch_assoc();
                    // Obtener el último número de producto cargado
                    $ultimoNumero = $rowUltimoNumero['last_id'];
                    // Mostrar el último número de producto en el HTML
                    echo "<p>El último número de producto cargado es: $ultimoNumero</p>";
                } else {
                    echo "No se encontraron resultados.";
                }
                ?>
                <form class="grid_form" action="../backend/php/script_carga_producto.php" method="post" enctype="multipart/form-data">
                    <!--
                    <div class="id_prod">
                        <label for="producto_id">Id Producto</label>
                        <input type="number" name="producto_id" id="producto_id">
                    </div>-->
                    <div class="img_prod">
                        <label for="producto_id">Imagen</label>
                        <input type="file" name="img_prod" id="img_prod">
                    </div>
                    <div class="nombre_prod">
                        <label for="nombre_prod">Nombre</label>
                        <input type="text" name="nombre_prod" id="nombre_prod">
                    </div>
                    <div class="descripcion_prod">
                        <label for="descripcion_prod">Descripcion</label>
                        <textarea name="descripcion_prod" id="descripcion_prod" cols="30" rows="10"></textarea>
                    </div>
                    <div class="precio_prod">
                        <label for="precio_prod">Precio $</label>
                        <input type="number" name="precio_prod" id="precio_prod">
                    </div>
                    <div class="cantidad_prod">
                        <label for="cantidad_prod">Cantidad</label>
                        <input type="number" name="cantidad_prod" id="cantidad_prod">
                    </div>
                    <div class="btn_prod">
                        <button type="submit" class="btn_general-1">Agregar</button>
                    </div>
                </form>
            </div>
            <!--Tabla productos -->
            <div class="table_prod">
                <?php
                include '../backend/php/script_lista_prod.php';
                if ($resultado->num_rows > 0) {
                    // Comienza la tabla HTML
                    echo '<table class="form_table">';
                    echo '<div class= "thead_background">';
                    echo '<thead class="thead">';
                    echo '<tr>';
                    echo '<th>ID</th>';
                    echo '<th>Imagen</th>';
                    echo '<th>Nombre</th>';
                    echo '<th>Descripción</th>';
                    echo '<th>Precio</th>';
                    echo '<th>Cantidad</th>';
                    echo '<th>Editar</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '</div>';
                    echo '<div class= "tbody_scroll">';
                    echo '<tbody class="tbody">';
                    while ($producto = $resultado->fetch_assoc()) {
                        echo '<tr class="trbody">';
                        echo '<td style="text-align:center;">' . $producto['id_prod'] . '</td>';
                        echo '<td style="text-align:center;">';
                        $icod = base64_encode($producto['image_prod']);
                        $img = '<img class="contenedor_php--imagen" src="data:image/jpeg;base64,' . $icod . '" alt="' . $producto['nombre_prod'] . '">';
                        echo $img;
                        echo '</td>';
                        echo '<td style="text-align:center;">' . $producto['nombre_prod'] . '</td>';
                        echo '<td style="text-align:justify;">' . $producto['descripcion_prod'] . '</td>';
                        echo '<td style="text-align:center;">$' . $producto['precio_prod'] . '</td>';
                        echo '<td style="text-align:center;">' . $producto['cantidad_prod'] . ' unidad/es</td>';
                        echo '<td style="text-align:center;"><button class="btn_general" onclick="openEditForm()">Editar</button></td>';
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</div>';
                    echo '</table>';
                } else {
                    echo "No se encontraron registros en la tabla 'stock'.";
                }
                ?>
            </div>
           <!--FORMULARIO DE EDICION -->
                <div id="editPopupForm" class="popup-form-container" onclick="closeEditForm()">
                    <div class="popup-form" onclick="event.stopPropagation()">
                        <!-- Contenido del formulario de edición -->
                        <h2>Editar Producto</h2>
                        <form action="actualizar_producto.php" method="post" enctype="multipart/form-data">
                            <div class="id_prod">
                                <label for="edit_producto_id">Id Producto</label>
                                <input type="number" name="edit_producto_id" id="edit_producto_id" readonly>
                            </div>
                            <div class="img_prod">
                                <label for="edit_img_prod">Imagen</label>
                                <input type="file" name="edit_img_prod" id="edit_img_prod">
                            </div>
                            <div class="nombre_prod">
                                <label for="edit_nombre_prod">Nombre</label>
                                <input type="text" name="edit_nombre_prod" id="edit_nombre_prod">
                            </div>
                            <div class="descripcion_prod">
                                <label for="edit_descripcion_prod">Descripción</label>
                                <textarea name="edit_descripcion_prod" id="edit_descripcion_prod" cols="30" rows="10"></textarea>
                            </div>
                            <div class="precio_prod">
                                <label for="edit_precio_prod">Precio $</label>
                                <input type="number" name="edit_precio_prod" id="edit_precio_prod">
                            </div>
                            <div class="cantidad_prod">
                                <label for="edit_cantidad_prod">Cantidad</label>
                                <input type="number" name="edit_cantidad_prod" id="edit_cantidad_prod">
                            </div>
                            <div class="btn_prod">
                                <button onclick="closeEditForm()">Cancelar</button>
                                <button type="submit">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
        </main>
    </div>

    <div class="contenedor__footer">
        <footer class="footer">
            <p class="footer__parrafo">Todos los derechos reservados<span class="footer__span">Y la queso</span></p>

        </footer>
    </div>

</body>

</html>