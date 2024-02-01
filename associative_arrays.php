<?php
echo "Asoociative Array";
// $arr = array("this","that","what","how");
// foreach($arr as $value)
// {
//     echo  $value;
// }

$favcolor = array('sita' =>'red','ram' => 'green','krishna' => 'pink',8 => 'yellow');
//   echo "<br>";
//   echo $favcolor['krishna'];
//   echo "<br>";
//   echo $favcolor['sita'];
//   echo "<br>";
//   echo $favcolor[8];

//in loop as
foreach($favcolor as $riya => $priya) //foreach($favcolor as $key => $value) = also write
{
    echo "<br>";
    echo "$riya : $priya";
}
?>