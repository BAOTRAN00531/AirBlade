<?php 
include_once "pdo.php";

    function hoadon_insert( $MASP , $iduser , $HOTEN , $DIACHI , $PHONE , $EMAIL , $TONG , $PTTT , $NGAYDATHANG )
    {
    $sql = "INSERT INTO donhang( MASP , iduser , HOTEN , DIACHI , PHONE , EMAIL , TONG , PTTT , NGAYDATHANG ) 
    VALUES( '$MASP' , '$iduser' , '$HOTEN' , '$DIACHI' , '$PHONE' , '$EMAIL' , '$TONG' , '$PTTT' , '$NGAYDATHANG' )";
    pdo_execute($sql);
    }
    function hoadon_selectall()
    {
        $sql = "SELECT * FROM donhang";
        return pdo_query($sql);
    }
?>