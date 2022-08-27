<?php include("conectabanco.php");

if(isset($_POST["pagar"])) {
  ?>
  <script>
  window.location = 'cadastro_fornecedor.php';
  </script>
  <?php
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="divmenu">
      <?php  include("menu.php")?>
    </div>
    <div class="container">
      <form method="post">
        <h2 class="titulogestor">Contas</h2>
        <ul class="filtro">
          <li><label>Filtrar:</label></li>
          <li><input type="date" name="dataum" class="data form-control"></li>
          <li><input type="date" name="datadois" class="data form-control"></li>
          <li><input type="submit" class="btn" value="Enviar"></li>
        </ul>
      </form>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Fornecedor</th>
              <th scope="col">Valor</th>
              <th scope="col">Data</th>
              <th scope="col">Pagar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $PegaInfo = SelecionaDiversosDados("SELECT * FROM despesa_pagamento");
            foreach ($PegaInfo as $info){
              ?>
              <tr>
                <?php
                if($info["tipo"] == 'despesa'){ ?>
                  <th><p class="despesa"><?php echo $info["cli_forn"]?></p></th>
                  <td><p class="despesa"><?php echo $info["valor"]?></p></td>
                  <td><p class="despesa"><?php echo $info["data"]?></p></td>
                  <td><?php
                  if($info["nomearquivo"] == "") {
                    ?><a class="despesa" href="pagar_despesa.php?pagar=<?php echo $info["id"]; ?>">Pagar</a>
                  <?php }
                  else { ?> <a class="despesa" href="comprovante/<?php echo $info["nomearquivo"]; ?>">Visualizar Comprovante</a>
                  <?php } ?>
                </td>
                <?php
              } else{ ?>
                <th><?php echo $info["cli_forn"]?></th>
                <td><?php echo $info["valor"]?></td>
                <td><?php echo $info["data"]?></td>
                <td><?php echo $info["nomearquivo"]?></td>
                <?php
              } ?>
              </tr>
              <?php

            }
              ?>
          </tbody>
        </table>
        <!--
        <tbody>
          <tr>
            <td><a href="">1</a></td>
            <td>2</td>
            <td>3</td>
          </tr>
        </tbody>
      -->
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
