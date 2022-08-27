<?php
include("conectabanco.php");

if($_POST){
  ExecutaSQL("INSERT INTO despesa_pagamento(cli_forn, valor, data, tipo) VALUES ('".$_POST["seleciona_cli"]."', '".$_POST["valor_pag"]."', '".$_POST["data_pag"]."', '".'pagamento'."')");
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Cadastro De Pagamentos</title>
  </head>
  <body>
    <div class="divmenu">
      <?php include("menu.php"); ?>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

            <h2 class="titulo">Cadastre Seus Pagamentos</h2>
            <form method="post">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Cliente:</label>
                  <select class="form-control" name="seleciona_cli" id="exampleFormControlSelect1">
                    <?php
                    $PegaCliente = SelecionaDiversosDados("SELECT nome_cliente FROM  cad_cliente ");
                    ?>

                      <?php foreach ($PegaCliente as $cliente){?>
                        <option>
                          <?php
                          echo $cliente["nome_cliente"];?>
                        </option>
                        <?php
                    }
                    ?>
                  </select>
            </div>
                    <label>Valor do Pagamento:</label><br>
                    <input type="number" name="valor_pag" class="form-control" placeholder="Digite o valor do Pagamento Recebido"/><br>
                    <label>Data do Pagamento:</label><br>
                    <input type="date" name="data_pag" class="form-control"/><br>
                    <input type="submit" class="btn" value="Enviar"/>
            </form>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
