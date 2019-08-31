<?php

require('db.php');

if (isset($_POST['btnInsert'])) {
    if (!empty($_POST['txtTask'])) {
        $taskName = $_POST['txtTask'];
        $queryString = "INSERT INTO tasks(name) VALUES('$taskName')";
        $result = mysqli_query($con, $queryString);
        if (!$result) {
            $error = "Error insert";
        }
    } else {
        $error = "Bạn chưa nhập task!!";
    }
    
}

if (isset($_POST['btnDelete'])) {
    if (!empty($_POST['taskId'])) {
        $idTask = $_POST['taskId'];
        $queryString = "DELETE FROM tasks WHERE id=$idTask";
        $result = mysqli_query($con, $queryString);
        if (!$result) {
            $error = "Error delete";
        }
    }
}

if (isset($_POST['btnUpdate'])) {
    if (!empty($_POST['txtTaskUpdate'])) {
        $idTask = $_POST['taskId'];
        $taskName = $_POST['txtTaskUpdate'];
        $queryString = "UPDATE tasks SET name='$taskName' WHERE id=$idTask";
        $result = mysqli_query($con, $queryString);
        if (!$result) {
            $error = "Error update";
        }
    } else {
        $error = "Chưa nhập nội dung task!!";
    }
}


header('location: task.php');

?>
