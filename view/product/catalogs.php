<?php 
                        foreach ( $dmf1 as $one )
                        {
                            extract($one);
                        }
                        foreach ( $dmf2 as $two )
                        {
                            extract($two);
                        }
            ?>
<section id="main">
    <div class="container">
        <h2><?php echo $one['LOAISP']; ?></h2>
        <div class="row">
        <?php 
        foreach( $list1 as $first )
        {
            extract($first);
            $hinh = $first['hinhanh'];
            $MASP = $first['MASP'];
            $TENSP = $first['TENSP'];
            $GIASP = $first['GIASP'];
            echo "
            <div class='product'>
            <a href='index.php?action=showdetail&idsp=$MASP'><img height='100px' width='100px' src='../uploads/$hinh' alt='Sản phẩm 1'></a>
             <h4>$TENSP</h4>
             <p>Giá: $GIASP VND</p>
             <button>Mua ngay</button>
         </div>";
        }
        ?>
        </div>

        <h2><?php echo $two['LOAISP']; ?></h2>
        <div class="row"> 
        <?php 
        foreach( $list2 as $second )
        {
            extract($second);
            $hinh = $second['hinhanh'];
            $MASP = $second['MASP'];
            $TENSP = $second['TENSP'];
            $GIASP = $second['GIASP'];
            echo "
            <div class='product'>
            <a href='index.php?action=showdetail&idsp=$MASP'><img height='100px' width='100px' src='../uploads/$hinh' alt='Sản phẩm 1'></a>
             <h4>$TENSP</h4>
             <p>Giá: $GIASP VND</p>
             <button>Mua ngay</button>
         </div>";
        }        
        ?>  
        </div>
    </div>
</section>