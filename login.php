<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de Ingeniería en Computación</title>
    <?php include 'include_login.php'; ?>
</head>

<body>
    <div class="container">

        <?php include 'header.php'; ?>

        <div class="main">
            <!-- COLOCAR MENU MAIN -->
            <img src="img\fondoinicio.png" alt="Persona programando">
            <div class="login">
                <h2>Iniciar Sesión</h2>
                <span class="line"></span>
                <h2>Registrarse</h2>
                <form action="perfil_usuarioestudiante.php" method="POST">
                    <button type="submit">
                        <img src="img\googleLogo.png" alt="Google logo">
                        Cuenta Google
                    </button>
                </form>
            </div>
        </div>

    </div>
</body>
<?php include 'footer.php'; ?>

</html>