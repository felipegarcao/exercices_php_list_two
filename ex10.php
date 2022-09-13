<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 10</title>
</head>

<body>

  <?php
  function fibonacci($q, $zero = false)
  {
    if ($q >= 2) {
      $f = ($zero) ? [0, 1] : [1, 1];
      for ($i = 2; $i < $q; $i++) {
        $f[$i] = $f[$i - 1] + $f[$i - 2];
      }
      return $f;
    }
    return ($q == 1) ? [1] : [];
  }

  $fib = fibonacci(25, true);
  ?>

<div class="container mt-5">
    <h2>Fibonacci</h2>
    <?php
    foreach ($fib as $key => $item) {
      echo (reset($fib) == $item) ? number_format($item, 0, ',', '.') : ', ' . number_format($item, 0, ',', '.');
      echo (end($fib) == $item) ? '.' : '';
    }
    ?>
  </div>




  <body>

</html>