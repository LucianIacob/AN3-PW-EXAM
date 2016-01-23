<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>

<?php

require 'server/connect.inc.php';
require 'server/core.inc.php';

if (isset($_SESSION['userID']) && !empty($_SESSION['userID'])) {
    echo '<div id="main">You are logged id.</div>';
    echo '<a href="server/logout.php">Log out</a>';
    header("Location: adminpage.php");
} else {
    include 'server/login.inc.php';
}

include 'server/eventtabs.php';

?>

</body>
</html>