<?php

include("conectabanco.php");

if($_POST){
  ExecutaSQL("INSERT INTO despesa_pagamento(cli_forn, valor, data, tipo) VALUES ('".$_POST["seleciona_forn"]."', '".$_POST["valor"]."', '".$_POST["data"]."', '".'despesa'."')");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">


    <title>Cadastro de despesas</title>
  </head>
  <body>
    <div class="divmenu">
      <?php include("menu.php");?>
    </div>
    <div class="container">
      <div>
        <h2 class="titulo">Cadastre Suas Despesas:</h2>
        <form method="post">
        <div class="form-group">
          <label>Fornecedor:</label>
            <select class="form-control" name="seleciona_forn">
              <?php
              $PegaFornecedor = SelecionaDiversosDados("SELECT nome_fornecedor FROM  cad_fornecedor ");
              ?>
              <?php foreach ($PegaFornecedor as $fornecedor){?>
                <option>
                  <?php
                  echo $fornecedor["nome_fornecedor"];?>
                </option>
                <?php
              }
              ?>
            </select>
        </div>
        <label>Valor:</label>
        <input type="number" name="valor" class="form-control" placeholder="Digite o valor da Despesa" /><br>
        <label>Data:</label><br>
        <input type="date" name="data" class="form-control" placeholder="Digite a data da Despesa"/><br>
        <input type="submit" value="Enviar" class="btn" />
        </form>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
