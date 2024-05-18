<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <?php include 'include_miperfil.php'; ?>
</head>
<?php include 'header_usuarioestudiante.php'; ?>
<body>
    <div class="profile-container">
        <div class="profile-left">
            <h2>Mi Perfil</h2>
            <img src="img/perfilimagen.png" alt="Imagen de perfil">
            <button class="logout-button">
                <img src="img/iconLogout.png" alt="Logout icon">
                <label>Cerrar<br>Sesión</label>
            </button>
        </div>
        <div class="profile-right">
            <div class="profile-info">
                <label>Nombre</label>
                <span>nombre_usuario</span>
            </div>
            <div class="profile-info">
                <label>Apellido paterno</label>
                <span>ap_paterno</span>
            </div>
            <div class="profile-info">
                <label>Apellido materno</label>
                <span>ap_materno</span>
            </div>
            <div class="profile-info">
                <label>Email</label>
                <span>email</span>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
