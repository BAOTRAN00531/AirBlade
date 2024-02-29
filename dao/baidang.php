<?php 
include_once "pdo.php";

function post_insert( $UserID , $NoiDung , $Tag , $Image , $NgayDang ){
    $sql = "INSERT INTO post(iduser,NoiDung,Tag,HINH,NgayDang) VALUES('$UserID','$NoiDung','$Tag','$Image','$NgayDang')";
    pdo_execute($sql);
}
function post_selectall()
{
    $sql = "SELECT * FROM post";
    return pdo_query($sql);
}
function post_delete( $MABD )
{
    $sql = "DELETE FROM post WHERE MABD = $MABD";
    pdo_execute($sql);
}

?>