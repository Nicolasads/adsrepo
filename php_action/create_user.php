<?php
//Sessão
session_start();
// Conexão
require_once '../connect_db.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    $sql = ("INSERT INTO clientes (nome, usuario, email, senha) VALUES ('$nome', '$usuario', '$email', '$senha')");
    if (mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location:../login.php?success');
    } else {
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location:../cadastro.php?error');
    }
    
endif;
?>
