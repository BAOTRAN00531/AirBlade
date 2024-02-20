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
$UserID = $_POST['UserID'];
echo "<br>";
echo $_POST['image'];
$Image = $_POST['image'];
khieunai_insert($UserID,$ProductID,$NoiDung,$Image);
$list_khieunai = khieunai_selectall();

foreach ( $list_khieunai as $khieunai )
{
    extract( $khieunai );
    echo $NoiDung;
    echo "<br>";
    echo $ProductID;
}
?>

