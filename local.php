<?php
function conectando(){
        $server = "127.0.0.1";
        $user = "root";
        $pwd = "";
        $bd = "sistema_evaluacion";
        $con = mysqli_connect($server, $user, $pwd, $bd);
        return $con;
}


