<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Exemplo 11</title>
</head>

<body>
  <div class="container mt-5">

    <h3 class="text-primary text-center mb-5">Tabuada de 1 a 100</h3>
    <div class="row">
      <div class="col">
        <?php
        function tabuada($fatorial)
        {
          echo "<strong>Tabuado do $fatorial</strong>";
          echo "<p>";
          for ($i = 1; $i <= 10; $i++) {
            $prod = $fatorial * $i;
            echo ($i == 1 ? "" : "<br>") . "$fatorial x $i = " . number_format($prod, 0, ',', '.');
          }
          echo "</p>";
        }

        $fatorial = 1;
        do {
          tabuada($fatorial);
          $fatorial++;
        } while ($fatorial <= 100);

        ?>
      </div>
    </div>
  </div>
  <body>

</html>