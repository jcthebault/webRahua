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
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="assets/js/login.js"></script>
    <script src="assets/js/shortName.js"></script>
    <title>Admin - Rauha!</title>
</head>
<body>
    <div class="header">
        <header>
            <h1>Rauha!</h1>
            <span>Gestión de Sitio</span>
        </header>
    </div>
    <div class="main">
        <main>
            <div class="form">
                <form id="formulario" class="formulario" action="backend/php/script_login.php" method="post">
                    <input class="form_input" type="text" name="admin_user" id="admin_user" placeholder="USUARIO">
                    <input class="form_input" type="password" name="admin_pass" id="admin_pass" placeholder="CONTRASEÑA">
                    <div class="btn_admin">
                        <button class="form_buttom">Ingresar</button>
                    </div>
                </form>
            </div>
        </main>
    </div>    
</body>
</html>