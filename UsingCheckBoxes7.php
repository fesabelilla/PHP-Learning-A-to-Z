<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="UsingCheckBoxes7.php" method="post">

      Apples : <input type = "checkbox" name = "fruits[]" value = "apples"><br>
      Oranges : <input type = "checkbox" name = "fruits[]" value = "oranges"><br>
      Pears : <input type = "checkbox" name = "fruits[]" value = "pears"><br>
      Banana : <input type = "checkbox" name = "fruits[]" value = "banana"><br>
      <input type = "submit">

    </form>

    <?php
    $fruits = $_POST["fruits"];
    echo $fruits[0];
    ?>

  </body>
</html>
