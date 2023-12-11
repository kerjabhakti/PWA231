<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each</title>
</head>
<body>
<h2>Penggunaan Kontrol Foreach</h2>
<b>Nama Hari : </b><br>
<?php
$i=0;
$hari=array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
foreach($hari as $hr)
{
    echo(($i+1)."$hr <br>");
    $i++;
}
?>
</body>
</html>