<?php
    require_once('../controller/auth.php');
?>

<html>
    <head>
        <Title>Nhóm 2</Title>
        <link rel="stylesheet" href="../css/layout.css">
        <link rel="shortcut icon" href="../images/icon.png">
        <style>
            body{
                width: 100%;
                height: 100vh;
                box-sizing: border-box;
                background: url("../images/background.jpg");
                background-size: cover;
                background-attachment: fixed;
            }
        </style>
    </head>
    <body>
        <nav>
            <div class="brand">
                <h2>LOGO</h2>
            </div>
            <ul>
                <li><a href="home.php" aria-hidden="true">Trang chủ</a> </li>
                <li><a href="vipmember.php" aria-hidden="true">Khách hàng</a> </li>
                <li><a href="statistical.php" aria-hidden="true">Doanh thu</a></li>
                <li><a href="setting.php" aria-hidden="true">Quản lý thực đơn giá cả</a></li>
                <li><a href="./Security/logout.php" aria-hidden="true">Đăng xuất</a></li>
            </ul>
        </nav>
    </body>
</html>