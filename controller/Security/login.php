<?php

//Khai báo sử dụng session
session_start();

include_once("../../model/db.php");

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (!isset($_POST['dangnhap'])) 
{
    

    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        header("Location: ../../view/security/login_failed.php");
        exit;
    }
     
    // mã hóa pasword
    $password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($connect, "SELECT username, password FROM member WHERE username='$username'");
    if (mysqli_num_rows($query) == 0) {
        header("Location: ../../view/security/login_failed.php");
        exit;
    }
     
    //Lấy mật khẩu trong database ra 
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        header("Location: ../../view/security/login_failed.php");
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    header("Location: ../../view/home.php");
    die();
}
?>