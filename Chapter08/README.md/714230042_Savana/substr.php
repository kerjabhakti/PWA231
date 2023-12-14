<html>
<head>
<title>fungsi : string</title>
</head>
<body>
    <h2>fungsi : string substr()</h2>
    <?php
    $string="pemrograman web php";
    $word=substr($string,16,3);
    echo("<i>\"$string\"</i> <br>");
    echo("hasil substr (16,3) adalah $word");
    ?>
</body>
</html>