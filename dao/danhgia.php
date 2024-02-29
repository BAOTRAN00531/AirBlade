<?php 
include_once "pdo.php";

function danhgia_insert( $UserID , $ProductID , $NoiDung , $Sao ){
    $sql = "INSERT INTO danhgia(iduser,MASP,NoiDung,Sao) VALUES('$UserID','$ProductID','$NoiDung','$Sao')";
    pdo_execute($sql);
}
function danhgia_selectall()
{
    $sql = "SELECT * FROM danhgia";
    return pdo_query($sql);
}
function danhgia_delete($IDDG)
{
    $sql = "DELETE FROM danhgia WHERE IDDG = $IDDG";
    pdo_execute($sql);
}
function danhgia_select_by_id($IDDG){
    $sql = "SELECT * FROM danhgia WHERE IDDG=".$IDDG;
    return pdo_query($sql);

}
function danhgia_update($IDDG,$NoiDung,$Sao){
    $sql="UPDATE danhgia SET NoiDung='$NoiDung',Sao='$Sao' WHERE IDDG='$IDDG' ";
pdo_execute($sql);
}
function danhgia_select_by_sp($MASP){
    $sql = "SELECT * FROM danhgia WHERE MASP=".$MASP;
    return pdo_query($sql);

}
?>