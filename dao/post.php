<?php
require_once 'pdo.php';
function post_insert( $ten,$tomtat,$noidung,$iddm,$hinh ){
    $sql = "INSERT INTO post(tenbv,tomtat,noidung,iddm,hinh) VALUES('$ten','$tomtat','$noidung','$iddm','$hinh')";
    pdo_execute($sql);
}
?>