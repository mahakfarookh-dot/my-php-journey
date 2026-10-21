<?php
   $str = "This is a string";
   echo $str;

   $len = strlen($str);
   echo "<br> The length of string is:" . $len . " . Good Day";
   echo "<br> The number of words count in this string is: ", str_word_count($str);

   echo "<br> The reverse string is: ", strrev($str);
   echo "<br> The search for a in this string is: ", strpos($str, "a");
   echo "<br> The replaced string is: ", str_replace("a", "the", $str);
  
   

?>