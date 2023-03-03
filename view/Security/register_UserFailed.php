<?php
    require_once('../../controller/Security/auth.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../../css/login.css">
        <link rel="shortcut icon" href="../../images/icon.png">
        <title>Trang đăng ký</title>
    </head>
    <body>
        <form class="login-form" action="../../controller/Security/register.php" method="POST">
            <div class="form">
                <input type="text" placeholder="Username" name="txtUsername"/>
                <p class="message_failed">Tên đăng nhập này không hợp lệ hoặc đã có người dùng. Vui lòng nhập lại.</a></p>
                <input type="password" placeholder="Password" name="txtPassword"/>
                <input type="text" placeholder="Email address" name="txtEmail"/>
                <input type="text" placeholder="Họ và tên" name="txtFullname"/>
                <input type="text" placeholder="Ngày sinh" onfocus="(this.type='date')" onblur="(this.type='text')" name="txtBirthday"/>
                <select name="txtSex">
                            <option value="">Giới tính</option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                </select>
                <button>Tạo tài khoản</button>
                <input type="reset" value="Nhập lại" />
            </div>
        </form>
    </body>
</html>