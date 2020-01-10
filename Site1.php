<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <!--
   <?php
    /*echo "<h1>MZF's Site<h1>";
      echo "<hr>";
      echo "<p>Hi, this is Zahid and this is my website.</p>";
      */
     ?>
   -->
<!--<?php
  /*  $name = "TOM";
    $age  = 25;
    echo "There once was a man nameed $name<br>";
    echo "He was $age years old <br>";
    $name = "Mike";
    $age = 35;
    echo "He really liked the name $name <br>";
    echo "But didn't like being $age <br>";
    */
  ?>-->

  <!--Variables -->
<!-- working with string -->
<!--  <?php
  $phrase = "Programming Academy.";
  $age = 23;
  $cgpa = 3.34;
  $isMale = false;

  echo $phrase;

  //working with string
  echo "<br>";
  echo strtolower($phrase);
  echo "<br>";
  echo strtoupper($phrase);
  echo "<br>";
  echo strlen($phrase);
  echo "<br>";
  echo $phrase[0];
  echo "<br>";
  $phrase[0] = "B";
  echo $phrase[0];
  echo "<br>";
  echo $phrase;
  echo "<br>";
  echo str_replace("Brog","Prog",$phrase);
  echo "<br>";
  echo substr($phrase, 12);//12th char to end
  echo "<br>";
  echo substr($phrase, 12, 3); //that means substring will start 12th char and end (12+3)=15th char
  ?>
-->

<!-- working with numbers -->
<!--
<?php
  $num1 = 10;
  $num2 = 15.5;
  $sum = $num1 + $num2 ;
  echo $num1 + $num2 ;
  echo "<br>";
  echo abs($num1 - $num2);
  echo "<br>";
  echo pow(2, 4);
  echo "<br>";
  echo floor($num2);
  echo "<br>";
  echo ceil($num2);
  echo "<br>";
  echo round($num2);
  echo "<br>";

 ?>
-->
<!-- User input -->
<form action="Site1.php" method="get">
  Name : <input type = "text" name = "userName">
  <br>
  Age : <input type= "number" name = "age">
  <br>
  <input type="submit">
</form>

  <br>
  Your name is <?php echo $_GET["userName"]; ?>
  <br>
  Your age id <?php echo $_GET["age"]; ?>
  <br>
  <form>
    <a href="BasicCalculator2.php">Next Page</a>
  </form>
  </body>
</html>
