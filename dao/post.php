<?php
require_once 'pdo.php';
function post_insert( $ten,$tomtat,$noidung,$iddm,$hinh ){
    $sql = "INSERT INTO post(tenbv,tomtat,noidung,iddm,hinh) VALUES('$ten','$tomtat','$noidung','$iddm','$hinh')";
    pdo_execute($sql);
}
function post_selectall(){
    $sql = "SELECT * FROM post";
    return pdo_query($sql);
}
function post_select_by_id($id){
    $sql = "SELECT * FROM post WHERE id=".$id;
    return pdo_query($sql);
}
?>
