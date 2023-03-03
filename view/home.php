<?php include_once("../model/db.php") ?>
<?php include_once("layout.php") ?>
<?php require('../controller/homeController.php'); ?>
<html>

<head>
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/home.js"></script>
</head>

<body>

    <div class="container-home">
        <div id="container_1">
            <div>
                <div style = "width:100%">
                    <button onclick="show_DsBan()" class="btn_menu" >Danh Sách Bàn</button>
                    <button onclick="show_Menu()" class="btn_menu" >Menu</button>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <!-- Content Danh sách bàn -->
                <div id="nav-home">
                    <div style="height: 580px; overflow:auto;" class="btn_matrix">
                        <form action="" method="post">
                            <?php
                            $sql = "SELECT * FROM ban";
                            $result = $connect->query($sql);
                            while ($row = $result->fetch_assoc()) {
                            ?>
                                <?php
                                    if($row["DEL"]==0){  ?>
                                    <button id="ban<?php echo $row["SO_BAN"] ?>" style="margin:5px; " type="submit" class="btn_ban" value='<?php echo $row["SO_BAN"] ?>' name="choose_ban">
                                    <p style="float: left; margin: 0;font-weight: bold"> <?php echo $row["SO_BAN"] ?> </p>
                                        <?php 
                                            if ($row["TRANG_THAI"] == 0 ) {
                                                echo '<img style="width:30%; float: right " src="../images/tick-xanh.png" alt="Table" >';
                                            } else if ($row["TRANG_THAI"] == 1) {
                                                echo '<img style="width:30%; float: right " src="../images/tick-yellow.png" alt="Table" >';
                                            } ?>
                                        <img style="width:84px " src="../images/tablebusy.png" alt="Table">
                                     <?php } ?>
                                </button>
                            <?php } ?>
                        </form>
                    </div>
                </div>

                <!-- danh sách thực đơn -->
                <div style="overflow:auto; height: 580px; display: none" id="nav-profile">
                    <div>
                        <div>
                            <button onclick="show_Menu1()">Khai vị</button>
                            <button onclick="show_Menu2()">Món chính</button>
                            <button onclick="show_Menu3()">Đồ uống</button>
                            <button onclick="show_Menu4()">Hoa quả</button>
                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabMenuContent">
                        <div id="menu1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width :10%">Mã</th>
                                        <th scope="col" style="width :45%">Tên</th>
                                        <th scope="col" style="width :25%">Giá</th>
                                        <th scope="col" style="width :20%">Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $menu = "SELECT * FROM mon_an WHERE mon_an.MA_MENU = 1 and mon_an.DEL = 0";
                                        $result = $connect->query($menu);
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td style="width :10%"><?php echo $row["MA_MON"]; ?></td>
                                            <td style="width :45%"><?php echo $row["TEN_MON"]; ?></td>
                                            <td style="width :25%"><?php echo $row["GIA"]; ?></td>
                                            <td style="width :20%">
                                            <?php if ($trang_thai_ban == 0){ ?>
                                                <button id="addMeal<?php echo $row["TEN_MON"] ?>" onclick="addMealFunction('<?php echo $row["MA_MON"] ?>', '<?php echo $row["TEN_MON"] ?>', '<?php echo $row["GIA"] ?>')" class="add_mon">Add</button>
                                            <?php } else if ($trang_thai_ban == 1){ ?>
                                                <button id="addMeal<?php echo $row["TEN_MON"] ?>" onclick="addMealFunction('<?php echo $row["MA_MON"] ?>', '<?php echo $row["TEN_MON"] ?>', '<?php echo $row["GIA"] ?>')" class="add_mon" disabled>Add</button>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="menu2" style="display: none">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width :10%">Mã</th>
                                        <th scope="col" style="width :45%">Tên</th>
                                        <th scope="col" style="width :25%">Giá</th>
                                        <th scope="col" style="width :20%">Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $menu = "SELECT * FROM mon_an WHERE mon_an.MA_MENU = 2 and mon_an.DEL = 0";
                                        $result = $connect->query($menu);
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td style="width :10%"><?php echo $row["MA_MON"]; ?></td>
                                            <td style="width :45%"><?php echo $row["TEN_MON"]; ?></td>
                                            <td style="width :25%"><?php echo $row["GIA"]; ?></td>
                                            <td style="width :20%">
                                            <?php if ($trang_thai_ban == 0){ ?>
                                                <button id="addMeal<?php echo $row["TEN_MON"] ?>" onclick="addMealFunction('<?php echo $row["MA_MON"] ?>', '<?php echo $row["TEN_MON"] ?>', '<?php echo $row["GIA"] ?>')" class="add_mon">Add</button>
                                            <?php } else if ($trang_thai_ban == 1){ ?>
                                                <button id="addMeal<?php echo $row["TEN_MON"] ?>" onclick="addMealFunction('<?php echo $row["MA_MON"] ?>', '<?php echo $row["TEN_MON"] ?>', '<?php echo $row["GIA"] ?>')" class="add_mon" disabled>Add</button>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="menu3" style="display: none">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width :10%">Mã</th>
                                        <th scope="col" style="width :45%">Tên</th>
                                        <th scope="col" style="width :25%">Giá</th>
                                        <th scope="col" style="width :20%">Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $menu = "SELECT * FROM mon_an WHERE mon_an.MA_MENU = 3 and mon_an.DEL = 0";
                                        $result = $connect->query($menu);
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td style="width :10%"><?php echo $row["MA_MON"]; ?></td>
                                            <td style="width :45%"><?php echo $row["TEN_MON"]; ?></td>
                                            <td style="width :25%"><?php echo $row["GIA"]; ?></td>
                                            <td style="width :20%">
                                            <?php if ($trang_thai_ban == 0){ ?>
                                                <button id="addMeal<?php echo $row["TEN_MON"] ?>" onclick="addMealFunction('<?php echo $row["MA_MON"] ?>', '<?php echo $row["TEN_MON"] ?>', '<?php echo $row["GIA"] ?>')" class="add_mon">Add</button>
                                            <?php } else if ($trang_thai_ban == 1){ ?>
                                                <button id="addMeal<?php echo $row["TEN_MON"] ?>" onclick="addMealFunction('<?php echo $row["MA_MON"] ?>', '<?php echo $row["TEN_MON"] ?>', '<?php echo $row["GIA"] ?>')" class="add_mon" disabled>Add</button>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="menu4" style="display: none">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width :10%">Mã</th>
                                        <th scope="col" style="width :45%">Tên</th>
                                        <th scope="col" style="width :25%">Giá</th>
                                        <th scope="col" style="width :20%">Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $menu = "SELECT * FROM mon_an WHERE mon_an.MA_MENU = 4 and mon_an.DEL = 0";
                                        $result = $connect->query($menu);
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td style="width :10%"><?php echo $row["MA_MON"]; ?></td>
                                            <td style="width :45%"><?php echo $row["TEN_MON"]; ?></td>
                                            <td style="width :25%"><?php echo $row["GIA"]; ?></td>
                                            <td style="width :20%">
                                            <?php if ($trang_thai_ban == 0){ ?>
                                                <button id="addMeal<?php echo $row["TEN_MON"] ?>" onclick="addMealFunction('<?php echo $row["MA_MON"] ?>', '<?php echo $row["TEN_MON"] ?>', '<?php echo $row["GIA"] ?>')" class="add_mon">Add</button>
                                            <?php } else if ($trang_thai_ban == 1){ ?>
                                                <button id="addMeal<?php echo $row["TEN_MON"] ?>" onclick="addMealFunction('<?php echo $row["MA_MON"] ?>', '<?php echo $row["TEN_MON"] ?>', '<?php echo $row["GIA"] ?>')" class="add_mon" disabled>Add</button>
                                            <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="container_2">
    <div style="padding: 15px; height:575px;overflow:auto" class="tab-content" id="nav-tabContent">

      <div class="tab-pane fade" id="nav-home-bill" > 
        <form id="homeForm" name="homeForm" action="" method="post">
          <div class="row">
            <div class="col">
              <p style="font-weight: bold;margin: 3px" name = "so_ban_chon" value = "">Số bàn : <?php echo $choose_ban; ?> </p>
                <div style ="display: flex">
                <p style="font-weight: bold;margin: 3px">Khách hàng: </p>
                    <input list="Khach_Hang" name = "khach_Hang" value="<?= $kh_ban['TEN_KHACH_HANG']; ?> <?php if($kh_ban['SO_DIEN_THOAI']) echo'-'; ?> <?= $kh_ban['SO_DIEN_THOAI']; ?>">
                <datalist id="Khach_Hang">
                <?php foreach ($KHs as $KH) : ?>
                            <?php if($KH['DEL'] == 0) { ?>
                                <option value="<?= $KH['TEN_KHACH_HANG']; ?> - <?= $KH['SO_DIEN_THOAI']; ?>">
                            <?php } endforeach; ?>
                </datalist> 
                <p style="font-weight: bold;margin: 3px"> Rank: <?php echo $rank; ?> </p>
                </div>
            </div>
            <div class="col">
              <p style="font-weight: bold;margin: 3px" name = "ma_hoa_don" value = "<?php echo $ma_HD; ?>">Mã hóa đơn : <?php echo $ma_HD; ?></p>
            </div>
          </div>
          <table style="margin: 0" class="table">
            <thead>
              <tr>
                <th style="width :30%" scope="col">Tên</th>
                <th style="width :20%" scope="col">Số lượng</th>
                <th style="width :20%" scope="col"> Đơn Giá </th>
                <th style="width :20%" scope="col">Thành tiền</th>
                <th style="width :10%" scope="col"></th>
              </tr>
            </thead>
          </table>    
          <div style="height: 360px; overflow:auto;" >
            <table class="table">
              <tbody  id="bang_hoa_don">
                  <?php foreach ($HD_bans as $HD_ban) : ?>
                    <tr >
                                <td style="width :30%" class="ten__mon"><?php echo $HD_ban["TEN_MON"]; ?></td>
                                <td style="width :20%" class="ten__mon"><?php echo $HD_ban["SO_LUONG"]; ?></td>
                                <td style="width :20%" class="ten__mon"><?php echo $HD_ban["GIA"]; ?></td>
                                <td style="width :20%" class="ten__mon"><?php echo $HD_ban["GIA"]*$HD_ban["SO_LUONG"]; ?></td>
                                <td style="width :10%"></td>
                  </tr>     
                  <?php  endforeach; ?>            
              </tbody>
            </table>
          </div>
          
          <div style="margin-top: 15px">
            <div style="font-weight: bold; padding-left:65%" class="tong_tien">Tổng:
            <?php echo $don_gia/(1-$giam); ?>
            </div>
            <div style="font-weight: bold; padding-left:65%" class="tong_tien2">Thành tiền:
            <?php echo $don_gia; ?>
            </div>
            <input type="hidden" name="tong_tien" value='<?php echo $don_gia; ?>'>
            <?php if ($trang_thai_ban == 0) { ?>
                    <button onclick="saveHFunction()" value='<?php echo $choose_ban; ?>' class="save_del_pay" type="submit" name="add_hoa_don" id="luuhoadon1">Lưu hóa đơn</button>
                    <button class="save_del_pay" type="submit" name="remove_hoa_don" value='<?php echo $ma_HD;?>' id="xoahoadon1" disabled>Xóa hóa đơn </button>
                    <button class="save_del_pay" type="submit" name="pay_hoa_don" value='<?php echo $ma_HD;?>' id="thanhtoan1" disabled>Thanh toán</button>
            <?php   } else if ($trang_thai_ban == 1) { ?>
                    <button onclick="saveHFunction()" class="save_del_pay" type="submit" value='<?php echo $choose_ban; ?>' name="add_hoa_don" id="luuhoadon1" disabled>Lưu hóa đơn</button>
                    <button class="save_del_pay" type="submit" value='<?php echo $ma_HD;?>' name="remove_hoa_don" id="xoahoadon1" >Xóa hóa đơn</button>
                    <button class="save_del_pay" type="submit" value='<?php echo $ma_HD;?>' name="pay_hoa_don" id="thanhtoan1">Thanh toán</button>
            <?php    }    ?>
            
          </div>
        </form>
      </div>
    </div>             
  </div>
</div>

</body>

</html>