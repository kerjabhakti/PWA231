<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ini merupakan tipe data pada php</h2>
    <?php
    $var1="hallo";
    $var2= 1;
    $var3= 2.5;
    echo ("\$var1 = $var1<br>");
    echo ("\$var2 = $var2<br>");
    echo ("\$var3 = $var3<br>");
    echo ("tipe data \$var1 adalah ".gettype($var1)."<br>");
    echo ("tipe data \$var2 adalah ".gettype($var2)."<br>");
    echo ("tipe data \$var3 adalah ".gettype($var3)."<br>");
    ?>
</body>
</html>