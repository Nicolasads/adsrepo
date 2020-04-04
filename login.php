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
    <title>Localizaê - Login</title>
  </head>
  <body>

    <!-- Código POST para chamar login e senha no DB -->

    <?php
      session_start();

      if(isset($_POST['btn-entrar'])):
          $erros = array();
          $login = mysqli_escape_string($connect, $_POST['usuario']);
          $senha = mysqli_escape_string($connect, $_POST['senha']);

          if(empty($login) or empty($senha)):
              $erros[] = "<li> O campo login/senha deve ser preenchido </li>";
          else: 
              $sql = "SELECT usuario FROM clientes WHERE usuario = '$login'";
              $resultado = mysqli_query($connect, $sql);

              if(mysqli_num_rows($resultado) > 0):
                  
                  $sql = "SELECT * FROM clientes WHERE usuario = '$login' AND senha = '$senha'";
                  $resultado = mysqli_query($connect, $sql);

                      if(mysqli_num_rows($resultado) == 1):
                          $dados = mysqli_fetch_array($resultado);
                          mysqli_close($connect);
                          $_SESSION['logado'] = true;
                          $_SESSION['id'] = $dados['id'];
                          header('Location: user_home.php');
                      else:
                          $erros[] = "<li> Usuário e senha não conferem </li>";
                      endif;
              else:
                  $erros[] = "<li> Usuário inexistente </li>";
              endif;
          endif;
      endif;
    ?>

    <?php
      if(!empty($erros)):
          foreach($erros as $erro):
              echo $erro;
          endforeach;
      endif;
    ?>
    
    <div class="title">
        <a class="text" href="home.php"><i class="fas fa-map-marker-alt fa-2x"></i> Localizaê</a>
    </div>
      <div class="login-container d-flex align-items-center justify-content-center">
        <form class="login-form text-center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h2 class="mb-5 font-weight-light ">Login</h2>
            <div class="form-group">
                <input type="text" class="form-control rounded-pill form-control-lg" placeholder="Usuário" name="usuario">
            </div>
            <div class="form-group">
                <input type="password" class="form-control rounded-pill form-control-lg" placeholder="Senha" name='senha'>
            </div>
            <div class="row">
              <div class="col-md-6">
                <button type="submit" class="btn mt-2 btn-custom btn-block rounded-pill btn-lg" name="btn-entrar">Entrar</button>
              </div>
              <div class="col-md-6">
                <a class="btn mt-2 btn-custom btn-block rounded-pill btn-lg" onClick="goBack()">Voltar</a>
              </div>
            </div>
            <p class="mt-3 font-weight-normal">Não tem conta?<a href="cadastro.php"><strong> Cadastre-se</strong></a> </p>
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