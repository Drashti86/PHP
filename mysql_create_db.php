<?php
//connecting to mysql
$servername = "localhost";
$username = "root";
$password = "";

//create a connection object
$conn = mysqli_connect($servername,$username,$password);
echo "yes";

// //create a databse
// $sql = "CREATE DATABASE example_thred";
// $result = mysqli_query($conn, $sql);

// //die if connection was not succesfull
// if(!$conn){
//     die("sory we failed to connect" . mysqli_connect_error());
// }
// else{
// echo "connection was succes fully";
// }

// //check database connection succsese
// if($result){
//     echo "db is done";
// }
// else{
//     echo "db is not done" . mysqli_error($conn); 
// }
// echo "the result is :" ; 
// echo var_dump($result);

?>