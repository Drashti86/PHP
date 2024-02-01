<?php
   // string functions 
$name = "PHP coding";
echo $name;
echo "<br>";
echo "my length is " .strlen($name); // we can concate two string using (dot .) operator
echo "<br>";
echo str_word_count($name); // count the word
echo "<br>";
echo strrev($name); // this function reverse reverse
echo "<br>";

echo strpos($name,"g"); // give the position of word or character
echo strpos($name,"g");
echo strpos($name,"HP"); // index return

echo "<br>";
echo str_replace("coding","language",$name); // replace the word or character
echo "<br>";
echo str_repeat($name,50);

//trim
//pre is a as it is print  html function
//php manual = find string functions 
echo rtrim("<pre>    this is a good   <pre>");  // right side space remove
echo ltrim("<pre> this is a good </pre>"); // left side space remove
?>