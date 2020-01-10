<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
/*
      $index = 1;
      while ($index<=5) {
        echo "$index<br>";
        $index++;
      }
      */

//while loop

  /*
      $index = 6;
      while ($index<=5) {
        echo "$index<br>";
        $index++;
      }*/

      //do while loops
    /*  $index = 6;
      do{
        echo "$index <br>";
        $index++;
      }while($index <= 5);
*/
//for loops

  $luckyNumbers = array(4,5,2,4,8,42);

    for($i = 0 ; $i < count($luckyNumbers) ; $i++){
      echo "$luckyNumbers[$i] <br> ";
    }

     ?>
  </body>
</html>
