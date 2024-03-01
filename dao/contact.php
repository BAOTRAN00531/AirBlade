<?php 
include_once "pdo.php";

function contact_insert( $hoten,$emial,$sodt,$question ){
    $sql = "INSERT INTO contact(hoten,email,sodt,question) VALUES('$hoten','$emial','$sodt','$question')";
    pdo_execute($sql);
}
function contact_select_all()
{
    $sql= "SELECT * FROM contact";
    return pdo_query($sql);
}
?>