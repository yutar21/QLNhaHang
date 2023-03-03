<?php
    function get_KH() {
        global $db;
        $query = 'SELECT * FROM khach_hang ORDER BY MA_KHACH_HANG';
        $statement = $db->prepare($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }
    function add_hoadon($ma_KH, $don_gia, $so_ban ) {
        global $db;
        $query = 'INSERT INTO hoa_don (MA_KHACH_HANG, NGAY_LAP, DON_GIA, SO_BAN)
              VALUES
                 (:ma_KH, CURRENT_DATE(), :don_gia, :so_ban)';
        $statement = $db->prepare($query);
        $statement->bindValue(':ma_KH', $ma_KH);
        $statement->bindValue(':don_gia', $don_gia);
        $statement->bindValue(':so_ban', $so_ban);
        $statement->execute();
        $statement->closeCursor();
        $query2 = 'SELECT * FROM hoa_don ORDER BY MA_HOA_DON DESC LIMIT 1';
        $statement = $db->prepare($query2);
        $statement->execute();
        $courses = $statement->fetch();
        $statement->closeCursor();
        return $courses['MA_HOA_DON'];
    }
    function add_datmon($ma_hd, $ma_mon, $so_luong ) {
        global $db;
        $query = 'INSERT INTO dat_mon (MA_HOA_DON, MA_MON, SO_LUONG)
              VALUES
                 (:ma_hd, :ma_mon, :so_luong)';
        $statement = $db->prepare($query);
        $statement->bindValue(':ma_hd', $ma_hd);
        $statement->bindValue(':ma_mon', $ma_mon);
        $statement->bindValue(':so_luong', $so_luong);
        $statement->execute();
        $statement->closeCursor();
    }
    function update_ban_1($so_ban, $ma_hd) {
        global $db;
        $query = 'UPDATE ban
        SET TRANG_THAI = 1, MA_HOA_DON = :ma_hd
        WHERE SO_BAN = :so_ban';
        $statement = $db->prepare($query);
        $statement->bindValue(':so_ban', $so_ban);
        $statement->bindValue(':ma_hd', $ma_hd);
        $statement->execute();
        $statement->closeCursor();
    }
    
    function get_number($kh) {
        global $db;
        $query = "SELECT SUBSTRING_INDEX(:kh, ' ', -1) as sdt";
        $statement = $db->prepare($query);
        $statement->bindValue(':kh', $kh);
        $statement->execute();
        $courses = $statement->fetch();
        $statement->closeCursor();
        return $courses["sdt"];
    }
    function get_KH_bysdt($kh) {
        global $db;
        $sdt = get_number($kh);
        $query = 'SELECT * FROM khach_hang 
        Where SO_DIEN_THOAI = :sdt
        ORDER BY MA_KHACH_HANG';
        $statement = $db->prepare($query);
        $statement->bindValue(':sdt', $sdt);
        $statement->execute();
        $courses = $statement->fetch();
        $statement->closeCursor();
        return $courses;
    }
    function get_KH_bymb($so_ban) {
        global $db;
        $query = 'SELECT TEN_KHACH_HANG, SO_DIEN_THOAI, TONG_TIEN FROM khach_hang, hoa_don, ban
        Where ban.SO_BAN = :so_ban
        and ban.MA_HOA_DON = hoa_don.MA_HOA_DON
        and hoa_don.MA_KHACH_HANG = khach_hang.MA_KHACH_HANG';
        $statement = $db->prepare($query);
        $statement->bindValue(':so_ban', $so_ban);
        $statement->execute();
        $courses = $statement->fetch();
        $statement->closeCursor();
        return $courses;
    }
    function get_Rank($tong_tien){
        if($tong_tien < 1000000)    return 'Vô hạng';
        if(1000000<=$tong_tien && $tong_tien<5000000) return 'Đồng';
        if(5000000<=$tong_tien && $tong_tien<10000000)   return 'Bạc';
        if($tong_tien >= 10000000)   return 'Vàng';
    }
    function get_HD_ban($ma_ban) {
        global $db;
        $query = 'SELECT mon_an.TEN_MON, dat_mon.SO_LUONG, mon_an.GIA, ban.MA_HOA_DON, hoa_don.DON_GIA
        FROM dat_mon, mon_an, ban, hoa_don
        WHERE dat_mon.MA_MON = mon_an.MA_MON 
        and ban.MA_HOA_DON = dat_mon.MA_HOA_DON 
        and ban.SO_BAN = :ma_ban
        and ban.TRANG_THAI = 1
        and hoa_don.MA_HOA_DON = ban.MA_HOA_DON';
        $statement = $db->prepare($query);
        $statement->bindValue(':ma_ban', $ma_ban);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }
    function xoa_hd($ma_hd){
        global $db;
        $query = 'DELETE FROM dat_mon WHERE MA_HOA_DON= :ma_hd;';
        $statement = $db->prepare($query);
        $statement->bindValue(':ma_hd', $ma_hd);
        $statement->execute();
        $statement->closeCursor();
        $query = 'UPDATE ban
        SET MA_HOA_DON = 0, TRANG_THAI = 0
        WHERE MA_HOA_DON = :ma_hd';
        $statement2 = $db->prepare($query);
        $statement2->bindValue(':ma_hd', $ma_hd);
        $statement2->execute();
        $statement2->closeCursor();
        $query = 'DELETE FROM hoa_don WHERE MA_HOA_DON= :ma_hd;';
        $statement3 = $db->prepare($query);
        $statement3->bindValue(':ma_hd', $ma_hd);
        $statement3->execute();
        $statement3->closeCursor();
    }
    function save_hd($ma_hd, $tong_tien, $ma_KH){
        global $db;
        $query = 'UPDATE ban
        SET MA_HOA_DON = 0, TRANG_THAI = 0
        WHERE MA_HOA_DON = :ma_hd';
        $statement2 = $db->prepare($query);
        $statement2->bindValue(':ma_hd', $ma_hd);
        $statement2->execute();
        $statement2->closeCursor();
        $query2 = 'UPDATE khach_hang
        SET TONG_TIEN = TONG_TIEN + :tong_tien
        WHERE MA_KHACH_HANG = :ma_KH';
        $statement3 = $db->prepare($query2);
        $statement3->bindValue(':tong_tien', $tong_tien);
        $statement3->bindValue(':ma_KH', $ma_KH);
        $statement3->execute();
        $statement3->closeCursor();
    }

    function get_ban($ma_ban){
        global $db;
        $query = 'SELECT *
        FROM ban
        WHERE SO_BAN = :ma_ban';
        $statement = $db->prepare($query);
        $statement->bindValue(':ma_ban', $ma_ban);
        $statement->execute();
        $courses = $statement->fetch();
        $statement->closeCursor();
        return $courses;
    }

    $KHs = get_KH();
    $choose_ban = "";
    $trang_thai_ban = "";
    if(isset($_POST['choose_ban'])){
        $choose_ban = $_POST['choose_ban'];
    }
    
    $HD_bans = get_HD_ban($choose_ban); 
    foreach ($HD_bans as $HD_ban) :
        $ma_HD = $HD_ban["MA_HOA_DON"];
        $don_gia = $HD_ban["DON_GIA"];
    endforeach;
    $kh_ban = get_KH_bymb($choose_ban);
    if($kh_ban) $rank = get_Rank($kh_ban["TONG_TIEN"]);
    $giam = 0;
    if(!strcmp($rank, "Đồng")) $giam = 0.05;
    if(!strcmp($rank, "Bạc")) $giam = 0.1;
    if(!strcmp($rank, "Vàng")) $giam = 0.15;
    if(isset($_POST['add_hoa_don'])){
        $So_ban = $_POST["add_hoa_don"];
        $Kh = $_POST["khach_Hang"];
        $mkh = get_KH_bysdt($Kh);
        
        if(empty($_POST["khach_Hang"])) $giam1 = 0;
        else{ 
            $rank1 = get_Rank($mkh["TONG_TIEN"]);
        if(!strcmp($rank1, "Đồng")) $giam1 = 0.05;
        if(!strcmp($rank1, "Bạc")) $giam1 = 0.1;
        if(!strcmp($rank1, "Vàng")) $giam1 = 0.15;
        }
        $tong_tien =0;
        if(isset($_POST['so_luongs'][0])){
        for ($x = 0; $x <= sizeof($_POST["so_luongs"]); $x++) {
            $tong_tien+= $_POST["so_luongs"][$x]*$_POST["gia_mons"][$x];

        }
        $tong_tien = $tong_tien*(1-$giam1);
        $ma_hoa_don=add_hoadon($mkh["MA_KHACH_HANG"],$tong_tien, $So_ban);
        for ($i = 0; $i < sizeof($_POST["so_luongs"]); $i++) {
            add_datmon($ma_hoa_don,$_POST["ten_mons"][$i] ,$_POST["so_luongs"][$i]);

        }
        update_ban_1($So_ban, $ma_hoa_don);
    }
        header("Location: .?choose_ban=$So_ban");
        header("Location: ./home.php");
    }
    if(isset($_POST['remove_hoa_don'])){
        $ma_hd_del = $_POST["remove_hoa_don"];
        xoa_hd($ma_hd_del);
    }
    if(isset($_POST['pay_hoa_don'])){
        $ma_hd_save = $_POST["pay_hoa_don"];
        $tong = $_POST["tong_tien"];
        $Kh = $_POST["khach_Hang"];
        $mkh = get_KH_bysdt($Kh);
        save_hd($ma_hd_save, $tong, $mkh['MA_KHACH_HANG']);
    }

    $ban = get_ban($choose_ban);
    $trang_thai_ban = $ban["TRANG_THAI"];
?>