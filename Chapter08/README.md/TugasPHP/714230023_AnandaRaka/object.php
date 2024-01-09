<html>
<head>
<title>Tipe Data Objek</title>
</head>
<body>
<h2>Tipe Data Objek</h2>
<?php
class lest
{
    var $slr="variable class";
    function set_vars($str)
    {
        $this->str=$str;
    }
}
$class=new lest;
$class->set_vars("Variable Objek");
echo $class->str;
echo ("<br>");
echo $class->str;
?>
</body>
</html>