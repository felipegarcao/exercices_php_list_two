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

  $nome = isset($_GET['nome']) ? $_GET['nome'] : '';
  $nota_1 = isset($_GET['nota_1']) ? $_GET['nota_1'] : '';
  $nota_2 = isset($_GET['nota_2']) ? $_GET['nota_2'] : '';
  $nota_3 = isset($_GET['nota_3']) ? $_GET['nota_3'] : '';
  $nota_4 = isset($_GET['nota_4']) ? $_GET['nota_4'] : '';
  $p3 = isset($_GET['p3']) ? $_GET['p3'] : '';

  $x =  isset($_GET['nome'], $_GET['nota_1'], $_GET['nota_4'], $_GET['nota_3'], $_GET['nota_4']) ? true : false;
  $media = $x ? ($nota_1 + $nota_2 + $nota_3 + $nota_4) / 4 : '';
  $resultado = $resultadoFinal = '';

  $show = "style='display: none;'";

  if ($x) {
    $resultado = $media >= 7 ? "$nome ficou com a média de $media e foi aprovado(a)." : "$nome ficou com media $media e ficou para realizar a p3";

    if ($media < 7) {
      $show = "style='display:block'";
      $mediaFinish = isset($_GET['p3']) ?  ($media + $p3) / 2 : '';
      $resultadoFinal = isset($_GET['p3']) ? ($mediaFinish >= 5 ? "$nome com a media final de $mediaFinish e foi aprovado." : "$nome com a media final de $mediaFinal e foi reprovado.") :  '';
    }
  }


  ?>


  <form method="get" class="container d-flex flex-column mt-5">
    <label class="d-flex flex-column">
      Nome:
      <input class="form-control" name="nota_1" type="number" min="5" />
    </label>

    <label>
      Nota 01:
      <input class="form-control" name="nota_1" id="nota_1" type="number">
    </label>

    <label>Nota 02:
      <input class="form-control" name="nota_2" id="nota_2" type="number">
    </label>

    <label>Nota 03:
      <input class="form-control" name="nota_3" id="nota_3" type="number">
    </label>

    <label>Nota 04:
      <input class="form-control" name="nota_4" id="nota_4" type="number">
    </label>

    <button type="submit" class="btn btn-primary mt-5">Verificar</button>

    <div class="mt-5">
      <p>Media Final <?= $resultado ?></p>
    </div>
  </form>


  <form method="get" class="container mt-5 d-flex flex-column" <?= $show ?>>
    <input name="nome" type="hidden" value="<?= $nome ?>">
    <input name="nota_1" type="hidden" step=".25" value="<?= $nota_1 ?>">
    <input name="nota_2" type="hidden" step=".25" value="<?= $nota_2 ?>">
    <input name="nota_3" type="hidden" step=".25" value="<?= $nota_3 ?>">
    <input name="nota_4" type="hidden" step=".25" value="<?= $nota_4 ?>">

    <label>
      Nota do Exame:
      <input class="form-control" name="p3" type="number" />
    </label>

    <button class="btn btn-danger" type="submit">Verificar</button>

  </form>

  <p <?= $show ?>>Aprovação Final: <?= $resuladoFinal ?></p>

  <body>

</html>