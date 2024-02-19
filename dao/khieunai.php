<?php 
include_once "pdo.php";

function khieunai_insert( $UserID , $ProductID , $NoiDung , $Image ){
    $sql = "INSERT INTO khieunai(MAND,MASP,NoiDung,HINH) VALUES('$UserID','$ProductID','$NoiDung','$Image')";
    pdo_execute($sql);
}
?>