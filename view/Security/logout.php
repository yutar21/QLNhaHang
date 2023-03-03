<?php
    require_once('../../controller/Security/auth.php');
?>
<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../../css/login.css">
        <link rel="shortcut icon" href="../../images/icon.png">
        <title>Logout</title>
    </head>
    <body>
        <div class="form">
            <p class="message">Đăng xuất thành công <a href="login.php">Đăng nhập lại</a></p>
</div>
    </body>
</html>