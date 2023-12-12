<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
<h2>Penggunaan Kontrol For</h2>
<b>Nama Hari : </b><br>
<?php
$hari=array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
for($i=0;$i<count($hari);$i++)
{

    echo(($i+1)." $hari[$i] <br>");
}
?>
</body>
</html>