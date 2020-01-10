<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="SwitchStatements11.php" method="post">
      What was Your grade?
      <input type="text" name="grade">
      <input type="submit">
    </form>


    <?php
      $grade = $_POST["grade"];
    //  echo $grade;
      switch ($grade) {
        case 'A':
          echo "You did amazing";
          break;
        case 'B':
          echo "You did pretty good";
          break;
        case 'C':
          echo "You did poorly";
          break;
        case 'F':
          echo "You fail";
          break;

        default:
          echo "Invalide Grade";
          break;
      }
     ?>
  </body>
</html>
