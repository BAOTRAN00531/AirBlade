<?php 
include_once "pdo.php";

function danhgia_insert( $UserID , $ProductID , $NoiDung , $Sao ){
    $sql = "INSERT INTO danhgia(MAND,MASP,NoiDung,Sao) VALUES('$UserID','$ProductID','$NoiDung','$Sao')";
    pdo_execute($sql);
}
function danhgia_selectall()
{
    $sql = "SELECT * FROM danhgia";
    return pdo_query($sql);
}
?>