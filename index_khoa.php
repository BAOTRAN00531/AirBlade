<a href="index.php?action=listkn">list</a>
<br>
<?php 
include "dao/pdo.php";
include "dao/khieunai.php";
if ( isset( $_GET['action'] ) )
{
    $act = $_GET['action'];
    switch ( $act )
    {
        case 'listkn':
            $list_khieunai = khieunai_selectall();
            include "khieunai_handling.php";
            break;
        case 'xoakn':
            if( isset( $_GET['MAKN'] ) && ( $_GET['MAKN'] > 0 ) )
            {
                khieunai_delete( $_GET['MAKN'] );
            }
            $list_khieunai = khieunai_selectall();
            include "khieunai_handling.php";
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
            include "khieunai_handling.php";
    }
}

?>