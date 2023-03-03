<?php
    function get_MonAn_MN1() {
        global $db;
        $query = 'SELECT * FROM mon_an  WHERE mon_an.MA_MENU = 1' ;
        $statement = $db->prepare($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }

    function get_MonAn_MN2() {
        global $db;
        $query = 'SELECT * FROM mon_an  WHERE mon_an.MA_MENU = 2' ;
        $statement = $db->prepare($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }

    function get_MonAn_MN3() {
        global $db;
        $query = 'SELECT * FROM mon_an  WHERE mon_an.MA_MENU = 3' ;
        $statement = $db->prepare($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }

    function get_MonAn_MN4() {
        global $db;
        $query = 'SELECT * FROM mon_an  WHERE mon_an.MA_MENU = 4' ;
        $statement = $db->prepare($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }

    function delete_MonAn($ma_mon) {
        global $db;
        $query = 'UPDATE mon_an
        SET DEL=1
        WHERE MA_MON = :ma_mon;';
        $statement = $db->prepare($query);
        $statement->bindValue(':ma_mon', $ma_mon);
        $statement->execute();
        $statement->closeCursor();
    }
    function add_MonAn($ten_MonAn, $Gia, $ma_Menu ) {
        global $db;
        $query = 'INSERT INTO mon_an (TEN_MON, GIA, MA_MENU, DEL)
              VALUES
                 (:ten_MonAn, :Gia, :ma_Menu, 0)';
        $statement = $db->prepare($query);
        $statement->bindValue(':ten_MonAn', $ten_MonAn);
        $statement->bindValue(':Gia', $Gia);
        $statement->bindValue(':ma_Menu', $ma_Menu);
        $statement->execute();
        $statement->closeCursor();
    }

    function update_gia($ma_mon, $gia_moi) {
        global $db;
        $query = 'UPDATE mon_an
        SET GIA = :gia_moi
        WHERE MA_MON = :ma_mon;';
        $statement = $db->prepare($query);
        $statement->bindValue(':ma_mon', $ma_mon);
        $statement->bindValue(':gia_moi', $gia_moi);
        $statement->execute();
        $statement->closeCursor();
    }

    session_start();
    function get_Member() {
        global $db;
        $query = 'SELECT * FROM member WHERE username=:username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }

    function update_member($fullname, $email, $birthday, $sex) {
        global $db;
        $query = 'UPDATE member
        SET fullname = :fullname, 
            email = :email,
            birthday = :birthday,
            sex = :sex
        WHERE username = :username;';
        $statement = $db->prepare($query);
        $statement->bindValue(':fullname', $fullname);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':birthday', $birthday);
        $statement->bindValue(':sex', $sex);
        $statement->bindValue(':username', $_SESSION['username']);
        $statement->execute();
        $statement->closeCursor();
    }

    function delete_ban($so_ban) {
        global $db;
        $query = 'UPDATE ban
        SET DEL=1
        WHERE SO_BAN = :so_ban;';
        $statement = $db->prepare($query);
        $statement->bindValue(':so_ban', $so_ban);
        $statement->execute();
        $statement->closeCursor();
    }

    function update_ban($so_ban) {
        global $db;
        $query = 'UPDATE ban
        SET DEL=0
        WHERE SO_BAN = :so_ban;';
        $statement = $db->prepare($query);
        $statement->bindValue(':so_ban', $so_ban);
        $statement->execute();
        $statement->closeCursor();
    }
    
    $member = get_Member();
    $MN1 = get_MonAn_MN1();
    $MN2 = get_MonAn_MN2();
    $MN3 = get_MonAn_MN3();
    $MN4 = get_MonAn_MN4();
    if(!empty($_POST["ma_mon_del"])){
        $ma_mon_del = $_POST["ma_mon_del"];
        delete_MonAn($ma_mon_del);
        header("Location: .?ma_mon_del=$ma_mon_del");
        header("Location: ./setting.php");
    }
    if(!empty($_POST["add_mon"]) && $_POST["Gia"] >0 ){
        $ten_mon = $_POST["Ten_mon"];
        $gia = $_POST["Gia"];
        $ma_menu = $_POST["add_mon"];
        add_MonAn($ten_mon, $gia, $ma_menu );
        header("Location: ./setting.php");
    }
    if(!empty($_POST["ma_mon_up"])){
        $ma_mon_up = $_POST["ma_mon_up"];
        $gia_mon_up = $_POST["gia_mon"];
        update_gia($ma_mon_up, $gia_mon_up);
        header("Location: ./setting.php");
    }
    if(isset($_POST["Save_Mb"])){
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $birthday = $_POST["birthday"];
        $sex = $_POST["sex"];
        update_member($fullname, $email, $birthday, $sex);
        header("Location: ./setting.php");
    }

    if(isset($_POST["save_information_ban"]) ){
        $update_ban = $_POST["update_ban"];
        for($i=1; $i<=40; $i++){
            delete_ban($i);
        }
        for($i=1; $i<=$update_ban; $i++){
            update_ban($i);
        }
        header("Location: ./setting.php");
    }
?>