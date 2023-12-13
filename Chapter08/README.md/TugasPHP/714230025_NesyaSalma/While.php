<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <h2>Penggynaan Kontrol While</h2>
    <h3>Nesya Salma</h3>
    <?php
    $hari=array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
    $i=0;
    while ($i<count ($hari))
    {
        echo("Hari ke".($i+1)." adalah ".$hari[$i]."<br>");
        $i++;
    }
    ?>
</body>
</html>