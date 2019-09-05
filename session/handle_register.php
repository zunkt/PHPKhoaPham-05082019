<?php
    session_start();
    if (isset($_SESSION['register_fail_mess'])) {
        unset($_SESSION['register_fail_mess']);
    }
    if (isset($_POST['btnRegister'])) {
        if (isset($_POST['txtUsername']) && isset($_POST['txtPassword'])) {
            $username = $_POST['txtUsername'];
            $password = md5($_POST['txtPassword']);

            $connect = mysqli_connect('localhost', 'root', '', 'QLNguoiDung');
            mysqli_set_charset($connect, 'utf8');

            $queryStringCheck = "SELECT * FROM user WHERE username = '$username'";
            $data = mysqli_query($connect, $queryStringCheck);
            $data = mysqli_fetch_assoc($data);
            if (!empty($data)) {
                if (count($data) > 0) {
                    $_SESSION['register_fail_mess'] = 'Đã tồn tại Username này! Vui lòng nhập lại Username khác!';
                    header('Location: register.php');
                    exit;
                }
            }
            
            $queryString = "INSERT INTO user(username, password, role) VALUES('$username', '$password', 2)";
            if (mysqli_query($connect, $queryString)) {
                $_SESSION['username'] = $username;
                header('Location: index.php');
                exit;
            } else {
                $_SESSION['register_fail_mess'] = 'Đã có lỗi xảy ra! Vui lòng thử lại!';
                header('Location: register.php');
                exit;
            }
        }
    }

?>