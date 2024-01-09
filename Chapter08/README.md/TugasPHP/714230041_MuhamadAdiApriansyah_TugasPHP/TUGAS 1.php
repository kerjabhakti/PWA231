<html>
<head>
<title>Tugas 1 Muhamad Adi</title>
</head>
<body>
<h2>Tugas 1</h2>
<pre>
<?php
$bilangan = 15;
cekganjilgenap($bilangan);
function cekganjilgenap($bilangan){
    if ($bilangan % 2 == 0) {
        echo ("$bilangan adalah bilangan genap.");
    } else {
        echo ("$bilangan adalah bilangan ganjil.");
    }
}
?>
<pre>
</body>
</html>