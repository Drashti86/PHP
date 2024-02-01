
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Navigation Bar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .container {
           
            width: 300px;
           margin-left: 500px;
           margin-top: 50px;
          padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .container h2 {
            text-align: center;
        }
        .container input[type="text"],
        .container input[type="password"],
        .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#contact">Contact</a>
</div>
<?php
   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
        // $email = $_GET['email'];
    // $password = $_GET['password'];
    echo '<div style="padding: 20px; background-color: #f44336; color: white; text-align: center;">
    <strong>Alert!</strong> your email '.$email. 'and passwored '. $password.' Success
</div>';
   }


?>
<div class="container">
    <h2>Login Form</h2>
    <!-- get ruest ma baha paramter url ma dekhay or  pass thai ane post laine jai page ni pase 
action="/Drashti/get_post_rquest.php" (this is a payh wich you send or pass your data  
  get = apne batave ke tame kyo data kya tag no use karine nakhelo che ane post is not shown that data -->
    <form action="/Drashti/get_post_rquest.php" method="POST">  <!-- pass parameter on this page -->
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter your email">

        <label for="pass">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">

        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>
