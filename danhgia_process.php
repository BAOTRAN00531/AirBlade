<?php 
foreach ( $list_danhgia as $danhgia )
{
extract( $danhgia );
echo $_POST['noidung'];
echo "<br>";
echo $_POST['ProductID'];
echo "<br>";
echo $_POST['UserID'];
echo "<br>";
echo $_POST['Sao'];
echo "<br>";
}
?>

