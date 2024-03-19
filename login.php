<?php
    include("dbconnect.php");

    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM users where username = '$username' and password = '$password'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
            session_start();
            
            // Store user information in session variables
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            header("Location:home.php");
            echo '';
        }
        else{
            echo '<script>
            window.location.href = "index.php";
            alert("Login Failed. Invalid username or password!!!");
            </script>';
        }

    }
?>