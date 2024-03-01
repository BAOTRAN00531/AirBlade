<?php 
include_once "pdo.php";

function contact_insert( $hoten,$emial,$sodt,$question ){
    $sql = "INSERT INTO contact(hoten,email,sodt,question) VALUES('$hoten','$emial','$sodt','$question')";
    pdo_execute($sql);
}

?>