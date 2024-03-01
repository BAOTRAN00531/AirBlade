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
function post_delete($id){
    $sql = "DELETE FROM post WHERE id=$id";
    pdo_execute($sql);
}
function post_update($id,$tenbv,$tomtat,$noidung,$iddm,$hinh)
{
    $sql ="UPDATE post SET tenbv='".$tenbv."' , tomtat='".$tomtat."' , noidung='".$noidung."' , iddm='".$iddm."' , hinh='".$hinh."' WHERE id='".$id."'";
    pdo_execute($sql);
}
?>
