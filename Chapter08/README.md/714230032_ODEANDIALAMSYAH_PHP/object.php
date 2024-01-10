<html>
<head>
    <title>tipe data objek</title>
</head>
<body>
    <h2>tipe data objek</h2>
    <?php
    class test
    {
        var $str="variabel class";
        function set_vars($str)
        {
            $this->str=$str;
        }
    }
    $class=new test;
    echo $class->str;
    $class->set_vars("variabel objek");
    echo ("<br>");
    echo $class->str;
    ?>
</body>
</html>