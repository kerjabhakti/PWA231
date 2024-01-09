<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>objek pada php</title>
</head>
<body>
  <h2>type data objek</h2>
  <?php
  class test {
    var $str ="Variable class";
    function set_vars($str)
    {
      $this->str=$str;
    }
  }
  $class = new test;
  echo $class->str;
  $class->set_vars("Variable objek");
  echo ("<br>");
  echo $class->str;
  ?>
</body>
</html>