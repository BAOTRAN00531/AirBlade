<?php 
include_once "pdo.php";

function khieunai_insert( $UserID , $NoiDung , $Image ){
    $sql = "INSERT INTO khieunai(iduser,NoiDung,HINH) VALUES('$UserID','$NoiDung','$Image')";
    pdo_execute($sql);
}
function khieunai_selectall()
{
    $sql = "SELECT * FROM khieunai";
    return pdo_query($sql);
}
function khieunai_delete( $MAKN )
{
    $sql = "DELETE FROM khieunai WHERE MAKN = $MAKN";
    pdo_execute($sql);
}
function luutru_khieunai( $UserID , $ProductID , $NoiDung , $Image ){
    $sql = "INSERT INTO luutru_khieunai(iduser,MASP,NoiDung,HINH) VALUES('$UserID','$ProductID','$NoiDung','$Image')";
    pdo_execute($sql);
}
?>