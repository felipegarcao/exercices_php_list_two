<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 4</title>
</head>

<body>

  <?php
  $ladoA = isset($_GET["ladoA"]) ? $_GET["ladoA"] : '';
  $ladoB = isset($_GET["ladoB"]) ? $_GET["ladoB"] : '';
  $ladoC = isset($_GET["ladoC"]) ? $_GET["ladoC"] : '';
  $triangle = false;

  if (isset($_GET["ladoA"], $_GET["ladoB"], $_GET["ladoC"]) && $ladoA < ($ladoB + $ladoC) && $ladoB < ($ladoA + $ladoC) && $ladoC < ($ladoA + $ladoB)) {
    $triangle = true;
  }

  $mensagem = '';

  if ($triangle == true) {
    // possui todos os lados iguais
    if ($ladoA == $ladoB && $ladoB == $ladoC && $ladoC == $ladoA) {
      $mensagem = "O triangulo é equilatero.";
    }
    //  possui todos os lados diferentes
    else if ($ladoA != $ladoB && $ladoB != $ladoC && $ladoC != $ladoA) {
      $mensagem = "O triangulo é escaleno.";
    } else {
      // possui dois lados iguais
      $mensagem = "O triângulo é isósceles.";
    }
  } else {
    $mensagem = "As medidas informadas não correspondem a um triângulo.";
  }
  ?>


  <form method="get" class="d-flex flex-column container mt-5">

    <label class="d-flex flex-column">Lado A: (cm)
      <input class="form-control" name="ladoA" type="number" min="0" />
    </label>

    <label class="d-flex flex-column">Lado B: (cm)
      <input class="form-control" name="ladoB" type="number" min="0" />
    </label>

    <label class="d-flex flex-column">Lado C:(cm)
      <input class="form-control" name="ladoC" type="number" min="0" />
    </label>

    <button type="submit" class="btn btn-primary mt-5">Resultados</button>

    <div class="mt-5">
      <p>Resultados <?= $mensagem ?></p>
    </div>

  </form>
</body>

</html>