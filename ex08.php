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

  <h1>
    Quadrados dos numeros inteiros de 15 a 200:
  </h1>

  <?php
  $increment = 15;

  while ($increment <= 200) {
    $num = $increment;
    $quad = number_format(($num ** 2), 0, ',', '.');

  ?>
    <p><?= $num ?>² = <?= $quad ?></p>

  <?php
    $increment++;
  }
  ?>

  <body>

</html>