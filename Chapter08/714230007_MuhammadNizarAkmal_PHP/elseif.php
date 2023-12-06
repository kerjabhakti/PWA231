<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Else If</title>
</head>
<body>
    <?php
    $nilai = 80;
    echo ("nilai $nilai ");
    if ($nilai >= 85)
    {
        echo ("Grade A");
    } elseif (($nilai >= 75) and ($nilai < 85)) {
        echo ("Grade B");
    } elseif (($nilai >= 65) and ($nilai < 75)) {
        echo ("Grade C");
    } elseif (($nilai >= 50) and ($nilai < 65)) {
        echo ("Grade D");
    } elseif ($nilai < 50)
    {
        echo ("Grade E");
    }
    ?>
</body>
</html>