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

    function delete_KH($ma_KH) {
        global $db;
        $query = 'UPDATE khach_hang
        SET DEL=1
        WHERE MA_KHACH_HANG = :ma_KH;';
        $statement = $db->prepare($query);
        $statement->bindValue(':ma_KH', $ma_KH);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_KH($ten_KH, $SDT ) {
        global $db;
        $query = 'INSERT INTO khach_hang (TEN_KHACH_HANG, SO_DIEN_THOAI, TONG_TIEN, DEL)
              VALUES
                 (:ten_KH, :SDT, 0, 0)';
        $statement = $db->prepare($query);
        $statement->bindValue(':ten_KH', $ten_KH);
        $statement->bindValue(':SDT', $SDT);
        $statement->execute();
        $statement->closeCursor();
    }

    function get_KH_byName($ten_KH, $sdt_KH) {
        global $db;
        $query = 'SELECT * FROM khach_hang WHERE TEN_KHACH_HANG LIKE :name1
        AND SO_DIEN_THOAI LIKE :name2';
        $statement = $db->prepare($query);
        $qpattern = "%" . $ten_KH . "%";
        $qpattern2 = "%" . $sdt_KH . "%";
        $statement->execute(array(":name1" => $qpattern, ":name2" => $qpattern2));
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }
        
    function get_Rank($tong_tien){
        if($tong_tien < 1000000)    return 'Vô hạng';
        if(1000000<=$tong_tien && $tong_tien<5000000) return 'Đồng';
        if(5000000<=$tong_tien && $tong_tien<10000000)   return 'Bạc';
        if($tong_tien >= 10000000)   return 'Vàng';
    }

    $KHs = get_KH();
    $ten_KH_search ="";
    $sdt_KH_search ="";
?>