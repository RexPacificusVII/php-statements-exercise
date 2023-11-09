<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Statements Exercise 1</title>
</head>
<body>

  <?php

  $word1 = 'class';
  $word2 = 'kodego';
  $word3 = 'top';

  if (strlen($word1) > 5) {
      echo "<p>$word1 is more than 5 characters.</p>";
  } else {
      echo "<p>$word1 is not more than 5 characters.</p>";
  }

  if (strlen($word2) > 5) {
      echo "<p>$word2 is more than 5 characters.</p>";
  } else {
      echo "<p>$word2 is not more than 5 characters.</p>";
  }

  if (strlen($word3) > 5) {
      echo "<p>$word3 is more than 5 characters.</p>";
  } else {
      echo "<p>$word3 is not more than 5 characters.</p>";
  }
  
  ?>

</body>
</html>
