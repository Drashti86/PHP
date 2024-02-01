<?php
echo "this is a multidementional array : ";

// two dementinal array
//metrix 2 * 2
$multidim = array(
    array(2, 3, 7, 8),
    array(1, 2, 3, 1),
    array(4, 5, 0, 1)
);
// echo var_dump($multidim); // give type
echo "<br>";
echo $multidim[0][0];
echo $multidim[0][1];
echo $multidim[0][2];
echo $multidim[0][3];
echo "<br>";
echo $multidim[1][0];
echo $multidim[1][1];
echo $multidim[1][2];
echo $multidim[1][3];
echo "<br>";
echo $multidim[2][0];
echo $multidim[2][1];
echo $multidim[2][2];
echo $multidim[2][3];
echo "<hr>";
for($i=0;$i < count($multidim);$i++)
{
    echo var_dump($multidim[$i]);
    echo "<br>";
}
echo "<hr>";
for($i=0;$i < count($multidim);$i++)
{
    for($j=0;$j < count($multidim[$i]);$j++)
    { 
        echo $multidim[$i][$j];
      echo " ";
    }
    echo "<br>";
}

// aslo try three deminesional array
?>