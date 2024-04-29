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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../../assets/js/resg.js"></script>
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
            <a class="navegacion__enlaces--link wid_nav" href="../pages/productos.php">Productos</a>
            <a class="navegacion__enlaces--link wid_nav" href="contacto.php">Contacto</a>
            <a class="navegacion__enlaces--link wid_nav" href="../pages/carrito.php">Carrito</a>
            <a class="navegacion__enlaces--link wid_nav" href="login.php">sesion</a>
        </div>
    </nav><!--Nav-->
    <div class="titulo">
        <h2 class="titulo_style">registro</h2>
    </div>
    <main class="mainReg">
        <!--INICIO Registro-->
        <div class="formulario__contenedor">
        <legend>Complete los campos solicitados</legend>
            <form class="formulario_grid" action="../../backend/php/script_registro.php" method="post" id="resg_form">
                <!-- USUARIO 1 -->
                <div class="campo_r">
                    <input type="text" name="usuario_r" id="usuario_r" placeholder="Nombre de Usuario">
                </div>
                <!-- CONTRASEÑA 2 -->
                <div class="campo_r">
                    <input type="password" name="contra_r" id="contra_r" placeholder="Contraseña">
                </div>
                <!-- APELLIDO 3 -->
                <div class="campo_r">
                    <input type="text" name="apellido_r" id="apellido_r" placeholder="Apellido">
                </div>
                <!-- NOMBRE 4 -->
                <div class="campo_r">
                    <input type="text" name="nombre_r" id="nombre_r" placeholder="Nombre">
                </div>
                <!-- MAIL 5 -->
                <div class="campo_r">
                    <input type="text" name="corre_r" id="corre_r" placeholder="Correo Electronico">
                </div>
                <!-- TELEFONO 6 -->
                <div class="campo_r">
                    <input type="text" name="telefono_r" id="telefono_r" placeholder="Telefono/Celular">
                </div>
                <!-- DIRECCIÓN 7 -->
                <div class="campo_r">
                    <input list="calles_js" type="text" name="direccion_r" id="direccion_r" placeholder="Dirección">
                    <datalist id="calles_js">
                        <!-- Las opciones se agregarán dinámicamente desde JavaScript -->
                        </datalist>
                </div>
                <!-- NUMERO CASA 8 -->
                <div class="campo_r">
                    <input type="text" name="numcasa_r" id="numcasa_r" placeholder="Número">
                </div>
                <!-- LOCALIDAD 9 -->
                <div class="campo_r">
                    <input list="localidad_js" type="text" name="localidad_r" id="localidad_r"  placeholder="Localidad">
                        <datalist id="localidad_js">
                        <!-- Las opciones se agregarán dinámicamente desde JavaScript -->
                        </datalist>
                </div>
                <!-- PARTIDO 10 -->
                <div class="campo_r">
                    <input list="localidad_js" type="text" name="partido_r" id="partido_r" placeholder="Partido/Municipio">
                    <datalist id="localidad_js">
                        <!-- Las opciones se agregarán dinámicamente desde JavaScript -->
                    </datalist>
                </div>
                <!-- PROVINCIA 11 -->
                <div class="campo_r">
                    <input list="provincia_js" type="text" name="provincia_r" id="provincia_r" placeholder="Provincia">
                    <datalist id="provincia_js">
                        <!-- Las opciones se agregarán dinámicamente desde JavaScript -->
                    </datalist>
                </div>
                <!-- Botones 12 -->
                <div class=" campo_r btn__form--reg">
                    <button class="btn_general--1" >Enviar</button>
                    <button class="btn_general--1" >Vaciar</button>
                </div>
            </form>
        </div>
        <!--fin Registro-->
    </main>
    <footer class="footer">
        <p class="footer_parrafo">Todos los derechos reservados (R)</p>
        <span class="footer__parrafo--nombre">Carolina</span>
    </footer>

</body>

</html>