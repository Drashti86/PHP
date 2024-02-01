<?php
// Data types in PHP

// primary datatypes : 
// 1.string datatype
// 2.integer
// 3.float
// 4.boolean
// 5.object
// 6.array
// 7.Null

// string = combinations of characters 

$name = "Drashti";
$friend = 'Priya';
echo "$name friend is a $friend";

//integer data type = non decimal number
$num1 = 90;
$num2 = -90;
echo "<hr>";
echo "<br>";
echo $num1;
echo $num2;

//floating point data type = decimal number
$num1 = 34.5;
$num2 = -34.5;
echo "<hr>";
echo "<br>";
echo $num1;
echo $num2;

//boolean data type = can be either true or false

$x = true;
$is_friend = false;
echo "<hr>";
echo "<br>";
echo $x;
echo $is_friend;
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);

//object - instances of classes
// student is class and student_one is a object

//Array = use to store multipal value in a single variables
// in php index strat with a 0
// var_dump() is a give datatype 
$student = array("drashti","priya","rutvi","manswi"); // this is a numeric array
echo "<hr>";
echo "<br>";
echo var_dump($student);
echo "<br>";
echo $student[0];
echo "<br>";
echo $student[1];
echo "<br>";
echo $student[2];
echo "<br>";
echo $student[3];

// null
$name = NUll;
echo "<br>";
echo "<hr>";
echo var_dump($name);

?>