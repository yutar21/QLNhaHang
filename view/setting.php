<?php include_once("layout.php") ?>

<?php 
    require('../model/db.php');
    require('../controller/settingController.php');  
?>

<head>
    <link rel="stylesheet" href="../css/setting.css">
    <script src="../js/setting.js"></script>
</head>
<body>
    <div class="container">
        <div class="slibar">
            <h1>Thiết lập</h1>
            <button class="slibar_button" onclick="show_Edit_MonAn()">
                <span>Cập nhập món ăn</span>
                <ion-icon name="arrow-dropright"></ion-icon>
            </button>
            <button class="slibar_button" onclick="showUpdate_member()">
                <span>Sửa thông tin</span>
                <ion-icon name="arrow-dropright"></ion-icon>
            </button>
            
            <button class="slibar_button" onclick='location.href="../view/Security/register.php"'>
                <span>Đăng ký</span>
                <ion-icon name="arrow-dropright"></ion-icon>
            </button>
            <form action="" method="post">
                <div class="update_so_ban">
                    <input type="number" name="update_ban" min="0" placeholder="Nhập Số Lượng Bàn" class="update_soban_input"/>
                    <button name="save_information_ban" class="update_soban_button">Save</button>
                </div>
            </form>
            <img src="../images/setting.png" alt="anh_loi" style="width: 60%; height: 200px"/>
        </div>

        <div class="table">
            <table id="table_edit_monan">
                <thead>
                    <tr>
                        <th>Tên Menu</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Món phụ</td>
                        <td><button onclick="showTable1()">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Món chính</td>
                        <td><button onclick="showTable2()">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Đồ uống</td>
                        <td><button onclick="showTable3()">Edit</button></td>
                    </tr>
                    <tr>
                        <td>Hoa Quả</td>
                        <td><button onclick="showTable4()">Edit</button></td>
                    </tr>
                </tbody>
            </table>

            <form action="" method="post">
            <table id="mon_phu">
                <thead>
                    <tr>
                        <th class="contener_th">Tên Món</th>
                        <th class="contener_th">Giá Món</th>
                        <th class="contener_short">Xóa</th>
                        <th class="contener_short">Save</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input placeholder="Thêm Tên Món" name="Ten_mon"/></td>
                    <td><input placeholder="Giá Món" name="Gia"/></td>
                    <td></td>
                    <td><button type="submit" name="add_mon" value="1">Save</button></td>
                </tr>
                </form>
                <tr>
                    <?php if(!empty($MN1)) { ?>
                    <?php foreach ($MN1 as $mn1) : ?>
                    <?php if($mn1['DEL'] == 0) { ?>
                        <form action="" method="post">
                        <div class="list__item">
                            <td class="contener_th" name = "ma_mon" value="<?php echo $mn1['MA_MON'] ?>"><?php echo $mn1['TEN_MON'] ?></td>
                            <td class="contener_th"><input name = "gia_mon" value="<?php echo $mn1['GIA'] ?>" type="number" step = "1000" min="0"/></td>
                        </div>
                        <div class="list__removeItem">  
                            <td class="contener_short"><button type = "submit"name="ma_mon_del" value="<?= $mn1['MA_MON'] ?>">❌</button></td>
                            <td class="contener_short"><button type = "submit"name="ma_mon_up" value="<?= $mn1['MA_MON'] ?>">Save</button></td>
                        </div>
                        </tr>
                        </form>
                    <?php } endforeach; ?>           
                    <?php }  ?>
                </tbody>
            </table>
        

            <form action="" method="post">
            <table id="mon_chinh">
                <thead>
                    <tr>
                        <th class="contener_th">Tên Món</th>
                        <th class="contener_th">Giá Món</th>
                        <th class="contener_short">Xóa</th>
                        <th class="contener_short">Save</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input placeholder="Tên Món" name="Ten_mon"/></td>
                    <td><input placeholder="Giá" name="Gia"/></td>
                    <td></td>
                    <td><button type="submit" name="add_mon" value="2">Save</button></td>
                </tr>
                </form>
                <tr>
                    <?php if(!empty($MN2)) { ?>
                    <?php foreach ($MN2 as $mn2) : ?>
                    <?php if($mn2['DEL'] == 0) { ?>
                        <form action="" method="post">
                        <div class="list__item">
                            <td class="contener_th" name = "ma_mon" value="<?php echo $mn2['MA_MON'] ?>"><?php echo $mn2['TEN_MON'] ?></td>
                            <td class="contener_th"><input name = "gia_mon" value="<?php echo $mn2['GIA'] ?>" type="number" step = "1000" min="0"/></td>
                        </div>
                        <div class="list__removeItem">  
                            <td class="contener_short"><button type = "submit"name="ma_mon_del" value="<?= $mn2['MA_MON'] ?>">❌</button></td>
                            <td class="contener_short"><button type = "submit"name="ma_mon_up" value="<?= $mn2['MA_MON'] ?>">Save</button></td>
                        </div>
                        </tr>
                        </form>
                    <?php } endforeach; ?>           
                    <?php }  ?>
                </tbody>
            </table>

            <form action="" method="post">
            <table id="do_uong">
                <thead>
                    <tr>
                        <th class="contener_th">Tên Món</th>
                        <th class="contener_th">Giá Món</th>
                        <th class="contener_short">Xóa</th>
                        <th class="contener_short">Save</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input placeholder="Tên Món" name="Ten_mon"/></td>
                    <td><input placeholder="Giá" name="Gia"/></td>
                    <td></td>
                    <td><button type="submit" name="add_mon" value="3">Save</button></td>
                </tr>
                </form>
                <tr>
                    <?php if(!empty($MN3)) { ?>
                    <?php foreach ($MN3 as $mn3) : ?>
                    <?php if($mn3['DEL'] == 0) { ?>
                        <form action="" method="post">
                        <div class="list__item">
                            <td class="contener_th" name = "ma_mon" value="<?php echo $mn3['MA_MON'] ?>"><?php echo $mn3['TEN_MON'] ?></td>
                            <td class="contener_th"><input name = "gia_mon" value="<?php echo $mn3['GIA'] ?>" type="number" step = "1000" min="0"/></td>
                        </div>
                        <div class="list__removeItem">  
                            <td class="contener_short"><button type = "submit"name="ma_mon_del" value="<?= $mn3['MA_MON'] ?>">❌</button></td>
                            <td class="contener_short"><button type = "submit"name="ma_mon_up" value="<?= $mn3['MA_MON'] ?>">Save</button></td>
                        </div>
                        </tr>
                        </form>
                    <?php } endforeach; ?>           
                    <?php } ?>
                </tbody>
            </table>

            <form action="" method="post">
            <table id="hoa_qua">
                <thead>
                    <tr>
                        <th class="contener_th">Tên Món</th>
                        <th class="contener_th">Giá Món</th>
                        <th class="contener_short">Xóa</th>
                        <th class="contener_short">Save</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input placeholder="Tên Món" name="Ten_mon"/></td>
                    <td><input placeholder="Giá" name="Gia"/></td>
                    <td></td>
                    <td><button type="submit" name="add_mon" value="4">Save</button></td>
                </tr>
                </form>
                <tr>
                    <?php if(!empty($MN4)) { ?>
                    <?php foreach ($MN4 as $mn4) : ?>
                    <?php if($mn4['DEL'] == 0) { ?>
                        <form action="" method="post">
                        <div class="list__item">
                            <td class="contener_th" name = "ma_mon" value="<?php echo $mn4['MA_MON'] ?>"><?php echo $mn4['TEN_MON'] ?></td>
                            <td class="contener_th"><input name = "gia_mon" value="<?php echo $mn4['GIA'] ?>" type="number" step = "1000" min="0"/></td>
                        </div>
                        <div class="list__removeItem">  
                            <td class="contener_short"><button type = "submit"name="ma_mon_del" value="<?= $mn4['MA_MON'] ?>">❌</button></td>
                            <td class="contener_short"><button type = "submit"name="ma_mon_up" value="<?= $mn4['MA_MON'] ?>">Save</button></td>
                        </div>
                        </tr>
                        </form>
                    <?php } endforeach; ?>           
                    <?php }  ?>
                </tbody>
            </table>

            <div id="get_member" class="list_item_admin">
                <h2 class="h2">Thay Đổi Thông Tin Cá Nhân</h2>
                <?php foreach ($member as $mb) :  ?>
                    <form action="" method="post">
                        <div class="list_member_item">
                            <div class="list_item_information">
                                <label for="fullname" class="label1">Họ Và Tên :</label>
                                <input class="contener_th" name = "fullname" value="<?php echo $mb['fullname'] ?>" /></br>
                            </div>
                            <div class="list_item_information">
                                <label for="email" class="label2">Email :</label>
                                <input class="contener_th" name = "email" value="<?php echo $mb['email'] ?>" /></br>
                            </div>
                            <div class="list_item_information">
                                <label for="birthday" class="label3">Birthday :</label>
                                <input class="contener_th" name = "birthday" type="date" value="<?php echo $mb['birthday'] ?>" /></br>
                            </div>
                            <div class="list_item_information">
                                <label for="sex" class="label4">Sex  :</label>
                                <input class="contener_th" name = "sex" value="<?php echo $mb['sex'] ?>" /></br>
                            </div>
                            <button name="Save_Mb" type="Submit" class="button_save_information"> Save</button>
                        </div>
                <?php endforeach ?>
            </div>      
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>