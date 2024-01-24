<html>
<head>
<title>Latihan 1 Gita</title>
</head>
<body>
<h2>Latihan 1</h2>
<pre>
<?php
$ABC = 5;
cekganjilgenap($ABC);
function cekganjilgenap($ABC){
    if ($ABC % 2 == 0) {
        echo ("$ABC adalah bilangan genap.");
    } else {
        echo ("$ABC adalah bilangan ganjil.");
    }
}
?>
<pre>
</body>
</html>