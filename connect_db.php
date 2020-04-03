<?php
// Conexão com banco de dados
$server = "localhost";
$user = "root";
$password = "";
$banco = "usuarios";

$connect = mysqli_connect($server, $user, $password, $banco);
mysqli_set_charset($connect, "utf-8");

if(mysqli_connect_error($connect)):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;
?>