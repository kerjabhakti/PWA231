<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Penggunaan Kontrol While </h2>
    <?php
        $hari = array ("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");
        $i=0;
        while ($i<count($hari))
        {
            echo("Hari ke&nbsp". ($i+1). "&nbspadalah&nbsp". $hari[$i]. "<br>");
            $i++;
        }
    ?>
</body>
</html>