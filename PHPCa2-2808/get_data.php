<?php

$queryString = "SELECT * FROM tasks";
$result = mysqli_query($con, $queryString);

while ($row = mysqli_fetch_assoc($result)) {
    $task[] = $row;
}

?>