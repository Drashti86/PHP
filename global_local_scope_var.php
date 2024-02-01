<?php
  echo "scope ,global vsriable,local variable <br>";
  $a = 90;  // globale variable
  echo "<br>";
  echo "print a : $a" . "<br>";
  echo $b = 9;
 
  function print_value()
  {
    // $a = 20; // local variable

    // give me the access of global value 
     # if theis line will comment that give error infined variable
    global $a, $b;
    $a = 50; // this is change variable in perminanat

    echo "the value is  in function  : $a $b";
  }
  print_value();
  echo "<br>";
    echo $a;

    echo "<br>";
    // echo var_dump($GLOBALS);
    echo var_dump($GLOBALS);
    echo var_dump($GLOBALS["a"]);
    echo var_dump($GLOBALS["b"]);
    
?>