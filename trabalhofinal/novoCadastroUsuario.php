<?php
include("conectabanco.php");

if ($_POST){
  ExecutaSQL("INSERT INTO cad_usuario (nome_usuario, email_usuario, senha_usuario) VALUES ('".$_POST["nome"]."', '".$_POST["email"]."', '".$_POST["senha"]."');");
  ?>
  <script>
  alert('Usuário Cadastrado Com Sucesso!!!');
  window.location = 'index.php';
  </script>
  <?php
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Cadastro De Usuario</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="titulo">Casdastro de Usuário:</h2>
          <form method="post">
          <label>Nome:</label>
          <input type="text" name="nome" class="form-control" placeholder="Digite seu Nome"/><br>
          <label>E-mail:</label>
          <input type="email" name="email" class="form-control" placeholder="Digite seu E-mail"/><br>
          <label>Senha:</label>
          <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha"><br><br>
          <input type="submit" class="btn" value="Guardar"/>
        </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
