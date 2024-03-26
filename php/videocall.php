<?php
// video_call.php

session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Call</title>
    <!-- Include any necessary CSS files -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Video Call</h1>
        <!-- Include the video call interface here -->
        <div id="video-call-interface">
            <!-- This is where the video stream will be displayed -->
            <video id="local-video" autoplay></video>
            <video id="remote-video" autoplay></video>
            <!-- Add buttons for call controls -->
            <button id="start-call-btn">Start Call</button>
            <button id="end-call-btn">End Call</button>
        </div>
    </div>

    <!-- Include any necessary JavaScript files -->
    <script src="assets/js/script.js"></script>
</body>
</html>
