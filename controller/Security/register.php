<?php
 
 // Nếu không phải là sự kiện đăng ký thì không xử lý
 if (!isset($_POST['txtUsername'])){
     die('');
 }
  
 //Nhúng file kết nối với database
 include_once("../../model/db.php");
       
 //Khai báo utf-8 để hiển thị được tiếng việt
 header('Content-Type: text/html; charset=UTF-8');
       
 //Lấy dữ liệu từ file dangky.php
 $username   = addslashes($_POST['txtUsername']);
 $password   = addslashes($_POST['txtPassword']);
 $email      = addslashes($_POST['txtEmail']);
 $fullname   = addslashes($_POST['txtFullname']);
 $birthday   = addslashes($_POST['txtBirthday']);
 $sex        = addslashes($_POST['txtSex']);
       
 //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
 if (!$username || !$password || !$email || !$fullname || !$birthday || !$sex)
 {
    header("Location: ../../view/security/register_Failed.php");
     exit;
 }
       
     // Mã khóa mật khẩu
     $password = md5($password);
       
 //Kiểm tra tên đăng nhập này đã có người dùng chưa
 if (mysqli_num_rows(mysqli_query($connect, "SELECT username FROM member WHERE username='$username'")) > 0){
    header("Location: ../../view/security/register_UserFailed.php");
    exit;
 }
       
 //Kiểm tra email có đúng định dạng hay không
 if (!mb_ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
 {
    header("Location: ../../view/security/register_EmailFailed.php");
    exit;
 }
       
 //Kiểm tra email đã có người dùng chưa
 if (mysqli_num_rows(mysqli_query($connect, "SELECT email FROM member WHERE email='$email'")) > 0)
 {
    header("Location: ../../view/security/register_EmailFailed.php");
    exit;
 }
 //Lưu thông tin thành viên vào bảng
 @$addmember = mysqli_query($connect,"
     INSERT INTO member (
         username,
         password,
         email,
         fullname,
         birthday,
         sex
     )
     VALUE (
         '{$username}',
         '{$password}',
         '{$email}',
         '{$fullname}',
         '{$birthday}',
         '{$sex}'
     )
 ");
                       
 //Thông báo quá trình lưu
 if ($addmember)
    header("Location: ../../view/security/register_Success.php");
 else
     echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='../../view/security/register.php'>Thử lại</a>";
?>