<html>
<head>
    <title>Latihan 2 Gita</title>
</head>
<body>
    <h2>Latihan 2</title>
</body>
<pre>
<?php
$total = 0;
for ($i = 0; $i <= 6; $i++) {
    if ($i % 2 == 0) {
        $total += $i;
    }
}
echo "Jumlah bilangan genap dari 0 hingga 6 adalah: " . $total;
?>
</pre>
</body>
</html>