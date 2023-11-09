<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Statements Exercise 5</title>
</head>
<body>

  <?php

  echo "Division Table:<br>";

  for ($i = 1; $i <= 10; $i++) {
      for ($j = 1; $j <= 10; $j++) {
          $result = $i / $j;
          echo "$i / $j = " . number_format($result, 2) . "\t";
      }
      echo "<br>";
  }

  ?>

</body>
</html>
