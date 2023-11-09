<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Statements Exercise 2</title>
</head>
<body>

  <?php

  $quantity1 = 70;
  $quantity2 = 100;
  $price1 = 35;
  $price2 = 30;

  $totalCost1 = $quantity1 * $price1;
  $totalCost2 = $quantity2 * $price2;

  if ($totalCost1 < $totalCost2) {
      echo "<p>Deal 1 is the better option. Total cost: $totalCost1</p>";
  } elseif ($totalCost1 > $totalCost2) {
      echo "<p>Deal 2 is the better option. Total cost: $totalCost2</p>";
  } else {
      echo "<p>Both deals are equally good. Total cost: $totalCost1</p>";
  }
  
  ?>

</body>
</html>
