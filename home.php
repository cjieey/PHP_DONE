<?php
    // Start session
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></h1>
    
</body>
</html>