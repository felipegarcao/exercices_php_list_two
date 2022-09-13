<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 13</title>
</head>

<body>

  <?php
  $qtde = isset($_GET['quantidade']) ? $_GET['quantidade'] : "";

  $elementos = '';
  $numbersArray = array();
  $soma = $media = $maior = $maiorIndex = $menor = $menorIndex = 0;
  $show = "style='display:none;'";

  if (isset($_GET['quantidade']) && $qtde > 0) {
    for ($i = 0; $i < $qtde; $i++) {
      $x = rand(1, 2000);
      array_push($numbersArray, $x);
    }

    foreach ($numbersArray as $key => $item) {
      $elementos .= reset($numbersArray) == number_format($item, 0, ',', '.') ? $item : ', ' . number_format($item, 0, ',', '.');

      $soma += $item;

      if ($key == 0) {
        $maior = $menor = $item;
        $maiorIndex = $menorIndex = $key;
      } else {
        $maiorIndex = $item > $maior ? $key : $maiorIndex;
        $maior = $item > $maior ? $item : $maior;

        $menorIndex = $item < $menor ? $key : $menorIndex;
        $menor = $item < $menor ? $item : $menor;
      }
    }
    $media = $soma / $qtde;
    $show = "style='display:block;'";
  }
  ?>
  <form method="get" class="container d-flex flex-column mt-5">
    <label class="d-flex flex-column">
      Informe a quantidade de números inteiros:
      <input class="form-control" name="quantidade" type="number" />
    </label>

    <button class="btn btn-danger" type="submit">GO</button>

    <div <?= $show ?>>
      <p>Elementos: <?= $elementos ?>.</p>
      <p>Soma dos números: <strong><?= number_format($soma, 0, ',', '.') ?></strong>.</p>
      <p>Média dos números: <strong><?= number_format($media, 0, ',', '.') ?></strong>.</p>
      <p>Maior: <?= number_format($maior, 0, ',', '.') ?>, posição: <strong> <?= $maiorIndex ?></strong>.</p>
      <p>Menor: <?= number_format($menor, 0, ',', '.') ?>, posição: <strong> <?= $menorIndex ?></strong>.</p>
    </div>
  </form>



  <body>

</html>