<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan 1</title>
</head>
<body>
  <h2>latihan 1</h2>
  <?php
  $a = 10;
  ganjilgenap($a);
  function ganjilgenap($angka) {
    if ($angka % 2 == 0) {
      echo ("$angka adalah bilangan genap");
    } else {
      echo ("$angka adalah bilangan ganjil");
    }
  }
  ?>
</body>
</html>