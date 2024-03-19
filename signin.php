<?php
    include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MY WEB</title>
</head>
<body>
<div class="contain" id="contain">
<img class="logo" src="logo.png" alt="">
    <background class="with-blur-backdrop"></background>
        <form class="form1" id="form1" action= "signup.php"method = "POST">
            <h1>SIGN UP</h1>
            <input type="text" name="firstname" placeholder="Firstname"><br><br>
            <input type="text" name="lastname" placeholder="Lastname"><br><br>
            <input type="number" name="age" placeholder="Age"><br><br>
            <input type="text" name="address" placeholder="Address"><br><br>
            <input type="text" name="username" placeholder="Username"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input class="btnn" id="btnn" type="submit" name="submit" value="Sign up">
            <p><a href="index.php" style="margin-left:32%; margin-top:-50%;">LOG IN</a></p>
        </form>
    </div>
</body>
</html>