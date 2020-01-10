<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="MadLibsGame3.php" method = "get">
      Color : <input type="text" name = "color"><br>
      Plural Noun : <input type="text" name = "pluralNoun"><br>
      Celebrity : <input type="text" name = "celebrity"><br>
      <input type="submit" >
    </from>
    <br><br>
    <?php
      $color = $_GET["color"];
      $pluralNoun = $_GET["pluralNoun"];
      $celebrity = $_GET["celebrity"];
      echo "Roses are $color.<br>";
      echo "$pluralNoun are blue.<br>";
      echo "I love $celebrity.<br>";
     ?>
  </body>
</html>
