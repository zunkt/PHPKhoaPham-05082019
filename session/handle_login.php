<?php
    session_start();
    if (isset($_POST['btnLogin'])) {
        if (isset($_POST['txtUsername']) && isset($_POST['txtPassword'])) {
            $username = $_POST['txtUsername'];
            $password = md5($_POST['txtPassword']);
            $connect = mysqli_connect('localhost', 'root', '', 'QLNguoiDung');
            mysqli_set_charset($connect, 'utf8');
            $queryString = "SELECT * FROM user WHERE username = '$username' && password = '$password'";
            $query = mysqli_query($connect, $queryString);
            $data = mysqli_fetch_assoc($query);
            if (count($data) > 0) {
                if (isset($_SESSION['login_fail_mess'])) {
                    unset($_SESSION['login_fail_mess']);
                }
                $_SESSION['username'] = $data['username'];
                header('location: index.php');
            } else {
                $_SESSION['login_fail_mess'] = 'Username hoặc password sai!';
                header('location: login.php');
            }
        }
    }

?>