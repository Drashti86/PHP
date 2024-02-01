<?php
     echo "for each loop in php : ";
     $arr = array("pen","box","rose","harpic","picnic");
     echo "print using for loop : <br>";
     for($i = 0;$i < count($arr);$i++)
     {
         echo $arr[$i];
         echo "<br>";
     }

     echo "<hr>";
     echo "using foreach loop <br>";
     // foreach loop use in array and object 
     foreach($arr as $value)
     {
        echo "$value <br>";
     }
?>