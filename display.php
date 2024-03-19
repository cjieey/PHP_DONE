<?php
include("dbconnect.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password match a record in the database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful, store username and first/last name in session variables
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];

        // Redirect to home.php
        header("Location: home.php");
        exit();
    } else {
        // Login failed, display error message or redirect back to login page
        echo "Invalid username or password";
    }
}

// Close the database connection
mysqli_close($conn);
?>