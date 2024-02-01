<?php
 // operater and operands in PHP
 // operater :
 // 1.arithmetic op
 // 2.assignment operater
 // 3.comparison op
 // 4.logical op

 $a = 9;
 $b = 10;
echo "<hr>";
// 1.arithmetic op
 echo "s + b is : $a + $b"; //  echo "sum of a and b is :".($a + $b);  convert in to string 
 echo "a - b  is : $a - $b" . "<br>";
 echo "a % b  is : $a % $b" . "<br>";
 echo "a / b  is : $a / $b" . "<br>";
 echo "a * b  is : $a * $b" . "<br>";
 echo "a ** b  is : $a ** $b" . "<br>";
 
 echo "<hr>";
 // 2.assignment operater
 $x = $a;
 echo "assign value is : $x" . "<br>";
 $a += $a ;
 echo "assign the second method is : $a" . "<br>";
 $a -= $a ;
//  echo "assign the second method is : $a" . "<br>";
//  $a %= $a ;
//  echo "assign the second method is : $a" . "<br>";
//  $a /= $a ;
 echo "assign the second method is : $a" . "<br>";
 $a *= $a ;
 echo "assign the second method is : $a" . "<br>";

 echo "<hr>";
 //  3.comparison op
$x = 7;
$y = 7;
echo "<br>";
echo "x == y  , the result is " .var_dump($x == $y). "<br>"; 
$m = 10;
$n = 8;
echo "<br>";
echo "m == n  , the result is " . var_dump($m == $n). "<br>";
echo "<br>";
echo "m < n  , the result is " . var_dump($m < $n). "<br>";
echo "<br>";
echo "m > n  , the result is " . var_dump($m > $n). "<br>";
echo "<br>";
echo "m <= n  , the result is " . var_dump($m <= $n). "<br>";
echo "<br>";
echo "m >= n  , the result is " . var_dump($m >= $n). "<br>";
echo "<br>";
echo "m <> n  , the result is " . var_dump($m <> $n). "<br>";

echo "<hr>";
 // 4.logical op
 // true + true  = true
 // flase + true = flase
 // true + flase = flase
 // flase + flase = false
 $m = false;
 $n = true;
 echo var_dump($m and $n);
 echo "<br>";
 echo var_dump($m or $n);
 echo "<br>";
 echo var_dump($m && $n);
 echo "<br>";
 echo var_dump($m || $n);
 echo "<br>";
 echo var_dump(!$n);
 echo "<br>";
 echo var_dump(!$m);
?>