<?php 
include_once "pdo.php";

function danhgia_insert( $UserID , $ProductID , $NoiDung , $Sao ){
    $sql = "INSERT INTO danhgia(UserID,ProductID,NoiDung,Sao) VALUES('$UserID','$ProductID','$NoiDung','$Sao')";
    pdo_execute($sql);
}
?>