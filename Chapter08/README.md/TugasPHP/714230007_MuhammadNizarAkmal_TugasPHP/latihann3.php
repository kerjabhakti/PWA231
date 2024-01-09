<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h2>menentukan diskon</h2>
    <?php
    $buy = 95000;
    $discount = 0;
    if ($buy >= 100000) {
        $discount = $buy * (25/100);
    } elseif ($buy >= 75000) {
        $discount = $buy * (20/100);
    } elseif ($buy >= 50000) {
        $discount = $buy * (15/100);
    } elseif ($buy >= 25000) {
        $discount = $buy * (10/100);
    } elseif ($buy >= 10000) {
        $discount = $buy * (5/100);
    }
    $co = $buy - $discount;
    echo ("<pre>");
    echo ("Total biaya = Rp.".$buy."<br>");
    echo ("Diskon = Rp.".$discount."<br>");
    echo ("Total Pembayaran = Rp.".$co);
    echo ("</pre>");
    ?>
</body>
</html>