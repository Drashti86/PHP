<?php
echo "welcome to get conntected to a database";
# mysql
# database or database system
# easy managment 
# sql is a language
# dbms is database when we store data using sql
# reliable - વિશ્વસનીય

# way to connect to a mysql database
#1.MySQli extention (i add 2012) (mysql improve extention)
# -procedureal way
# -object orianted way
#2.PDO = php dataobject (more switch or chnage than write pdo)

//connecting to the database = required three variables
$servername = "localhost";
$username = "root";
$password = "";

//create a connection object
$conn = mysqli_connect($servername,$username,$password);

//die if connection was not succesfull
if(!$conn){
    die("sory we failed to connect" . mysqli_connect_error());
}

echo "connection was succes fully";
?>