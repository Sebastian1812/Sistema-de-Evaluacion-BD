<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Baja usuario</title>
    <?php include 'include.php'; ?>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="main">
        <div class="formulario">
            <form id="fbaja" method="POST">
                <h1>Baja usuario</h1>
                <div class="campos">
                    <label for="ttema">ID usuario: </label>
                    <input type="number" id="id_user" name="id_user" required>
                </div><p></p>
                <input class = "btn" type="submit" value="Enviar">
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>

<?php

    if(isset($_POST['id_user'])){

        $id_user = $_POST['id_user'];
        require('local.php');
        $link = conectando();
        $sql = "delete from usuario where id_usuario = $id_user";

        if($result = mysqli_query($link, $sql)){
            echo "Se ha dado de baja el alumno";
        }else{
            echo "Error en la sentencia de sql";
        }
         mysqli_close($link);
    }else{
        echo "No se ingresaron datos";
    }

?>
