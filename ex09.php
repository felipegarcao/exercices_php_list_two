<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 9</title>
</head>

<body>

  <?php
    $x = 1;
    $y = 1;

    do { 
      $k = $x + 1;
      $y = $y + $k;
      $x++;

    } while ($x < 100);
    $soma = number_format($y, 0, ',','.');
  ?>

  <h4>Total de soma dos 100 primeiros numeros inteiros: </h4>
  <p><?= $soma ?>.</p>


<body>

</html>