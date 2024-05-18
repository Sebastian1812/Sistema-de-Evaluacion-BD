<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Alta Evaluacion</title>
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
            <form id="fevaluacion" method="POST">
                <h1>Registrar Evaluacion</h1>
                <div class="campos">
                    <label for="t">Instrucciones: </label>
                    <input type="text" id="instrucciones" name="instrucciones" required>
                </div><p></p>
                <div class="campos">
                    <label for="t">Calificacion mínima: </label>
                    <input type="number" id="cal_min" name="cal_min" min ='0' max = '100' required>
                </div><p></p>
                <div class="campos">
                    <label for="t">ID tema: </label>
                    <input type="number" id="id_tema" name="id_tema" min = '1' required>
                </div><p></p>
                <input class = "btn" type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>

<?php

    if(isset($_POST['instrucciones'])&&isset($_POST['cal_min']) && isset($_POST['id_tema'])) {

        $inst = $_POST['instrucciones'];
        $c_min= $_POST['cal_min'];
        $id_tema=$_POST['id_tema'];
        require('local.php');
        $link = conectando();
        $sql = "insert into evaluacion(instrucciones, calificacion_minima, id_tema) 
        values ('$inst', $c_min, $id_tema)";

        if($result = mysqli_query($link, $sql)){
            echo "Se ha dado de alta la evaluacion";
        }else{
            echo "Error en la sentencia de sql";
        }
         mysqli_close($link);
    }else{
        echo "No se ingresaron datos";
    }

?>
