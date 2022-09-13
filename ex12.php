<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 12</title>
</head>

<body>

  <?php
  $numeros = array();
  for ($i = 0; $i < 50; $i++) {
    $x = rand(10, 500);
    // envia itens para dentro do array
    array_push($numeros, $x);
  }

  sort($numeros);

  $pares = $primos = 0;
  foreach ($numeros as $key => $item) {
    $par = ($item % 2) == 0 ? true : false;
    if ($par == true) {
      $pares++;
    }

    $xPrimos = 0;
    for ($i = 1; $i <= $item; $i++) {
      $resto = $item % $i;
      $xPrimos += $resto == 0 ? 1 : 0;
    }
    if ($xPrimos == 2) {
      $primos++;
    }
  }
  ?>

<div class="container my-5">
  <h2>50 numeros inteiros</h2>
    <?php
    foreach ($numeros as $key => $item) {
      echo reset($numeros) == $item ? $item : ', ' . $item;
      echo end($numeros) == $item ? '.' : '';
    }
    ?>
  </div>

  <p class="container mt-5">
    Foram <strong><?= $pares ?></strong> número(s) par(es) e <strong><?= $primos ?></strong> número(s) primo(s).
  </p>

  <body>

</html>