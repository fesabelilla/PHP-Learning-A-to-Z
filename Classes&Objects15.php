<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Book {
      var $title ; //attribute
      var $author ;
      var $pages ;

      function __construct($aTitle, $aAuthor, $aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages =$aPages;
      }

      }

      $book1 = new Book("Harry Potter","JK Rowling",400);//object is an instance of a class
      echo "$book1->title <br>";
      echo "$book1->author<br>";
      echo "$book1->pages";

/*
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book1->pages  = 400;

      echo "$book1->title <br>";
      echo "$book1->author<br>";
      echo "$book1->pages";

      $book2 = new Book("Hasan");

      $book2->title = "dfvbjhv";
      $book2->author = "vfdbkhf";
      $book2->pages = 200;
      echo "<br>$book2->title";
*/
     ?>

  </body>
</html>
