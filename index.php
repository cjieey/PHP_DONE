<?php
    include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MY FIRST PHP</title>
</head>
<body>
    <div id="container">
        <h1>KAPI BAI</h1>
        <img class="logo" src="logo.png" alt="">
    <div id="form">
            <h1>LOG IN</h1>
            <form name = "form" action= "login.php" method = "POST">
                <input type="text" id="user" name="user" placeholder = "User" > </br> </br>
                <input type="password" id="pass" name = "pass" placeholder = "Password"> </br> </br>
                <input type="submit" id="btn" value="Login" name="submit"> 
                <p><a href="signin.php">sign up</a></p>
            </form>
        </div>
    </div>
</body>
</html>