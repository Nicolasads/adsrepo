<!DOCTYPE html>
<html>
  <head>

    <?php
        require_once 'connect_db.php';

        session_start();

        if(!isset($_SESSION['logado'])):
            header('Location: index.php');
        endif;
    ?>
    <?php
    include 'emp_db.php';
    ?>

  <?php
    $url = "https://my-json-server.typicode.com/Nicolasads/api-host/empresa"; 
    $ch = curl_init($url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    $empresas = json_decode(curl_exec($ch));
  ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Localizaê</title>
    <!-- Bulma Version 0.7.2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="./css/home.css">
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/home.css" type="text/css" />
  </head> 
  <body>
      <nav class="navbar">
          <div class="navbar-brand">
            <a class="navbar-item" href="user_home.php">
                <i class="fas fa-map-marker-alt fa-2x"></i>Localizaê
            </a>
          </div>

            <ul class="navbar-nav navbar-end">
              <li class="navbar-item navbar-start">
                <a class="navbar-item" href="user_home.php">Início</a>
              </li>
              <li class="navbar-item">
                <a class="navbar-item" href="user_empresas.php">Empresas</a>
              </li>
              <li class="navbar-item">
                <a class="navbar-item" href="avaliacao.php">Avaliação</a>
              </li>
              <li class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Bem-vindo</a>
                <div class="navbar-dropdown">
                  <a class="navbar-item" href="user_profile.php">Editar Perfil</a>
                  <a class="navbar-item" href="index.html">Sair</a>
                </div>
              </li>
            </ul>
        </nav>
   
    <div class="search">
      <div class="field has-addons">
        <div class="control is-expanded">
          <input class="input is-large" type="text" placeholder="Estou procurando por...">
        </div>
        <div class="control">
          <a class="button is-info is-large">
            <i class="fas fa-search"></i>
          </a>
        </div>
      </div>
    </div>

    <section class="container">
    <?php
        $res=mysqli_query( $link, "SELECT * FROM empresas");
          while($row=mysqli_fetch_array($res)) 
          {
          ?>
            <div class="card ml-3" style="width: 18rem;">
              <img class="card-img-top col-sm" src="teste.gif" alt="Card image cap">
              <div class="card-body">
                <a class="card-title text-center" href="user_empresas.php"><?php echo $row["empresa_nome"] ?> -
                <?php echo $row["empresa_nota"] ?> <i class="fas fa-star"></i>
                </a>
              </div>
            </div>
          <?php
          }
        ?>

    </section>

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