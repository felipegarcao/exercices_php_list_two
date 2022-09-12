<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 5</title>
</head>
<body>
  
<?php
  $numero = isset($_GET['numero']) ? $_GET['numero'] : '';
  $inteiro = $par = $positivo = false;
  $mensagem = '';
  if (isset($_GET['numero'])) {
      $inteiro = $numero == (int)$numero ? true : false;
      $par = $numero % 2 == 0 ? true : false;
      $positivo = $numero >= 0 ? true : false;
      
      if ($inteiro == true) {
          if ($par == true && $positivo == true) {
              $mensagem = "O número $numero é par e positivo.";
          }
          else if ($par == true && $positivo == false) {
              $mensagem = "O número $numero é par e negativo.";
          }
          else if ($par == false && $positivo == true) {
              $mensagem = "O número $numero é ímpar e positivo.";
          }
          else {
              $mensagem = "O número $numero é ímpar e negativo.";
          }
      }
      else {
          $mensagem = "Não foi informado um número inteiro.";
      }
  }
?>

<form method="get" class="d-flex flex-column container mt-5">

<label class="d-flex flex-column">Informe um número inteiro:
  <input class="form-control" name="numero" type="number" min="0" />
</label>



<button type="submit" class="btn btn-primary mt-5">Verificar numero</button>

<div class="mt-5">
  <p>Resultados <?= $mensagem ?></p>
</div>

</form>

</body>
</html>