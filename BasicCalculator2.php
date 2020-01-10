<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--
    <form action="BasicCalculator2.php" method="get">
    Enter Num1 : <input type="number" name="num1">
      <br>
    Enter Num2 : <input type="number" name="num2">
      <br>
      <input type="submit">
    </form>
  Ans : <?php echo $_GET["num1"] + $_GET["num2"]; ?>

  <form>
    <a href="Site1.php">Back</a>
  </form>
-->
  <form action="BasicCalculator2.php" method="post">
      First Num : <input type="number" step="0.001" name="num1"><br>
      OP : <input type="text" name="op"><br>
      Second Num : <input type="number" name="num2"><br>
      <input type="submit">
  </form>

  <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if($op == "+"){
      echo $num1 + $num2;
    }elseif ($op == "-") {
      echo $num1 - $num2;
    }elseif ($op == "*") {
      echo $num1 * $num2;
    }elseif ($op == "/") {
      echo $num1 - $num2;
    }else {
      echo "Invalid Operator .";
    }


   ?>


  </body>
</html>
