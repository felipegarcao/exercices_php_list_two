<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 6</title>
</head>

<body>

  <?php

  $idade = isset($_GET['idade']) ? $_GET['idade'] : '';

  $mensagem = '';

  if (isset($_GET['idade']) && $idade >= 5) {
    if ($idade >= 5 && $idade <= 7) {
      $mensagem = 'Infantil A.';
    } else if ($idade >= 8 && $idade <= 11) {
      $mensagem = "Infantil B.";
    } else if ($idade >= 12 && $idade <= 13) {
      $mensagem = "Juvenil A.";
    } else if ($idade >= 14 && $idade <= 17) {
      $mensagem = "Juvenil B.";
    } else if ($idade >= 18) {
      $mensagem = "Adulto.";
    }
  }

  ?>


  <form method="get" class="container d-flex flex-column">
    <label class="d-flex flex-column">
      <input class="form-control" name="idade" type="number" min="5" />
    </label>
    <button type="submit" class="btn btn-primary mt-5">Verificar idade</button>
    <div class="mt-5">
      <p> Resultado <?= $mensagem ?></p>
    </div>
  </form>

  <body>

</html>