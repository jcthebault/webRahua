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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../../assets/js/contacto.js"></script>
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
            <!-- Cambio de icono -->
            <?php
            session_start();
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['usuario_nick'])) {
                // Si el usuario ha iniciado sesión, muestra el nombre de usuario y el enlace para cerrar sesión
                echo '<a class="navegacion__enlaces--link wid_nav" href="../pages/user.php" >' . $_SESSION['usuario_nick'] . '</a>';
            } else {
                // Si el usuario no ha iniciado sesión, muestra el enlace de inicio de sesión
                echo '<a class="navegacion__enlaces--link wid_nav" href="login.php">sesion</a>';
            }
            ?>
        </div>
    </nav><!--Nav-->
    <div class="titulo">
        <h2 class="titulo_style">contacto</h2>
    </div>
    <main class="mainCont">
       <!--Contacto-->
       <div class="contenedor">
        <div class="formulario">
            <h3 style="padding: 1rem 0; margin-left:1rem; color:white; text-align: center; text-decoration: underline; ">Complete todos los campos</h3>
            <form id="form_cont" class="form" action="">
                <div class="contenedor__campos">
                    <div class="campo">
                        <label for="nombre">Nombre</label>
                        <input class="input__text" type="text" name="nombre" id="nombre">
                    </div>
                    <div class="campo">
                        <label for="apellido">Apellido</label>
                        <input class="input__text" type="text" name="apellido" id="apellido">
                    </div>
                    <div class="campo">
                        <label for="correo">Correo</label>
                        <input class="input__text" type="email" name="correo" id="correo">
                    </div>
                    <div class="campo">
                        <label for="telefono">Teléfono</label>
                        <input class="input__text" type="number" name="telefono" id="telefono">
                    </div>
                    <div class="campo">
                        <label for="asunto">Asunto</label>
                        <input class="input__text" type="text" name="asunto" id="asunto">
                    </div>
                    <div class="campo">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="input__text" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form__botones">
                    <button class="btn_general" type="submit">Enviar</button>
                    <button class="btn_general" type="reset">Limpiar</button>
                </div>
            </form>
        </div><!--Formulario-->
        <div class="redesSociales">
            <div class="contenedor_social">
                <a href="https://www.facebook.com/profile.php?id=100073164142806" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e7a3ae" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                    </svg>
                </a>
            </div>
            <div class="contenedor_social">
                <a href="https://www.instagram.com/rauha_laplata/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e7a3ae" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M16.5 7.5l0 .01" />
                    </svg>
                </a>
            </div>
            <div class="contenedor_social">
                <a href="http://api.whatsapp.com/send?phone=+541162915562&text=Hola! Como estas? Mi consulta es..." target="_blank" >
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e7a3ae" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                    </svg>
                </a>
            </div>

        </div><!--RedesSociales-->
       </div><!--Form_contenedor-->
       
    </main>
    <footer class="footer">
        <p class="footer_parrafo">Todos los derechos reservados (R)</p>
        <span class="footer__parrafo--nombre">Carolina</span>
    </footer>
    
</body>
</html>