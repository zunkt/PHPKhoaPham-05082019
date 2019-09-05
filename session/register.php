<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Đăng ký</h1>
    <form action="handle_register.php" method="POST">
        <input type="text" name="txtUsername" placeholder="Username"/> <br/>
        <input type="password" name="txtPassword" placeholder="Password"/> <br/>
        <button type="submit" name="btnRegister">Đăng ký</button>
    </form>
    <?php
        session_start();
        if (isset($_SESSION['register_fail_mess'])) {
            echo $_SESSION['register_fail_mess'];
            unset($_SESSION['register_fail_mess']);
        }
    ?>
</body>
</html>
