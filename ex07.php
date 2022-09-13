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

  ?>


  <form method="get" class="container d-flex flex-column">
    <label class="d-flex flex-column">
      Nome:
      <input class="form-control" name="nota_1" type="number" min="5" />
    </label>

    <label>
      Nota 01:
      <input name="nota_1" id="nota_1" type="number">
    </label>

    <label>Nota 02:
      <input name="nota_2" id="nota_2" type="number">
    </label>

    <label>Nota 03:
      <input name="nota_3" id="nota_3" type="number">
    </label>

    <label>Nota 04:
      <input name="nota_4" id="nota_4" type="number">
    </label>

    <button type="submit" class="btn btn-primary mt-5">Verificar idade</button>

    <div class="mt-5">
      <p>Media Final <?= $result ?></p>
    </div>
  </form>


  

  <body>

</html>