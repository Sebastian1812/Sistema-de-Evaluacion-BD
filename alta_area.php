<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Alta area</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:wght@191&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:wght@250&display=swap"
        rel="stylesheet">
    <link href="evaluacion.css" rel="stylesheet">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="main">
        <div class="formulario">
            <form id="farea" method="POST">
                <h1>Registrar Area</h1>
                <div class="campos">
                    <label for="tclave">Descripción area: </label>
                    <input type="text" id="n_area" name="n_area" required>
                </div><p></p>
                <input class = "btn" type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>

<?php

    if(isset($_POST['n_area'])) {

        $area = $_POST['n_area'];
        require('local.php');
        $link = conectando();
        $sql = "insert into area (descripcion) values ('$area')";

        if($result = mysqli_query($link, $sql)){
            echo "Se ha dado de alta el area";
        }else{
            echo "Error en la sentencia de sql";
        }
         mysqli_close($link);
    }else{
        echo "No se ingresaron datos";
    }

?>
