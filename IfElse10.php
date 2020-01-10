<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
/*
      $isMale = true;
      $isTall = false;
      if($isMale && $isTall){
        echo "You are a tall male";
      }elseif($isMale && !$isTall){
        echo "You are a short male";
      }else {
        echo "You are not male.";
      }
*/
      function getMax($num1 , $num2){
        if($num1 > $num2){
          return $num1;
        }else{
          return $num2;
        }
      }

      $maxValue = getMax(5,10);
      echo "The max value is $maxValue";

     ?>

  </body>
</html>
