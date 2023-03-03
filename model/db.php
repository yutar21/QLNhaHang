
<?php
    $dsn = 'mysql:host=localhost;dbname=quanlynhahang';
    $username = 'root';
    //$password = 'pa55word';

    try {
        $db = new PDO($dsn, $username);
        //$db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        include('view/error.php');
        exit();
    } 
?>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $mydb = 'quanlynhahang';
    $connect = mysqli_connect($server, $user, $pass);
    if (!$connect) {
        die ("Cannot connect to $server using $user");
    } else {
        mysqli_select_db($connect, $mydb);
    }
