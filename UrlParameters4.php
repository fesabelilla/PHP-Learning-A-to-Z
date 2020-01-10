<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="UrlParameters.php" method="get">
      Name : <input type="text" name="name"><br>
      <input type="submit">
    </form>
    <br><br>

    <?php
      $name = (isset($_GET["name"]) ? $_GET["name"] : " ");
      echo $name;
     ?>


  </body>
</html>
