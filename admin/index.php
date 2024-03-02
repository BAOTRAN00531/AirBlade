<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- My CSS -->
    <link rel="stylesheet" href="../CSS/admin.css">

    <title>Admin</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">AdminABlade</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="index.php?action=listsp">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Quản lý sản phẩm</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=listdh">
                    <i class='bx bxs-receipt'></i>
                    <span class="text">Quản lý đơn hàng</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=listdm">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Quản lý danh mục</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=addpost">
                    <i class='bx bxs-edit-alt'></i>
                    <span class="text">Quản lý bài đăng</span>
                </a>
            </li>
            <li>
                <a href="index.php?action=listcontact">
                    <i class='bx bxs-edit-alt'></i>
                    <span class="text">Quản lý liên hệ</span>
                </a>
            </li>
            <li>
                <a href="index?action=listdg">
                    <i class='bx bxs-star'></i>
                    <span class="text">Quản lý đánh giá</span>
                </a>
            </li>
            <li class="">
                <a href="index.php?action=listkn">
                    <i class='bx bxs-group'></i>
                    <span class="text">Quản lý khiếu nại</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
        </nav>
        <!-- NAVBAR -->
        <?php
        include "../dao/pdo.php";
        include "../dao/danhgia.php";
        include "../dao/contact.php";
        include "../dao/danhmuc.php";
        include "../dao/sanpham.php";
        include "../dao/khieunai.php";
        include "../dao/post.php";
        include "../dao/hoadon.php";
        if (isset($_GET['action'])) {
            $act = $_GET['action'];
            switch ($act) {
                case 'listcontact':
                    $list_contact = contact_select_all();
                    include "contact/list.php";
                    break;
                case 'listdg':
                    $listdg = feedback_selectall();
                    include "comment/list.php";
                    break;
                case 'xoadg':
                    if (isset($_GET['IDDG']) && ($_GET['IDDG'] > 0)) {
                        feedback_delete($_GET['IDDG']);
                    }
                    $listdh = feedback_selectall();
                    include "comment/list.php";
                    break;
                case 'suadg':
                    if (isset($_GET['IDDG']) && ($_GET['IDDG'] > 0)) {
                        $dg = feedback_select_by_id($_GET['IDDG']);
                        if (is_array($dg)) {
                            extract($dg);
                        } else {
                            echo "Không tìm thấy sản phẩm";
                        }
                    }
                    include "comment/update.php";
                    break;
                case 'updatedg':
                    if (isset($_POST['capnhatdg']) && ($_POST['capnhatdg'])) {
                        $IDDG = $_POST['IDDG'];
                        $NoiDung = $_POST['NoiDung'];
                        $Sao = $_POST['Sao'];
                    }
                    feedback_update($IDDG, $NoiDung, $Sao);
                    $listdg = feedback_selectall();
                    include "comment/list.php";
                    break;
                case 'adddm':
                    if (isset($_POST['addlist']) && ($_POST['addlist'])) {
                        $ten = $_POST['ten'];
                        $madm = $_POST['madm'];
                        catalog_insert($madm, $ten);
                    }
                    $listdm = catalog_select_all();
                    include "category/add.php";
                    break;
                case 'listdm':
                    $listdm = catalog_select_all();
                    include "category/list.php";
                    break;
                case 'xoadm':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        catalog_delete($_GET['id']);
                    }
                    $listdm = catalog_select_all();
                    $sql = "select * from danhmuc order by LOAISP desc";
                    $listdm = pdo_query($sql);
                    include "category/list.php";
                    break;
                case 'suadm':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $dm = catalog_select_by_id($_GET['id']);
                    }
                    include "category/update.php";
                    break;
                case 'updatedm':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $ten = $_POST['ten'];
                        $thutu = $_POST['thutu'];
                        $madm = $_POST['madm'];
                        catalog_update($thutu, $madm, $ten);
                    }
                    $listdm = catalog_select_all();
                    include "category/list.php";
                    break;
                case 'addsp':
                    if (isset($_POST['addsp']) && ($_POST['addsp'])) {
                        $iddm = $_POST['iddm'];
                        $ten = $_POST['tensp'];
                        $gia = $_POST['giasp'];
                        $soluong = $_POST['soluongsp'];
                        $mota = $_POST['mota'];
                        $filename = $_FILES['hinh']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                        // Kiểm tra xem có lỗi nào xảy ra trong quá trình tải lên hay không
                        if ($_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
                            // Kiểm tra xem phần tử 'hinh' có tồn tại trong mảng $_FILES hay không
                            if (isset($_FILES['hinh']['name'])) {
                                $filename = $_FILES['hinh']['name'];
                                // Nếu tên tập tin không rỗng, tiến hành xử lý tập tin
                                if (!empty($filename)) {
                                    $target_dir = "../uploads/";
                                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                                    // Kiểm tra xem tập tin đã tồn tại trong thư mục uploads hay chưa
                                    if (file_exists($target_file)) {
                                        // Xử lý khi tập tin đã tồn tại
                                        echo "<script>alert('Tập tin đã tồn tại.');</script>";
                                    } else {
                                        // Di chuyển tập tin vào thư mục uploads
                                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                            // Xử lý thành công khi di chuyển tập tin
                                            echo "<script>alert('Tập tin đã được tải lên thành công.');</script>";
                                        } else {
                                            // Xử lý khi di chuyển tập tin không thành công
                                            echo "<script>alert('Đã xảy ra lỗi khi di chuyển tập tin.');</script>";
                                        }
                                    }
                                } else {
                                    // Xử lý khi tên tập tin rỗng
                                    echo "<script>alert('Tên tập tin không hợp lệ.');</script>";
                                }
                            } else {
                                // Xử lý khi phần tử 'hinh' không tồn tại trong mảng $_FILES
                                echo "<script>alert('Không tìm thấy phần tử hinh trong mảng.');</script>";
                            }
                        } else {
                            // Xử lý khi có lỗi xảy ra trong quá trình tải lên
                            echo "<script>alert('Có lỗi xảy ra khi tải tập tin lên server.');</script>";
                        }

                        // Tiếp tục xử lý các công việc khác trong code của bạn...
        
                        product_insert($iddm, $ten, $gia, $soluong, $filename, $mota);
                    }
                    $listdm = catalog_select_all();
                    include "product/add.php";
                    break;
                case 'listsp':
                    if (isset($_POST['listOK']) && ($_POST['listOK'])) {
                        $keyw = $_POST['keyw'];
                        $iddm = $_POST['iddm'];
                    } else {
                        $keyw = '';
                        $iddm = 0;
                    }
                    $listdm = catalog_select_all();
                    $listsp = product_select_all($keyw, $iddm);
                    include "product/list.php";
                    break;
                case 'suasp':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $sanpham = product_select_by_id($_GET['id']);
                        if (is_array($sanpham)) {
                            extract($sanpham);
                        } else {
                            echo "Không tìm thấy sản phẩm";
                        }
                    }
                    include "product/update.php";
                    break;
                case 'xoasp':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        product_delete($_GET['id']);
                    }

                    product_update($id, $ten, $gia, $soluong, $filename, $mota);
                    $sanpham = product_select_by_id($id);
                    include "product/list.php";
                    break;
                case 'listdh':
                    $listdh = bill_selectall();
                    include "order/list.php";
                    break;
                case 'xoadh':
                    if (isset($_GET['IDDH']) && ($_GET['IDDH'] > 0)) {
                        bill_delete($_GET['IDDH']);
                    }
                    $listdh = bill_selectall();
                    include "order/list.php";
                    break;
                case 'suadh':
                    if (isset($_GET['IDDH']) && ($_GET['IDDH'] > 0)) {
                        $dh = bill_select_by_id($_GET['IDDH']);
                        if (is_array($dh)) {
                            extract($dh);
                        } else {
                            echo "Không tìm thấy sản phẩm";
                        }
                    }
                    include "order/update.php";
                    break;
                case 'updatedh':
                    if (isset($_POST['capnhatdh']) && ($_POST['capnhatdh'])) {
                        $IDDH = $_POST['IDDH'];
                        $HOTEN = $_POST['HOTEN'];
                        $DIACHI = $_POST['DIACHI'];
                        $PHONE = $_POST['PHONE'];
                        $EMAIL = $_POST['EMAIL'];
                        $PTTT = $_POST['PTTT'];
                        $TONG = $_POST['TONG'];
                        $NGAYDATHANG = $_POST['NGAYDATHANG'];

                    }
                    bill_update($IDDH, $HOTEN, $DIACHI, $PHONE, $EMAIL, $TONG, $PTTT, $NGAYDATHANG);
                    $listdh = bill_selectall();
                    include "order/list.php";
                    break;

                case 'listpost':
                    $list_post = post_selectall();
                    include "post/list.php";
                    break;
                case 'addpost':
                    if (isset($_POST['addpost']) && ($_POST['addpost'])) {
                        $ten = $_POST['tenbv'];
                        $tomtat = $_POST['tomtat'];
                        $noidung = $_POST['noidung'];
                        $iddm = $_POST['iddm'];
                        $filename = $_FILES['hinh']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {

                        } else {

                        }
                        post_insert($ten, $tomtat, $noidung, $iddm, $filename);
                    }
                    $listdm = catalog_select_all();
                    include "post/add.php";
                    break;
                case 'suapost':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $post = post_select_by_id($_GET['id']);
                        if (is_array($post)) {
                            extract($post);
                        } else {
                            echo "Không tìm thấy sản phẩm";
                        }
                    }
                    include "post/update.php";
                    break;
                case 'xoapost':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        post_delete($_GET['id']);
                    }
                    $list_post = post_selectall();
                    include "post/list.php";
                    break;
                case 'updatepost':
                    if (isset($_POST['capnhatpost']) && ($_POST['capnhatpost'])) {
                        $id = $_POST['id'];
                        $tenbv = $_POST['tenbv'];
                        $tomtat = $_POST['tomtat'];
                        $noidung = $_POST['noidung'];
                        $iddm = $_POST['iddm'];
                        $hinh = $_POST['hinh'];
                    }
                    post_update($id, $tenbv, $tomtat, $noidung, $iddm, $hinh);
                    $list_post = post_selectall();
                    include "post/list.php";
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
                    $list_khieunai = report_selectall();
                    include "../view/report/report_handling.php";
                    break;
                case 'xoakn':
                    if (isset($_GET['MAKN']) && ($_GET['MAKN'] > 0)) {
                        report_delete($_GET['MAKN']);
                    }
                    $list_khieunai = report_selectall();
                    include "../view/report/report_handling.php";
                    break;
                case 'listkn':
                    $list_khieunai = report_selectall();
                    include "../view/report/report_handling.php";
                    break;
                case 'themkn':
                    $NoiDung = $_POST['noidung'];
                    $UserID = 0;
                    $filename = $_FILES['image']['name'];
                    $target_dir = "../AirBlade/uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

                    } else {

                    }
                    report_insert($UserID, $NoiDung, $filename);
                    $list_khieunai = report_selectall();
                    include "../view/report/report_handling.php";
                    break;
                case 'logout':
                    unset($_SESSION['ROLE']);
                    header("Location: ../login.php");
                    break;
                case 'suabl':
                    if (isset($_POST['suabl'])) {

                        $sql_edit = "UPDATE `binhluan` set `noidung` = '$noidungsua' WHERE `id` = $_GET[id] ";
                        mysqli_query($conn, $sql_edit);
                        header('Location:../../index.php?action=binhluan');
                    } else {
                        $id = $_GET['id'];
                        $sql_xoa = "DELETE FROM binhluan where id='" . $id . "' ";
                        mysqli_query($conn, $sql_xoa);
                        header('Location:../../index.php?action=binhluan');
                    }

                default:
                    # code...
                    break;
            }
        }

        ?>
    </section>
    <!-- CONTENT -->

    <script src="../JS/admin.js"></script>
    <script type="text/javascript"
        src='https://cdn.tiny.cloud/1/0i54asjabx2x5mm0zu0itj3e2pcs5uk4bcy1nr8pg5cr9gca/tinymce/6/tinymce.min.js'
        referrerpolicy="origin">
        </script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#myTextarea',
            width: 600,
            height: 300,
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
                'media', 'table', 'emoticons', 'template', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: 'css/content.css'
        });
    </script>


</body>

</html>