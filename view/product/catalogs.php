
<section id="main">
    <div class="container">
        <h2>YAMAHA</h2>
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

        <h2>HONDA</h2>
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