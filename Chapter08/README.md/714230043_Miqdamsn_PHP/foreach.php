<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>foreach</title>
</head>
<body>
  <h2>penggunaan kontrol foreach</h2>
  <b>nama bulan : </b> <br>
  <?php
  $i = 0;
  $bulan = array("januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "september", "oktober", "november", "desember");
  foreach($bulan as $bln) {
    echo(($i+1)." $bln <br>");
    $i++;
  }
  ?>
</body>
</html>