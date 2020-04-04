<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <?php
        require_once 'connect_db.php';

        session_start();

        if(!isset($_SESSION['logado'])):
            header('Location: index.php');
        endif;

    ?>


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
    <link rel="stylesheet" href="./css/avaliacao.css" type="text/css" />
    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css?family=Caladea|Odibee+Sans|Oxanium|Trade+Winds&display=swap" rel="stylesheet">

    <title>Localizaê</title>
  </head>

  <body>
    <header>
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
                  <a class="navbar-item" href="logout.php">Sair</a>
                </div>
              </li>
            </ul>
        </nav>

        <div class="container mt-5">
          
            <form class="needs-validation" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-2"></div>
                        <div class="form-group col-md-3">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome" required>
                            <div class="invalid-feedback">
                            Preencha o campo "Nome"
                        </div>
                    </div>
                <div class="form-group col-md-3">
                    <label for="senha">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
                    <div class="invalid-feedback">
                    Preencha o campo "Sobrenome"
                    </div>
                </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-5">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email_usuario"  placeholder="email" required>
                    <div class="invalid-feedback">
                    Preencha o campo "E-mail"
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="senha">Password</label>
                    <input type="password" class="form-control" id="senha" name="senha_usuario" placeholder="senha" required>
                    <div class="invalid-feedback">
                    Preencha o campo "Password"
                    </div>
                </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-2"></div>
                    <div class="form-group col-md-4">
                    </div>
                    <!-- Aqui eu tento colocar uma máscara de número pra celular mas não deu certo.-->
                    <div class="form-group col-md-3">
                    <label for="">Celular / WhatsApp</label>
                    <input id="telefone" name="telefone" class="form-control" placeholder="(XX) XXXXX-XXXX" type="text" maxlength="11" onkeypress="formatar(this)" required>
                    <div class="invalid-feedback">
                        Preencha o campo "Celular / WhatsApp"
                    </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-2"></div>    
                <div class="col-md-2">
                    <button type="submit" name="update" class="btn btn-primary">Atualizar</button>
                </div>
                </div>
            </form>
        </div>
            <!-- script para que a validação funcione-->
            <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
            function mascara(telefone){ 
            if(telefone.value.length == 0)
                telefone.value = '(' + telefone.value; 
            if(telefone.value.length == 3)
                telefone.value = telefone.value + ') '; 
 
            if(telefone.value.length == 8)
                telefone.value = telefone.value + '-';
  
            } 
            </script>
        </div>


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
    </header>
</html>