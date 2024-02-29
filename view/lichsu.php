<?php 
include "../AirBlade/dao/pdo.php";
include "../AirBlade/dao/hoadon.php";
$list_hoadon = bill_selectall();

foreach ( $list_hoadon as $lichsu )
{
    extract( $lichsu );
    echo $MASP;
    echo "<br>";
    echo $iduser;
    echo "<br>";
    echo $IDDH;
    echo "<br>";
    echo $HOTEN;
    echo "<br>";
    echo $DIACHI;
    echo "<br>";
    echo $PHONE;
    echo "<br>";
    echo $EMAIL;
    echo "<br>";
    echo $TONG;
    echo "<br>";
    echo $PTTT;
    echo "<br>";
    echo $NGAYDATHANG;
}
?>