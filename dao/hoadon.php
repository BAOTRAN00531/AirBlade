<?php 
include_once "pdo.php";

    function bill_insert( $MASP , $iduser , $HOTEN , $DIACHI , $PHONE , $TONG , $PTTT , $NGAYDATHANG )
    {
    $sql = "INSERT INTO donhang( MASP , iduser , HOTEN , DIACHI , PHONE , TONG , PTTT , NGAYDATHANG ) 
    VALUES( '$MASP' , '$iduser' , '$HOTEN' , '$DIACHI' , '$PHONE' , '$TONG' , '$PTTT' , '$NGAYDATHANG' )";
    pdo_execute($sql);
    }
    function bill_selectall()
    {
        $sql = "SELECT * FROM donhang";
        return pdo_query($sql);
    }
    function bill_delete($IDDH)
    {
        $sql = "DELETE FROM donhang WHERE IDDH = $IDDH";
        pdo_execute($sql);
    }
    function bill_update($IDDH , $HOTEN, $DIACHI, $PHONE , $EMAIL , $TONG , $PTTT , $NGAYDATHANG){
        $sql = "UPDATE donhang SET HOTEN='".$HOTEN."', DIACHI='".$DIACHI."' , PHONE='".$PHONE."' 
        , EMAIL='".$EMAIL."' , TONG='".$TONG."' , PTTT='".$PTTT."' , NGAYDATHANG='".$NGAYDATHANG."' WHERE IDDH=".$IDDH;
        pdo_execute($sql);
    }

    function bill_select_by_id($IDDH){
        $sql = "SELECT * FROM donhang WHERE IDDH=".$IDDH;
        return pdo_query($sql);

    }
    function bill_count_by_id($IDDH){
        $sql = "SELECT COUNT(*) FROM donhang WHERE IDDH=".$IDDH;
        return pdo_query($sql);

    }
?>