<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 15</title>
</head>

<body>

  <?php

  $games = $gameSorted = $numbersSuccesses = array();

  for ($i = 0; $i < 10; $i++) {
    $game = array();
    for ($x = 0; $x < 6; $x++) {
      do {
        $aux = rand(1, 60);
      } while (in_array($aux, $game));
      array_push($game, $aux);
    }
    sort($game);
    array_push($games, $game);
  }

  $gameSorted = array();
  for ($i = 0; $i < 6; $i++) {
    do {
      $aux = rand(1, 60);
    } while (in_array($aux, $gameSorted));
    array_push($gameSorted, $aux);
  }
  sort($gameSorted);

  foreach ($games as $key => $item) {
    $aux = array();
    for ($i = 0; $i < sizeof($gameSorted); $i++) {
      if (in_array($gameSorted[$i], $item)) {
        array_push($aux, $gameSorted[$i]);
      }
    }
    array_push($numbersSuccesses, $aux);
  }

  $numbersSorted = '';
  foreach ($gameSorted as $key => $item) {
    $numbersSorted .= reset($gameSorted) == $item ? $item : ', ' . $item;
  }
  ?>

  <h2>Numeeros da megasena sorteados:</h2>
  <p><strong><?= $numbersSorted ?></strong>.</p>
  <h3>Acertos Por Jogo:</h3>
  <?php
  for ($i = 0; $i < sizeof($games); $i++) {
    $num = $i + 1;
    $igame = '';
    for ($j = 0; $j < sizeof($games[$i]); $j++) {
      $igame .= reset($games[$i]) == $games[$i][$j] ? $games[$i][$j] : ', ' . $games[$i][$j];
    }

    if (empty($numbersSuccesses[$i])) {
      echo "<p>Jogo #$num: <strong>$igame</strong> → Nenhuma dezena acertada.</p>";
    } else {
      $iSuccess = '';
      $qtdeAcertos = sizeof($numbersSuccesses[$i]);
      foreach ($numbersSuccesses[$i] as $key => $item) {
        $iSuccess .= reset($numbersSuccesses[$i]) == $item ? $item : ', ' . $item;
      }
      echo "<p>Jogo #$num: <strong>$igame</strong> → Acertou $qtdeAcertos dezena(s): <strong>$iSuccess</strong>.</p>";
    }
  }
  ?>

  <body>

</html>