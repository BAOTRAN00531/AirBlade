<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../CSS/trangchu.css">
    <link rel="stylesheet" href="../CSS/chitietsp.css">
    <link rel="stylesheet" href="../CSS/danhgia.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> <!-- Thêm icon-->
    <title>Airblade Team</title>
</head>

<body>
    <?php
        include "dao/pdo.php";
        include "dao/sanpham.php";
        include "dao/danhgia.php";
        include "dao/danhmuc.php";
        include "dao/hoadon.php";
        include "dao/khieunai.php";
        //include "dao/post.php";
        $dsdm=catalog_loadall();
        include "view/header.php";
        if (isset($_GET['action'] )&&($_GET['action'])) {
            $action = $_GET['action'];
                switch ($action) {
                    case 'complaint':
                        include "view/report/report_form.php";
                        break;
                    case 'hoadon':
                        $NGAYDATHANG = date('d-m-Y');
                        $MASP = $_POST['idsp'];
                        $iduser = $_POST['iduser'];
                        $HOTEN = $_POST['HOTEN'];
                        $DIACHI = $_POST['DIACHI'];
                        $PHONE = $_POST['SDT'];
                        $TONG = $_POST['TONG'];
                        $PTTT = $_POST['PTTT'];
                        bill_insert( $MASP , $iduser , $HOTEN , $DIACHI , $PHONE , $TONG , $PTTT , $NGAYDATHANG );
                        include "view/order/hoadon.php";
                        break;
                    case 'catalogs':
                        $dmf1 = catalog_filter(1);
                        foreach ( $dmf1 as $one )
                        {
                            extract($one);
                            $iddm1 = $one['IDDM'];
                        }
                        $list1 = product_selectall("", $iddm1);
                        $dmf2 = catalog_filter(2);
                        foreach ( $dmf2 as $two )
                        {
                            extract($two);
                            $iddm2 = $two['IDDM'];
                        }
                        $list2 = product_selectall("", $iddm2);
                        include "view/product/catalogs.php";
                        break;
                    case 'product':
                        if(isset($_POST['search']) && ($_POST['search'] !="")){
                                $search = $_POST["search"];
                            }
                            else{
                                $search = "";
                            }
                            if(isset($_POST['iddm']) && ($_POST['iddm'] > 0)){
                                $IDDM = $_POST['IDDM'];
                            } else {
                                $iddm = 0;
                            }
                            if(isset($_GET['thutu']) && ($_GET['thutu'] > 0)){
                                $thutu = $_GET['thutu'];
                                $iddm = getIDDMByOrder($thutu);
                                if ($iddm) {
                                    $dssp = product_selectall("", $iddm);
                                    $tendm = load_tendm($thutu);
                                    $dmf = catalog_filter($thutu);
                                } else {
                                    // Xử lý trường hợp không tìm thấy danh mục
                                }
                            } else {
                                //include "view/maincontent/chinh.php";
                            }
                            
                            $dssp = product_selectall($search, $iddm);
                            include "view/product/product.php";
                        break;
                    case 'showdetail':
                        if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                            $id=$_GET['idsp'];
                            $onesp=product_select_by_id($id);
                            $list_danhgia = feedback_select_by_sp($id);
                        }
                          include "view/product/showdetail.php";
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
                        $list_khieunai = report_selectall();
                        include "../AirBlade/view/report/report_handling.php";
                        break;
                    case 'xoakn':
                        if( isset( $_GET['MAKN'] ) && ( $_GET['MAKN'] > 0 ) )
                        {
                            report_delete( $_GET['MAKN'] );
                        }
                        $list_khieunai = report_selectall();
                        include "../AirBlade/view/report/report_handling.php";
                    break;
                    case 'listkn':
                        $list_khieunai = report_selectall();
                        include "../AirBlade/view/report/report_handling.php";
                        break;
                    case 'themkn':
                        $NoiDung = $_POST['noidung'];
                        $UserID = 0;
                        $filename=$_FILES['image']['name'];
                        $target_dir = "../AirBlade/uploads/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
    
                        }else{
    
                        }
                        report_insert( $UserID , $NoiDung , $filename );
                        $list_khieunai = report_selectall();
                        include "../AirBlade/view/report/report_process.php";
                        break;
                    case 'themdg':
                        $NoiDung = $_POST['noidung'];
                        $ProductID = $_POST['ProductID'];
                        $UserID = $_POST['UserID'];
                        $Sao = $_POST['Sao'];
                        feedback_insert($UserID,$ProductID,$NoiDung,$Sao);
                        $list_danhgia = feedback_selectall();
                        include "../AirBlade/view/feedback/feedback_process.php";
                        break;
                    case 'thembd':
                        $NoiDung = $_POST['noidung'];
                        $Tag = $_POST['Tag'];
                        $UserID = $_POST['UserID'];
                        $Image = $_POST['image'];
                        $NgayDang = date('d-m-Y H:i:s');
                        post_insert( $UserID , $NoiDung ,$Tag , $Image , $NgayDang );
                        $list_post = post_selectall();
                        include "../AirBlade/view/post/post_process.php";            
                        break;   
                    case 'catory':
                        include "catory.php";
                        break;
                    case 'news':
                        
                        include "view/content/news.php";
                        break;
                    case 'introduce':
                        include "view/content/introduce.php";
                        break;
                    case 'contact':
                        include "view/content/contact.php";
                        break;
                    case 'signup':
                        include "view/sign/register.php";
                        break;
                    case 'signin':
                        include "view/sign/login.php";
                        break;
                } // Kết thúc switch
            } // Kết thúc if
            else {
                include "view/content/main.php";
            }
            include "view/footter.php";
        ?>
</body>

</html>
