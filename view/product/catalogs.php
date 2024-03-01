<link rel="stylesheet" href="../CSS/catalogs.css">
<section id="main">
    <div class="container">
        <h2>
            <?php echo $loaisp1 ?>
        </h2>
        <table class="noidung">
            <tr>
                <?php
                foreach ($list1 as $first) {
                    extract($first);
                    $hinh = $first['hinhanh'];
                    $MASP = $first['MASP'];
                    $TENSP = $first['TENSP'];
                    $GIASP = $first['GIASP'];
                    echo "
            <th rowspan='2'> 
            <a href='index.php?action=showdetail&idsp=$MASP'><img class='img_logo_sp' src='../uploads/$hinh' alt='Sản phẩm 1'></a>
            <h4 class='tensp'>$TENSP</h4>
            <p class='price'>$GIASP VNĐ</p>
            <button class='buy-button'>Mua ngay</button>
         </th>";
                }
                ?>
            </tr>
        </table>

        <h2>
            <?php echo $loaisp2 ?>
        </h2>
        <table class="noidung">
            <tr>
                <?php
                foreach ($list2 as $second) {
                    extract($second);
                    $hinh = $second['hinhanh'];
                    $MASP = $second['MASP'];
                    $TENSP = $second['TENSP'];
                    $GIASP = $second['GIASP'];
                    echo "
                    <th rowspan='2'> 
                    <a href='index.php?action=showdetail&idsp=$MASP'><img class='img_logo_sp' src='../uploads/$hinh' alt='Sản phẩm 1'></a>
                    <h4 class='tensp'>$TENSP</h4>
                    <p class='price'>$GIASP VNĐ</p>
                    <button class='buy-button'>Mua ngay</button>
                </div>
         </th>";
                }
                ?>
            </tr>
        </table>
    </div>
</section>