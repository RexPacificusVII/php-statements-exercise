<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Statements Exercise 3</title>
</head>
<body>

  <?php

  $monthName = 'March';

  switch($monthName) {
    case 'January':
    case 'March':
    case 'May':
    case 'July':
    case 'August':
    case 'October':
    case 'December':
      echo "<p>The month of $monthName has 31 days.</p>";
      break;

    case 'February':
      echo "<p>The month of $monthName has either 28 or 29 days, depending on the year.</p>";
      break;

    case 'April':
    case 'June':
    case 'September':
    case 'November':
      echo "<p>The month of $monthName has 30 days.</p>";
      break;

    default:
      echo "<p>invalid</p>";
      break;
  }

  ?>

</body>
</html>
