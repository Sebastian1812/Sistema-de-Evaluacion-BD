<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:wght@250&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f5f5;
        }
        .header {
            background-color: #00a74f;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header img {
            height: 80px;
            margin-left: 10px;
        }
        .header h1 {
            margin: 0 20px;
            color: #3b3b3b;
            font-size: 24px;
        }
        .nav-buttons {
            display: flex;
            gap: 20px;
        }
        .nav-buttons a {
            color: black;
            text-decoration: none;
            font-size: 18px;
            padding: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .nav-buttons a:hover {
            background-color: #ccc;
        }
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            text-align: center;
        }
        .profile-container h2 {
            font-size: 36px;
            color: #3b3b3b;
        }
        .profile-container img {
            height: 150px;
            border-radius: 50%;
            margin: 20px 0;
        }
        .profile-info {
            display: flex;
            flex-direction: column;
            align-items: start;
            gap: 15px;
            width: 100%;
            max-width: 600px;
        }
        .profile-info div {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 10px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .profile-info div label {
            font-weight: bold;
            color: #3b3b3b;
        }
        .profile-info div span {
            color: #3b3b3b;
        }
        .logout-button {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: white;
            border: 1px solid #ddd;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .logout-button img {
            height: 20px;
        }
        .logout-button:hover {
            background-color: #e0e0e0;
        }

    </style>
</head>
<body>
    <div class="header">
        <div class="header-left">
            <img src="\dashboard\images\ProyectoFinalBD\UABC.png" alt="Escudo UABC">
            <h1>CURSOS DE INGENIERÍA EN COMPUTACIÓN</h1>
        </div>
        <div class="nav-buttons">
            <a href="areas.php">ÁREAS</a>
            <a href="calificaciones.php">CALIFICACIONES</a>
            <a href="perfil.php">PERFIL</a>
        </div>
    </div>
    <div class="profile-container">
        <h2>Mi Perfil</h2>
        <img src="img\perfilimagen.png" alt="Imagen de perfil">
        <div class="profile-info">
            <div>
                <label>Nombre</label>
                <span>nombre_usuario</span>
            </div>
            <div>
                <label>Apellido paterno</label>
                <span>ap_paterno</span>
            </div>
            <div>
                <label>Apellido materno</label>
                <span>ap_materno</span>
            </div>
            <div>
                <label>Email</label>
                <span>email</span>
            </div>
        </div>
        <button class="logout-button">
            <img src="img\iconLogout.png" alt="Logout icon">
            Cerrar Sesión
        </button>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
