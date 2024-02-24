<?php 
include "../AirBlade/dao/pdo.php";
include "../AirBlade/dao/danhgia.php";
echo $_POST['noidung'];
$NoiDung = $_POST['noidung'];
echo "<br>";
echo $_POST['ProductID'];
$ProductID = $_POST['ProductID'];
echo "<br>";
echo $_POST['UserID'];
$UserID = $_POST['noidung'];
echo "<br>";
echo $_POST['Sao'];
$Sao = $_POST['Sao'];
danhgia_insert($UserID,$ProductID,$NoiDung,$Sao)
?>

