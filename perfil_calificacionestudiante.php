<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "include.php"; ?>
    <title>Calificaciones Estudiantes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:wght@250&display=swap" rel="stylesheet">
</head>
<?php include 'header_usuarioestudiante.php'; ?>
<body>
    <div class="content">
        <div class="title">Calificaciones</div>
        <div class="grades-container">
            <div class="grade-bar">
                <img src="img/iconsAreas/1.png" alt="Bases de Datos">
                <span class="subject-name">Bases de Datos</span>
                <span class="grade">0.0</span>
            </div>
            <div class="grade-bar">
                <img src="img/iconsAreas/2.png" alt="Desarrollo Web">
                <span class="subject-name">Desarrollo Web</span>
                <span class="grade">0.0</span>
            </div>
            <div class="grade-bar">
                <img src="img/iconsAreas/3.png" alt="Desarrollo de Programación Python">
                <span class="subject-name">Lenguaje de Programación en Python</span>
                <span class="grade">0.0</span>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
