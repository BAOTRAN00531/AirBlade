<?php 
include_once "pdo.php";

function report_insert( $UserID , $NoiDung , $Image ){
    $sql = "INSERT INTO khieunai(iduser,NoiDung,HINH) VALUES('$UserID','$NoiDung','$Image')";
    pdo_execute($sql);
}
function report_selectall()
{
    $sql = "SELECT * FROM khieunai";
    return pdo_query($sql);
}
function report_delete( $MAKN )
{
    $sql = "DELETE FROM khieunai WHERE MAKN = $MAKN";
    pdo_execute($sql);
}
function luutru_khieunai( $UserID , $ProductID , $NoiDung , $Image ){
    $sql = "INSERT INTO luutru_khieunai(iduser,MASP,NoiDung,HINH) VALUES('$UserID','$ProductID','$NoiDung','$Image')";
    pdo_execute($sql);
}
?>