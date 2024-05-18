<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Alta tema</title>
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
            <form id="ftema" method="POST">
                <h1>Registrar Tema</h1>
                <div class="campos">
                    <label for="ttema">Descripcion tema: </label>
                    <input type="text" id="n_tema" name="n_tema" required>
                </div><p></p>
                <div class="campos">
                    <label for="tidarea">ID area: </label>
                    <input type="number" id="id_area" name="id_area" min = '1' required>
                </div><p></p>
                <input class = "btn" type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>

<?php

    if(isset($_POST['n_tema'])&& isset($_POST['id_area'])) {


        $tema = $_POST['n_tema'];
        $id_area = $_POST['id_area'];
        require('local.php');
        $link = conectando();
        $sql = "insert into tema(descripcion_tema, id_area) values ('$tema', $id_area)";

        if($result = mysqli_query($link, $sql)){
            echo "Se ha dado de alta el tema";
        }else{
            echo "Error en la sentencia de sql";
        }
         mysqli_close($link);
    }else{
        echo "No se ingresaron datos";
    }

?>
