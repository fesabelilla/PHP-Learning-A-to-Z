<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      class Movie
      {
        public $title;
        private $rating;

        function __construct($title, $rating)
        {
          $this->title = $title;
          $this->setRating($rating);
        }

        function getRating(){
          return $this->rating;
        }

        function setRating($rating){
          $this->rating = $rating;
        }
      }
      $avengers = new Movie("Avengers", "PG-13");

      $avengers->setRating("CD-15");
      echo $avengers->getRating();


     ?>
  </body>
</html>
