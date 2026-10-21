<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        
        
        <?php
        define('pi',3.14);
         echo"Hello World";
        // Secret Algorithm

        
        $variable1 = 14;
        $variable2 = 2;
        echo"<br>";

        echo  $variable1;
        echo "<br>";
        echo $variable2;
        echo "<br>";
        
         echo  $variable1+$variable2;
         echo "<br>";

         //operators in php
         //arithmetic Operators
         echo "<h1> arithmetic operator </h1>";
          echo "The value of arithmetic addition";
          echo $variable1+$variable2;
          echo "<br>";

           echo "The value of arithmetic subtraction";
          echo $variable1-$variable2;
          echo "<br>";

           echo "The value of arithmetic multiply";
          echo $variable1*$variable2;
          echo "<br>";

           echo "The value of arithmetic divison";
          echo $variable1/$variable2;
          echo "<br>";

         //assignment Operators 
         echo "<h1> assignment operator </h1>";
         $newvar = $variable1;
         $newvar *= 2;
         echo "The value of new variable";
         echo $newvar;
         echo "<br>";

         //comparison Operators
         echo "<h1> comparison operator </h1>";
         echo "The value of 2==6";
         echo var_dump(2==6);
         echo "<br>";

         echo "The value of 2!=6";
         echo var_dump(2!=6);
         echo "<br>";

         echo "The value of 2<=6";
         echo var_dump(2<=6);
         echo "<br>";

         echo "The value of 2>=6";
         echo var_dump(2>=6);
         echo "<br>";
         
        //increment/decrement Operators
        echo "<h1> Increment/ Decrement operator</h1>";

        echo $variable1=2;
        echo "<br>";

        echo $variable1++;
        echo "post increment";
        echo $variable1;
        echo "<br>";

        echo $variable1--;
        echo "post decrement";
        echo $variable1; 
        echo "<br>";

        echo ++$variable1;
        echo "pre incrrement";
        echo $variable1;
        echo "<br>";

        echo --$variable1;
        echo "pre decrement";
        echo $variable1;
        echo "<br>";
        
         //logical Operators
         echo "<h1> Logical operator </h1>";
         //and (&&)
         $myvar = (true and true);
         echo "<br>";
         echo var_dump ($myvar);

         //or (|)
         $myvar = (false | true);
         echo "<br>";
         echo var_dump ($myvar);

         //not (!)
          $myvar = ( ! true);
         echo "<br>";
         echo var_dump ($myvar);

        echo "<br>";

        //data types in php
        echo "<h1> data types in php </h1>";
        // 1.String 
          $var = "This is a string";
          echo var_dump($var);
          echo "<br>";

        // 2.Integer
        $var = 58;
          echo var_dump($var);
          echo "<br>";

        // 3.Float
          $var = 12.4;
          echo var_dump($var);
          echo "<br>";

        // 4.Boolean
          $var = true;
          echo var_dump($var);
          echo "<br>";

        // 5.Array
        $var = [2,4,6];
          echo var_dump($var);
          echo "<br>";

        // 6.Object
        $var = "obj";
          echo $var;
          echo "<br>";
          echo pi;

        

?>
<?php
   //hello world
       

?>

</div>
</body>
</html>