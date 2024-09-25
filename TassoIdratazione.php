<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasso d'idratazione</title>
</head>
<body>
    <?php
      $tasso;
      $peso = 60;
      $millilitri = 30;

      $tasso = $peso * $millilitri;

      echo "<h1>Mattia Cugusi</h1>";

      echo "<p>Il tasso di idratazione di una persona che pesa " . $peso . "kg e' di " . $tasso;

    ?>
    
</body>
</html>