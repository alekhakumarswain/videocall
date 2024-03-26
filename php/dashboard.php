<?php
// dashboard.php

session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Welcome to Dashboard</h1>
    <p>This is your dashboard. You can start implementing video calling functionality here.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
