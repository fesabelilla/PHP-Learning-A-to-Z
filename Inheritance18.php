<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      class Chef
      {

        function makeChicken()
        {
          echo "The chef makes chicken. <br>";
        }
        function makeSalad()
        {
          echo "The chef makes salad. <br>";
        }
        function makeSpecialDish()
        {
          echo "The chef makes special dish. <br>";
        }
      }

    class italianChef extends Chef
    {

      function makePasta()
      {
        echo "The chef makes pasta.<br>";
      }
      //override makeSpecialDish() function
      function makeSpecialDish(){
        echo "The chef makes bbq ribs.<br>";
      }


    }

      $chef = new Chef();
      $chef-> makeChicken();
      $chef -> makeSpecialDish();

      $italianChef = new italianChef();
      $italianChef -> makeChicken();
      $italianChef -> makePasta();
      $italianChef -> makeSpecialDish();


     ?>
  </body>
</html>
