<html>
    <head>
        <title>Tipe Data Objek</title>
</head>
<body>
    <h2>Tipe Data Objek</h2>
    <?php
    class test
    {
        var $str="Variable class";
        function set_vars($str)
        {
            $this->str=$str;
        }
    }
    $class=new test;
    echo $class->str;
    $class->set_vars("Variable Objek");
    echo("<br>");
    echo $class->str;
    ?>
    </body>
    </html>