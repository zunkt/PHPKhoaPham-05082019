<?php

$con = mysqli_connect('localhost', 'root', '', 'QLSV');
    mysqli_set_charset($con, 'utf8');
    if (!$con) {
        die('Error connect');
    }
?>