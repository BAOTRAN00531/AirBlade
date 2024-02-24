<a href="Processor.php?action=listkn">list</a>
<br>
<?php 
include "dao/pdo.php";
include "dao/khieunai.php";
include "dao/baidang.php";
include "dao/danhgia.php";
if ( isset( $_GET['action'] ) )
{
    $act = $_GET['action'];
    switch ( $act )
    {
        case 'themdg':
            $NoiDung = $_POST['noidung'];
            $ProductID = $_POST['ProductID'];
            $UserID = $_POST['UserID'];
            $Sao = $_POST['Sao'];
            danhgia_insert($UserID,$ProductID,$NoiDung,$Sao);
            $list_danhgia = danhgia_selectall();
            include "../AirBlade/view/feedback/danhgia_process.php";
            break;
        case 'thembd':
            $NoiDung = $_POST['noidung'];
            $Tag = $_POST['Tag'];
            $UserID = $_POST['UserID'];
            $Image = $_POST['image'];
            $NgayDang = date('d-m-Y H:i:s');
            baidang_insert( $UserID , $NoiDung ,$Tag , $Image , $NgayDang );
            $list_baidang = baidang_selectall();
            include "../AirBlade/view/post/baidang_process.php";            
            break;
        case 'themkn':
            $NoiDung = $_POST['noidung'];
            $ProductID = $_POST['ProductID'];
            $UserID = $_POST['UserID'];
            $Image = $_POST['image'];
            khieunai_insert( $UserID , $ProductID , $NoiDung , $Image );
            $list_khieunai = khieunai_selectall();
            include "../AirBlade/view/report/khieunai_process.php";
            break;
        case 'listkn':
            $list_khieunai = khieunai_selectall();
            include "../AirBlade/view/report/khieunai_handling.php";
            break;
        case 'xoakn':
            if( isset( $_GET['MAKN'] ) && ( $_GET['MAKN'] > 0 ) )
            {
                khieunai_delete( $_GET['MAKN'] );
            }
            $list_khieunai = khieunai_selectall();
            include "../AirBlade/view/report/khieunai_handling.php";
        break;
        case 'luukn':
            if( isset( $_GET['MAKN'] ) && ( $_GET['MAKN'] > 0 ) )
            {
                $UserID = $_GET['iduser'];
                $MAKN = $_GET['MAKN'];
                $MASP = $_GET['MASP'];
                $NoiDung = $_GET['NoiDung'];
                $HINH = $_GET['HINH'];
                luutru_khieunai( $UserID , $MASP , $NoiDung , $HINH );
            }
            $list_khieunai = khieunai_selectall();
            include "../AirBlade/view/report/khieunai_handling.php";
    }
}

?>