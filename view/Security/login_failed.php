<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../../css/login.css">
        <link rel="shortcut icon" href="../../images/icon.png">
        <script src="../js/index.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form" action='../../controller/Security/login.php' method='POST'>
                    <input type="text" name='txtUsername' placeholder="Username"/>
                    <input type="password" name='txtPassword' placeholder="Password"/>
                    <p class="message_failed">Đăng nhập thất bại. Vui lòng kiểm tra lại tài khoản và mật khẩu</a></p>
                    <button>Login</button>
                </form>
            </div>
        </div>        
    </body>
</html>