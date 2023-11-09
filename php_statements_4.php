<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Statements Exercise 4</title>
</head>
<body>

  <?php

  $students =  [
      ["name" => "John Garg", "age" => "15", "school" => "Ahlcon Public school"],
      ["name" => "Smith Soy", "age" => "16", "school" => "St. Marie school"],
      ["name" => "Charle Rena", "age" => "16", "school" => "St. Columba school"]
  ];

  foreach ($students as $student) {
      echo "Name: {$student['name']}<br>";
      echo "Age: {$student['age']}<br>";
      echo "School: {$student['school']}<br><br>";
  }

  ?>

</body>
</html>
