<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel</title>
  <style>
    td {
      padding: 20px;
    }

    .genap {
      color: white;
      background-color: red;
    }

    .ganjil {
      color: red;
      background-color: white;
    }
  </style>
</head>

<body>
  <?php
  $baris = 4;
  $kolom = 5;
  $no = 1;
  echo "<table border='1'>";
  for ($i = 1; $i <= $baris; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $kolom; $j++) {
      if ($no % 2 == 0) {
        echo "<td class='genap'>${no}</td>";
      } else {
        echo "<td class='ganjil'>${no}</td>";
      }
      $no = $no + 1;
    }
    echo "</tr>";
  }
  echo "</table>";
  ?>

</body>

</html>