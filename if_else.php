<?php 
 // if else condition

//  $a = 50000;
//  $b = 10;

// simple if else
//  if($a > 900){
//     echo "a is greater than 90";
//  }
//  else{
//     echo "a is lessthan 90";
//  }
$age = 1000;
// only if condition
// if($age > 18){
//     echo "you can drink";
//  }

// if else leader
 if($age > 18){
    echo "you can drink";
 }
 elseif($age < 18 && $age > 1){
    echo "you can play";
 }
 elseif($age < 90)
 {
    echo "you can walk";
 }
else{
    echo "done";
}
 echo "<br>";


 // create an if else leader using more than one else if
//  write a programme to allow a driver to drive only when his age is greater than 25
//  and less than 65.

$age = 34;
if($age < 25)
{
    echo " you can not drive a car";
}
elseif($age > 25 && $age < 65)
{
   echo " you can drive a car";
}
 ?>