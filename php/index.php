<?php
// index.php

session_start();

if(isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Calling Website</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Welcome to Video Calling Website</h1>
    <p><a href="login.php">Login</a> or <a href="register.php">Register</a> to get started.</p>
</body>
</html>
