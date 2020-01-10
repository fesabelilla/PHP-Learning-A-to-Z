<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="Get&Post5.php" method="post" >
      Password : <input type="password" name="password" ><br>
      <input type="submit">
    </form>
    <br> <br>

    <?php
      //echo $_GET["password"];
      //$password = (isset($_GET["password"]) ? $_GET["password"] : " ");
      //echo "$password";
      echo $_POST["password"];
    ?>
  </body>
</html>
