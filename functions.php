<?php 
echo "functions in php";
//use for data wrapped
function sum_of_marks($value)
{
    $sum_of = 0;
    $i = 1;
    foreach($value as $num)
    {
        $sum_of  += $num;
        $i++;
    }
    return $sum_of/$i; // avg
}
$priya= array(11,2,3,4,5,6,7,8,9);
echo count($priya); // count how many value is haiving 
$returning_sum = sum_of_marks($priya);
echo $returning_sum;
?>