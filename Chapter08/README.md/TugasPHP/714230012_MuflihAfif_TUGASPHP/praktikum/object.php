<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tipe data Objek</h2>
    <?php 
    class Desb
    {
        var $str="Variabel Class";

        function set_vars ($str)
        {
            $this->str=$str;
        }
    }
    $class = new Desb;
    echo $class->str;
    $class->set_vars ("Variabel Object");
    echo ("<br>");
    echo $class->str;
    ?>
</body>
</html>