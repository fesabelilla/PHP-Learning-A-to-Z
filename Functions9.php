<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <!--<form action="Functions9.php" method = "post">
    Enter Name : <input type="text" name = "name">
    <input type="submit">
  </form>-->

<!-- function -->
<!--
    <?php
      function sayHi($name , $age){
        echo "Hello $name, you are $age.";
      }
    //  $name = $_POST["name"];
    //  sayHi($_POST["name"]);

    //sayHi() call
      sayHi("Zahid",23);
      echo "<br>";
      sayHi("Hasan",20);
      echo "<br>";
      sayHi("Fesabelilla",23);
     ?>
-->

<!-- Return -->
  <?php
    function cube($num){
      echo "Value of 4 cube is :";
      return $num*$num*$num;
    }

    $cubeResult = cube(4);
    echo $cubeResult;

   ?>



  </body>
</html>
