<link rel="stylesheet" href="../CSS/style.css">
<section id="main">
    <div class="container" id="'.$LOAISP.'">
        <?php

        foreach ($dmf as $dm) {
            $THUTU = $dm['THUTU']; // Trích xuất giá trị của $THUTU từ mỗi phần tử trong mảng
            $LOAISP = $dm['LOAISP'];

            echo '<h2>' . $LOAISP . '</h2>';
        }
        ?>
        <div class="row">
            <?php
            $imgPath = "uploads/";
            foreach ($dssp as $sp) {
                extract($sp);
                $hinh = $imgPath . $hinhanh;
                echo '  
                    <div class="product">
                    <a href="index.php?action=showdetail&idsp=' . $MASP . '">
                                <img src="' . $hinh . '" alt="' . $TENSP . '" width="20%" height="20%">
                                <h4>' . $TENSP . '</h4>
                                <p>' . $GIASP . " ₫ " . '</p>
                                <button>Mua ngay</button>
                        </a>
                        </div>
                    ';
            }
            ?>
        </div>
    </div>
</section>