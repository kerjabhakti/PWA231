<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>for php</title>
</head>
<body>
  <h2>penggunaan kontrol for </h2>
  <?php
  $bulan = array("januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "september", "oktober", "november", "desember");
  for($i=0; $i<count($bulan); $i++) {
    echo (($i+1)." $bulan[$i] <br>");
  }
  ?>
</body>
</html>