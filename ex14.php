<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 14</title>
</head>

<body>

  <?php
  $texto = isset($_GET['texto']) ? $_GET['texto'] : '';
  $palavra = isset($_GET['palavra']) ? $_GET['palavra'] : '';

  $show = "style='display:none;'";
  $arrLetras = $arrLetUniq = array();
  if (isset($_GET['texto'], $_GET['palavra'])) {
    $pos = strpos($texto, $palavra);
    if ($pos != false) {
      $palavraInicial = $pos;
      $palavraFinal = $pos + strlen($palavra);
      $letras = strlen($texto);
      $arrPalavras = preg_split("/[\s,.;:_!?]+/", $texto);
      $textoSemCaracteresEspeciais = preg_replace("/[\s,.;:_!?]+/", '', $texto);

      for ($i = 0; $i < strlen($textoSemCaracteresEspeciais); $i++) {
        if ($textoSemCaracteresEspeciais[$i] != "/[\s,.;:_!?]+/") {
          array_push($arrLetras, $textoSemCaracteresEspeciais[$i]);
        }
      }

      $arrLetUniq = array_unique($arrLetras);
      foreach ($arrLetUniq as $key => $item) {
        count(array_keys($arrLetras, $item));
      }
    }

    $show = "style='display:block;'";
  }
  ?>


  <form method="get" class="container d-flex flex-column mt-5">
    <label>
      Informe um Texto:
      <input class="form-control" name="texto" type="text" />
    </label>

    <label>
      Informe uma palavra desse texto:
      <input class="form-control" name="palavra" type="text" />
    </label>

    <button type="submit" class="btn btn-primary mt-5">Começar</button>

  </form>

  <div <?= $show ?>>
    <p>Texto: <strong><?= $texto ?></strong>.</p>
    <p>A palavra <strong><?= $palavra ?></strong> começa na posição <?= $palavraInicial ?> e termina na posição <?= $palavraFinal ?>.</p>
    <p>O texto possui <?= $letras ?> letras (considerando os espaços, pontuações e caracteres especiais) e <?= sizeof($arrLetras) ?> palavras.</p>
    <h3>Letras e ocorrencias delas no texto</h3>

    <?php
    if (isset($_GET['texto'], $_GET['palavra'])) {
      echo "<p>";
      foreach ($arrLetUniq as $key => $item) {
        echo reset($arrLetUniq) == $item ? "" : "<br>";
        $quantidadeLetras = count(array_keys($arrayLetras, $item));
        $repeat = $quantidadeLetras > 1 ? "$quantidadeLetras vezes" : "$quantidadeLetras vez";
        echo "Letra <strong>$item</strong> aparece $repeat";
      }
      echo "</p>";
    }
    ?>

  </div>

  <body>

</html>