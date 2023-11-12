<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Statements Exercise 5</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid black;
      text-align: center;
      padding: 5px;
    }
  </style>
</head>
<body>

  <?php
  echo "Division Table:<br>";
  
  echo "<table>";
  echo "<thead><tr><th></th>";
  for ($i = 1; $i <= 10; $i++) {
    echo "<th>{$i}</th>";
  }
  echo "</tr></thead>";

  echo "<tbody>";
  for ($i = 1; $i <= 10; $i++) {
    echo "<tr><th>{$i}</th>";
    for ($j = 1; $j <= 10; $j++) {
      $quotient = $i / $j;
      $roundedQuotient = round($quotient, 2);
      echo "<td>{$roundedQuotient}</td>";
    }
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
  ?>

</body>
</html>
