<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 3</title>
</head>

<body>

  <?php

  $total = isset($_GET["total"]) ? $_GET["total"] : '';
  $pagas = isset($_GET["pagas"]) ? $_GET["pagas"] : '';
  $valor = isset($_GET["valor"]) ? $_GET["valor"] : '';

  $totalFinanci = $restantes = $dividaRest = '';

  if ($total != '' && $pagas != '' && $valor != '') {
    $totalFinanci = $total * $valor;
    $restantes = ($total - $pagas) . '.';
    $dividaRest = 'R$ ' . number_format(($restantes * $valor), 2, ',', '.') . '.';
  }

  ?>

  <form method="get" class="d-flex flex-column container mt-5">

    <label class="d-flex flex-column">Total de Prestações do Financiamento:
      <input class="form-control" name="total" type="number" min="0" />
    </label>

    <label class="d-flex flex-column">Prestações Pagas:
      <input class="form-control" name="pagas" type="number" min="0" />
    </label>

    <label class="d-flex flex-column"> Valor de Cada Prestação:
      <input class="form-control" name="valor" type="number" min="0" />
    </label>

    <button type="submit" class="btn btn-primary mt-5">Calcular</button>

    <div class="mt-5">
      <p>Saldo Devedor atual <?= $restantes ?></p>
      <p>Prestações a pagar: <?= $dividaRest ?></p>
    </div>

  </form>


</body>

</html>