<!DOCTYPE html>
<html lang="pt-br">

  <?php
    require_once 'emp_db.php';
  ?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" href="./css/home.css" type="text/css" />
    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css?family=Caladea|Odibee+Sans|Oxanium|Trade+Winds&display=swap" rel="stylesheet">

    <title>Localizaê</title>
  </head>

  <body>
    <header>
        <nav class="navbar">
          <div class="navbar-brand">
            <a class="navbar-item" href="home.php">
                <i class="fas fa-map-marker-alt fa-2x"></i>Localizaê
            </a>
          </div>

            <ul class="navbar-nav navbar-end">
              <li class="navbar-item navbar-start">
                <a class="navbar-item" href="user_home.php">Home</a>
              </li>
              <li class="navbar-item">
                <a class="navbar-item" href="empresas.php">Empresas</a>
              </li>
              <li class="navbar-item">
                <a class="navbar-item" href="avaliacao.php">Avaliação</a>
              </li>
              <li class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Bem-vindo</a>
                <div class="navbar-dropdown">
                  <a class="navbar-item" href="user_profile.php">Editar Perfil</a>
                  <a class="navbar-item" href="php_action/logout.php">Sair</a>
                </div>
              </li>
            </ul>

        </nav>
    </header>

    <div class="container mt-5">
      <!-- Eu queria implementar a validação aqui também, mas não sei como aplicar-->
      <form>
        <div class="form-group text-center">
          <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <label for="empresa" class="title">Selecione a empresa</label>
              <select class="form-control" id="empresa">
                <?php
                  $res=mysqli_query( $link, "SELECT * FROM empresas");
                  while($row=mysqli_fetch_array($res)) 
                  {
                ?>
                  <option><?php echo $row["empresa_nome"] ?></option>
                  <?php
                  }
               ?>
              </select>
            </div>
          </div>
          <br>  
          <label class="subtitle">Qual a nota deseja atribuir ao estabelecimento?</label><br>
          <?php
            if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            }
          ?>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1" name="voto" class="options">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2" name="voto" class="options">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            <label class="form-check-label" for="inlineRadio3" name="voto" class="options">3</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
            <label class="form-check-label" for="inlineRadio4" name="voto" class="options">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
            <label class="form-check-label" for="inlineRadio5" name="voto" class="options">5</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
            <label class="form-check-label" for="inlineRadio6" name="voto" class="options">6</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option7">
            <label class="form-check-label" for="inlineRadio7" name="voto" class="options">7</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio8" value="option8">
            <label class="form-check-label" for="inlineRadio8" name="voto" class="options">8</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio9" value="option9">
            <label class="form-check-label" for="inlineRadio9" name="voto" class="options">9</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio10" value="option10">
            <label class="form-check-label" for="inlineRadio10" name="voto" class="options">10</label>
          </div>
            
          <br><br><br>
          <label for="text_option" class="description">Deixe seu comentário</label>
          <textarea class="form-control" id="text_option" rows="5"></textarea>
        </div>
        <button class="btn btn-custom rounded-pill" type="submit" name="enviar">Enviar</button>
      </form>
    </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/c4cf45b7a7.js" crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>