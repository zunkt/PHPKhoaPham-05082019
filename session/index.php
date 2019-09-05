<?php

session_start();


if (isset($_SESSION['username'])) {
    echo 'da login voi user: ' . $_SESSION['username'];
} else {
    header('location: login.php');
    // echo 'chua login';
}

?>

<html>
    <head>

    </head>
    <body>
        <a href="logout.php">Logout</a>
    </body>
</html>