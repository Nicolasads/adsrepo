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
                <a class="navbar-item" href="home.php">Início</a>
              </li>
              <li class="navbar-item">
                <a class="navbar-item" href="empresas.php">Empresas</a>
              </li>
              <li class="navbar-item">
                <a class="navbar-item" href="login.php">Login</a>
              </li>
              </li>
            </ul>
        </nav>
    </header>

    <div class="empresas">
    <?php
        $id =$_GET["id"];
        $res=mysqli_query( $link, "SELECT * FROM `empresas` WHERE `empresa_id`='$id' ");
        while($row=mysqli_fetch_array($res)) 
        {
        ?>
          <h1 class="title_emp"><?php echo $row["empresa_nome"] ?></h1>
          <p class="subtitle_emp"><?php echo $row["empresa_descricao"]?></p>
        <?php
        }
       ?>
      </ul>
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