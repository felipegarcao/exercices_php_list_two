<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 1</title>
</head>

<body>
  <?php

  $kmInitial = isset($_GET['kmInitial']) ? $_GET['kmInitial'] : '';
  $price = isset($_GET['price']) ? $_GET['price'] : '';
  $ltConsumidos = isset($_GET['ltConsumidos']) ? $_GET['ltConsumidos'] : '';
  $kmFinish = isset($_GET['kmFinish']) ? $_GET['kmFinish'] : '';

  $distancia = $total = $car = '';

  if ($kmInitial != '' && $kmFinish != '' && $ltConsumidos != '' && $price != '') {
    $distancia = ($kmFinish - $kmInitial) . ' quilometros.';
    $total = number_format(($ltConsumidos * $price), 2, ',', '.') . '.';
    $car = number_format(($distancia / $ltConsumidos)) . ' km/L.';
  }

  ?>


  <form method="get" class="d-flex flex-column container mt-5">
    <label class="d-flex flex-column">Km Inicio:
      <input class="form-control" name="kmInitial" type="number" min="0" step=".01" />
    </label>

    <label class="d-flex flex-column"> Km Final:
      <input class="form-control" name="kmFinish" type="number" min="0" step=".01" />
    </label>

    <label class="d-flex flex-column"> Litros Consumidos:
      <input class="form-control" name="ltConsumidos" type="number" min="0" step=".01" />
    </label>

    <label class="d-flex flex-column">Preço por Litro:
      <input class="form-control" name="price" type="number" min="0" step=".01" />
    </label>

    <button type="submit" class="btn btn-primary">Calcular</button>


    <div class="mt-5">
      <p>Distância percorrida: <?= $distancia ?></p>
      <p>Valor total gasto: <?= $total ?></p>
      <p>Consumo do carro: <?= $car ?></p>
    </div>

  </form>





</body>

</html>