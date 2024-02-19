<?php 
include "../AirBlade/dao/pdo.php";
include "../AirBlade/dao/khieunai.php";
echo $_POST['noidung'];
$NoiDung = $_POST['noidung'];
echo "<br>";
echo $_POST['ProductID'];
$ProductID = $_POST['ProductID'];
echo "<br>";
echo $_POST['UserID'];
$UserID = $_POST['noidung'];
echo "<br>";
echo $_POST['image'];
$Image = $_POST['image'];
khieunai_insert($UserID,$ProductID,$NoiDung,$Image)
?>

