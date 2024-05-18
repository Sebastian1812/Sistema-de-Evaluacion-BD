<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "include.php"; ?>
    <title>Areas Estudiantes</title>
    
</head>
<?php include 'header_usuarioestudiante.php'; ?>
<body>
    <div class="content">
        <div class="title">ÁREAS</div>
        <div class="subjects-container">
        <?php
            require('local.php');
            $link = conectando();
            $sql = "SELECT descripcion_area, id_area FROM area";
            if($link) {
                $result = mysqli_query($link, $sql);
                if (mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='subject-card'>";
                        echo "<img src='img/iconsAreas/".$row['id_area'].".png' alt='Imagen'>";
                        echo "<h3>".$row['descripcion_area']."</h3>";
                        echo "</div>";
                    }
                }
            }
            else
            {
                echo "no se pudo establecer la conexión";
            }
            mysqli_close($link);
        ?>      

        </div>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>
