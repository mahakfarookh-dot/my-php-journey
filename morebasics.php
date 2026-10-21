<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
 } 

.container{
    max-width: 80%;
    background-color: pink;
    margin: auto;
    padding: 23px;
}


</style>
<body>
    <div class="container">
    <h1> Lets learn about PHP </h1>
    This is the Real World  
    
    <?php
    $age = 8;
    if($age>18){
        echo "<br> eligible for vote";
    }
    else if($age=8){
        echo "<br>";
        echo "You are 8 years old";
    }
    else{
        echo "not eligible for vote";
    }
    
    $ch = "<br> Explore your ideas";
    echo $ch;
    echo "<br>";
    
    //array in php
    $languages = array("Python", "Java", "C#", "PHP");
    echo $languages[3];
    echo count($languages);

    //while Loop in php
    $a = 0;
    while ($a <= 5) {
        echo "<br> The value of a from while is: ";
        echo $a;
        $a++;
    }
        
    //Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br> The value of language is: ";
        echo  $languages[$a];
        $a++;
    }

     //do while loop
    $a = 220;
    do  {
       echo "<br> The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

     //For loop
     for ($a=0; $a < 5; $a++) { 
        echo "<br> The value of a from for loop is: ";
        echo $a;
    }
    
    foreach ($languages as $value) {
           echo "<br> The value from foreach loop is";
           echo $value;
    }

    function print4(){
        echo "<br> MOON";
    }
    print4();
    print4();
    print4();
    print4();

     function print_number($number){
        echo "<br> Your number is";
        echo $number;
    }
    print_number(12);
    print_number(348);
    print_number(76);

    ?>


</body>
</html>
