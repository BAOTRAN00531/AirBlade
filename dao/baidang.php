<?php 
include_once "pdo.php";

function baidang_insert( $UserID , $NoiDung , $Image ){
    $sql = "INSERT INTO khieunai(iduser,NoiDung,HINH) VALUES('$UserID','$NoiDung','$Image')";
    pdo_execute($sql);
}
function baidang_selectall()
{
    $sql = "SELECT * FROM khieunai";
    return pdo_query($sql);
}
function baidang_delete( $MAKN )
{
    $sql = "DELETE FROM khieunai WHERE MAKN = $MAKN";
    pdo_execute($sql);
}

?>