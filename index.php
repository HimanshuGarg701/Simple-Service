<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Simple print statement
      echo "TESTING PRINT STATEMENT <br />";
        echo "Hello from php <br /><br />";


        //Variables
        $x = 5;
        $y = "John";
        $z = 3.54;

        echo "TESTING VARIABLES <br />";
        echo "Hello $y, you need to pay $$z and not $$x <br /><br />";

        //array
        echo "TESTING ARRAY<br />";
        $fruits = array("apple", "mango", "banana", "grapes", "watermelon");
        echo "$fruits";
        echo "Number of fruits ".count($fruits)."<br /><br />";

        echo "TESTING DICTIONARY <br />";
        $marks = array("Aaraon"=>"A+", "Bug" => "B+", "Chris" => "A-");
        echo "Marks obtained by Bug ".$marks["Bug"]." <br /><br />";

        //Hey function
        function hey(){
          echo "Hello There <br /><br />";
        }

        //Simple function call to hey()
        echo "TESTING FUNCTION <br />";
        hey();
     ?>

  </body>
</html>
