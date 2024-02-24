<?php 
include_once "pdo.php";

function baidang_insert( $UserID , $NoiDung , $Tag , $Image , $NgayDang ){
    $sql = "INSERT INTO baidang(iduser,NoiDung,Tag,HINH,NgayDang) VALUES('$UserID','$NoiDung','$Tag','$Image','$NgayDang')";
    pdo_execute($sql);
}
function baidang_selectall()
{
    $sql = "SELECT * FROM baidang";
    return pdo_query($sql);
}
function baidang_delete( $MABD )
{
    $sql = "DELETE FROM baidang WHERE MABD = $MABD";
    pdo_execute($sql);
}

?>