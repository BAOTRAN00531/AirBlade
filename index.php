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
    include "dao/baidang.php";
    $dsdm = danhmuc_loadall();
    include "view/header.php";
    if (isset($_GET['action']) && ($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            case 'product':
                if (isset($_POST['search']) && ($_POST['search'] != "")) {
                    $search = $_POST["search"];
                } else {
                    $search = "";
                }
                if (isset($_POST['iddm']) && ($_POST['iddm'] > 0)) {
                    $IDDM = $_POST['IDDM'];
                } else {
                    $iddm = 0;
                }
                if (isset($_GET['thutu']) && ($_GET['thutu'] > 0)) {
                    $thutu = $_GET['thutu'];
                    $iddm = getIDDMByOrder($thutu);
                    if ($iddm) {
                        $dssp = sanpham_selectall("", $iddm);
                        $tendm = load_tendm($thutu);
                        $dmf = danhmuc_filter($thutu);
                    } else {
                        // Xử lý trường hợp không tìm thấy danh mục
                    }
                } else {
                    //include "view/maincontent/chinh.php";
                }

                $dssp = sanpham_selectall($search, $iddm);
                include "view/product/product.php";
                break;
            case 'showdetail':
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $id = $_GET['idsp'];
                    $onesp = sanpham_select_by_id($id);
                }
                include "view/product/showdetail.php";
                break;
            case 'luukn':
                if (isset($_GET['MAKN']) && ($_GET['MAKN'] > 0)) {
                    $UserID = $_GET['iduser'];
                    $MAKN = $_GET['MAKN'];
                    $MASP = $_GET['MASP'];
                    $NoiDung = $_GET['NoiDung'];
                    $HINH = $_GET['HINH'];
                    luutru_khieunai($UserID, $MASP, $NoiDung, $HINH);
                }
                $list_khieunai = khieunai_selectall();
                include "../AirBlade/view/report/khieunai_handling.php";
                break;
            case 'xoakn':
                if (isset($_GET['MAKN']) && ($_GET['MAKN'] > 0)) {
                    khieunai_delete($_GET['MAKN']);
                }
                $list_khieunai = khieunai_selectall();
                include "../AirBlade/view/report/khieunai_handling.php";
                break;
            case 'listkn':
                $list_khieunai = khieunai_selectall();
                include "../AirBlade/view/report/khieunai_handling.php";
                break;
            case 'themkn':
                $NoiDung = $_POST['noidung'];
                $ProductID = $_POST['ProductID'];
                $UserID = $_POST['UserID'];
                $Image = $_POST['image'];
                khieunai_insert($UserID, $ProductID, $NoiDung, $Image);
                $list_khieunai = khieunai_selectall();
                include "../AirBlade/view/report/khieunai_process.php";
                break;
            case 'themdg':
                $NoiDung = $_POST['noidung'];
                $ProductID = $_POST['ProductID'];
                $UserID = $_POST['UserID'];
                $Sao = $_POST['Sao'];
                danhgia_insert($UserID, $ProductID, $NoiDung, $Sao);
                $list_danhgia = danhgia_selectall();
                include "../AirBlade/view/feedback/danhgia_process.php";
                break;
            case 'thembd':
                $NoiDung = $_POST['noidung'];
                $Tag = $_POST['Tag'];
                $UserID = $_POST['UserID'];
                $Image = $_POST['image'];
                $NgayDang = date('d-m-Y H:i:s');
                baidang_insert($UserID, $NoiDung, $Tag, $Image, $NgayDang);
                $list_baidang = baidang_selectall();
                include "../AirBlade/view/post/baidang_process.php";
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


        }
    } else {
        include "view/content/main.php";
    }
    include "view/footter.php";
    ?>


</body>

</html>