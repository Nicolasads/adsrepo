<?php
    require_once "connect_db.php";

    $result_usuario = "SELECT * FROM clientes WHERE id='$id' ";
    $resultado_usuario = mysqli_query($connect, $result_usuario);
    while($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
        echo $row_usuario['id'];
        echo $row_usuario['usuario'];
    }

?>