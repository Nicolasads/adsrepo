<?php
  require_once 'connect_db.php';
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <title>Localizaê - cadastro</title>
  </head>
  <body>
    
    <div class="title">
        <a class="text" href="index.php"><i class="fas fa-map-marker-alt fa-2x"></i> Localizaê</a>
    </div>
      <div class="login-container d-flex align-items-center justify-content-center">
        <form action="php_action/create_user.php" method="POST" class="login-form text-center">
            <h2 class="mb-5 font-weight-light ">Cadastrar</h2>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Nome" name="nome" id="nome">
            </div>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Usuário" name="usuario" id="usuario">
            </div>
            <div class="form-group">
                <input type="email" class="form-control rounded-pill form-control-lg" placeholder="E-mail" name="email" id="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control rounded-pill form-control-lg" placeholder="Senha" name="senha" id="senha">
            </div>
            <div class="row">
              <div class="col-md-6">
                <button type="submit" class="btn mt-2 btn-custom btn-block rounded-pill btn-lg" name="btn-cadastrar">Cadastrar</button>
              </div>
              <div class="col-md-6">
                <a onClick="goBack()" class="btn mt-2 btn-custom btn-block rounded-pill btn-lg">Voltar</a>
              </div>
            </div>
            <p class="mt-3 font-weight-normal">Já tem conta? <a href="login.php"><strong>Faça o login</strong></a> </p>
        </form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
    function goBack() {
      window.history.back();
    }
    </script>
    <script src="https://kit.fontawesome.com/c4cf45b7a7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>