<?php include("conectabanco.php");
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Despesas</title>
  </head>
  <body>
    <div class="divmenu">
      <?php include("menu.php") ?>
    </div>
    <div class="container">
      <h2 class="titulo">Despesas</h2>

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Fornecedor</th>
              <th scope="col">Valor</th>
              <th scope="col">Data</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $PegaDespesa = SelecionaDiversosDados("SELECT * FROM cad_despesa");
              foreach ($PegaDespesa as $despesa){
            ?>
            <tr>
              <th><?php echo $despesa["nomeforn"]?></th>
              <td><?php echo $despesa["valor_despesa"]?></td>
              <td><?php echo $despesa["data_despesa"]?></td>
              <td><?php echo $despesa["status_despesa"]?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
