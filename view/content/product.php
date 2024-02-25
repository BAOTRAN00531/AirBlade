<section id="main">
    <div class="container">
        <?php  
              echo '<h2>'.$LOAISP.'</h2>';
        ?>
        <div class="row">
            <?php
            $imgPath="uploads/";
                foreach ($dssp as $sp) {
                    extract($sp);
                    $hinh = $imgPath . $hinhanh;
                    echo'  
                    <div class="product">
                    <a href="index.php?action=sanphamct&idsp='.$MASP.'">
                                <img src="'.$hinh.'" alt="'.$TENSP.'">
                                <h4>'.$TENSP.'</h4>
                                <p>'. $GIASP . " ₫ ".'</p>
                                <button>Mua ngay</button>;
                                </a>
                        </div>
                    ';
                }
            ?>
            </div>
    </div>
</section>