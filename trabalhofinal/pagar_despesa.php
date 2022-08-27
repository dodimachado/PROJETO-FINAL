<?php
  include("conectabanco.php");

if($_FILES){
  $comprovante = $_FILES["arquivo"];
  $pasta = "comprovante/";
  $nomearquivo = $_GET["pagar"].$comprovante["name"];
    if(move_uploaded_file($comprovante["tmp_name"], $pasta.$nomearquivo)){
      print("Arquivo enviado com sucesso!");
    }
    ExecutaSQL("UPDATE despesa_pagamento SET nomearquivo = '".$nomearquivo."' WHERE id = ".$_GET["pagar"]);
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Despesa</title>
  </head>
  <body>
    <div class="divmenu">
      <?php include("menu.php"); ?>
    </div>
    <div class="container">
      <h2 class="titulo">Pagar Despesa</h2>
      <?php
      $PegaInfo = SelecionaUmDado("SELECT * FROM despesa_pagamento WHERE id = ".$_GET["pagar"]); ?>

      <label>Fornecedor:</label>
      <?php echo $PegaInfo["cli_forn"]; ?><br>
      <label>Valor:</label>
      <?php echo $PegaInfo["valor"]; ?><br>
      <label>Comprovante:</label>
      <form method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo" /> <br><br>
        <input type="submit" class="btn" value="Enviar"/>
      </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
