<link rel="stylesheet" href="../CSS/style.css">
<section id="main">
    <div class="container" id="'.$LOAISP.'">
        <?php

        foreach ($dmf as $dm) {
            $THUTU = $dm['THUTU']; // Trích xuất giá trị của $THUTU từ mỗi phần tử trong mảng
            $LOAISP = $dm['LOAISP'];

            echo '<h2>' . $LOAISP . '</h2>';
        }
        // <table class="noidung">
        //     <tr>
        // <?php  
        
        foreach ($dmf as $dm) {
            $THUTU = $dm['THUTU']; // Trích xuất giá trị của $THUTU từ mỗi phần tử trong mảng
            $LOAISP = $dm['LOAISP'];

            echo '<h2>' . $LOAISP . '</h2>';
        }
        ?>
            <?php
            $imgPath="uploads/";
                foreach ($dssp as $sp) {
                    extract($sp);
                    $hinh = $imgPath . $hinhanh;
                    echo'   <th> 
                    <a href="index.php?action=showdetail&idsp='.$MASP.'">
                                <img  src="'.$hinh.'" alt="'.$TENSP.'" height="100px" width="100px">
                                <h4>'.$TENSP.'</h4>
                                <p>'. $GIASP . " ₫ ".'</p>
                                <button>Mua ngay</button>
                        </a>
                    </th>
                    ';
        }
        ?>
        </tr>
        </table>
    </div>
    </div>
</section>