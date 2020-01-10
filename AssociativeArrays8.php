<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<!--
    <?php
    //AssociativeArray - here "Zahid" -  is a key and "A+" - is the value of zahid.
    //keys are must be unique
      $grades = array("Zahid"=>"A+", "Fesabelilla"=>"A", "Hasan"=>"A-");
      echo $grades["Zahid"];
      //update value
      $grades["Fesabelilla"] = "A+";
      echo "<br>";
      echo $grades["Fesabelilla"];

      $studentRollNo = array("Zahid"=>82, "Fesabelilla"=>01, "Hasan"=>02);
      echo "<br>";
      echo $studentRollNo["Zahid"];
      echo "<br>";
      echo count($studentRollNo);
     ?>
-->
  <form action="AssociativeArrays8.php" method="post">
    Name : <input type="text" name="student">
    <input type="submit">
  </form>

  <?php
    $grades = array("Zahid"=>"A+", "Fesabelilla"=>"A", "Hasan"=>"A-");
    echo $grades[$_POST["student"]];
   ?>

  </body>
</html>
