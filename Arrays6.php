<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        $friends = array("mrx", "mry", "mrz", "mrk" , 4000);
        echo $friends[1];
        echo "<br>";
        //modefied
        $friends[1] = "mrA";
        echo $friends[1];
        echo "<br>";
        echo $friends[4];
        echo "<br>";
        //count element
        echo count($friends);
        //add element
        echo "<br>";
        $friends[5] = "melinda";
        echo count($friends);
    ?>

  </body>
</html>
