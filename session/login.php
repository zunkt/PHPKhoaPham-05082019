<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="handle_login.php" method="POST">
        <input type="text" name="txtUsername" placeholder="Username"/> <br/>
        <input type="password" name="txtPassword" placeholder="Password"/> <br/>
        <button type="submit" name="btnLogin">Đăng nhập</button>
    </form>
    <br/>
    <a href="register.php">Đăng ký</a>
    <?php
        session_start();
        if (isset($_SESSION['login_fail_mess'])) {
            echo $_SESSION['login_fail_mess'];
            unset($_SESSION['login_fail_mess']);
        }
    ?>
</body>
</html>
