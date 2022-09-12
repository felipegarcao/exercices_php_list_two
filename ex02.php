<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 2</title>
</head>

<body>

  <?php

  $vtNull = isset($_GET['vtNull']) ? $_GET['vtNull'] : '';
  $vtValids = isset($_GET['vtValids']) ? $_GET['vtValids'] : '';
  $vtWhite = isset($_GET['vtWhite']) ? $_GET['vtWhite'] : '';

  $porcentagem_white = $porcentagem_nulls = $porcentagem_valids = $total = $porcentual = '';

  //essa funcionalidade so acontecera se nenhum das variaveis estiver vazia
  if ($vtWhite != '' && $vtNull != '' && $vtValids != '') {
    $total = $vtWhite + $vtNull + $vtValids;
    $porcentagem_white = number_format(($vtWhite / $total * 100), 2) . '%';
    $porcentagem_nulls = number_format(($vtNull / $total * 100), 2) . '%';
    $porcentagem_valids = number_format(($vtValids / $total * 100), 2) . '%';
    $porcentual = "$porcentagem_white votos brancos, $porcentagem_nulls votos nulos e $porcentagem_valids votos válidos.";
  }




  ?>

  <form method="get" class="d-flex flex-column container mt-5">

    <label class="d-flex flex-column">Votos Brancos
      <input class="form-control" name="vtWhite" type="number" min="0" />
    </label>

    <label class="d-flex flex-column">Votos Nulos:
      <input class="form-control" name="vtNull" type="number" min="0" />
    </label>

    <label class="d-flex flex-column"> Votos validos:
      <input class="form-control" name="vtValids" type="number" min="0" />
    </label>

    <button type="submit" class="btn btn-primary mt-5">Calcular</button>

    <div class="mt-5">
      <p>Total de Eleitores que votaram: <?= $total ?></p>
      <p>Percentuais: <?= $porcentual ?></p>
    </div>

  </form>

</body>

</html>