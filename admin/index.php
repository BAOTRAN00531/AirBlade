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
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Quản lý thống kê</span>
				</a>
			</li>
			<li>
				<a href="index.php?action=listsp">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Quản lý sản phẩm</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-receipt'></i>
					<span class="text">Quản lý đơn hàng</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Quản lý bình luận</span>
				</a>
			</li>
			<li>
				<a href="index.php?action=addpost">
					<i class='bx bxs-edit-alt'></i>
					<span class="text">Quản lý bài đăng</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-star'></i>
					<span class="text">Quản lý đánh giá</span>
				</a>
			</li>
			<li class="active">
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Quản lý tài khoản</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
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
			<i class='bx bx-menu' ></i>
			<!-- <a href="#" class="nav-link" class="sp">Quản lý sản phẩm</a> -->
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
                
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		</nav>
		<!-- NAVBAR -->
        <?php
    include "../dao/pdo.php";
    include "../dao/danhmuc.php";
    include "../dao/sanpham.php";
    include "../dao/post.php";
    if (isset($_GET['action'] )) {
        $act = $_GET['action'];
        switch ($act) {
            case 'adddm':
                if(isset($_POST['addlist'])&&($_POST['addlist'])){
                     $ten=$_POST['ten'];
                     $madm=$_POST['madm'];
                     danhmuc_insert($madm, $ten);
                    }
                $listdm=danhmuc_select_all();
                include "category/add.php";
                break;
            case 'listdm':
                $listdm=danhmuc_select_all();
                include "category/list.php";
                break;
            case 'xoadm':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                   danhmuc_delete($_GET['id']);
                 }
                 $listdm=danhmuc_select_all();
                $sql="select * from danhmuc order by LOAISP desc";
                $listdm=pdo_query($sql);
                include "category/list.php";
                break;
            case 'suadm':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                   $dm=danhmuc_select_by_id($_GET['id']);
                  }
                include "category/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat']))
                {
                    $ten=$_POST['ten'];
                    $thutu=$_POST['thutu'];
                    $madm=$_POST['madm'];
                    danhmuc_update($thutu,$madm,$ten);
                }
                $listdm=danhmuc_select_all();
                include "category/list.php";
                break; 
            case 'addsp':
                if(isset($_POST['addsp'])&&($_POST['addsp'])){
                    $iddm=$_POST['iddm'];
                    $ten=$_POST['tensp'];
                    $gia=$_POST['giasp'];
                    $soluong=$_POST['soluongsp'];
                    $mota=$_POST['mota'];
                    $filename=$_FILES['hinh']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                    }else{

                    }
                    sanpham_insert($iddm,$ten,$gia,$soluong,$filename,$mota);
                   }
                $listdm=danhmuc_select_all();              
                include "product/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listOK'])&&($_POST['listOK'])){
                    $keyw=$_POST['keyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $keyw='';
                    $iddm=0;
                }
                $listdm=danhmuc_select_all();
                $listsp=sanpham_select_all($keyw,$iddm);
                include "product/list.php";
                break;
            case 'xoasp':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    sanpham_delete($_GET['id']);
                  }
                 
                  $listsp=sanpham_select_all("",0);
                  include "product/list.php";
                break;
            case 'suasp':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $sanpham=sanpham_select_by_id($_GET['id']);
                    $listdm = danhmuc_select_all(); // Khởi tạo $listdm
                    if ($sanpham) {
                        extract($sanpham);
                    } else {
                        echo "Không tìm thấy sản phẩm";
                    }
                }
                include "product/update.php";
                break;
            
            case 'updatesp':
                if(isset($_POST['capnhatsp'])&&($_POST['capnhatsp']))
                {
                    $ten=$_POST['tensp'];
                    $gia=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $soluong=$_POST['soluong'];
                    $id=$_POST['id'];
                    $filename=$_FILES['hinh']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                    }else{
                    }
                }
                sanpham_update($id,$ten,$gia,$soluong,$filename,$mota);
                $sanpham=sanpham_select_by_id($id);
                include "product/list.php";
                break;
            case 'addpost':
                    if(isset($_POST['addpost'])&&($_POST['addpost'])){
                        $ten=$_POST['tenbv'];
                        $tomtat=$_POST['tomtat'];
                        $noidung=$_POST['noidung'];
                        $iddm=$_POST['iddm'];
                        $filename=$_FILES['hinh']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
    
                        }else{
    
                        }
                        post_insert($ten,$tomtat,$noidung,$iddm,$filename);
                       }
                    $listdm=danhmuc_select_all();              
                    include "post/add.php";
                    
                break;
            case 'logout':
                    unset( $_SESSION['ROLE'] );
                    header("Location: ../login.php");
                    break; 
            case 'suabl':
                     if ( isset( $_POST['suabl'] ) )
                    {

                        $sql_edit = "UPDATE `binhluan` set `noidung` = '$noidungsua' WHERE `id` = $_GET[id] ";
                        mysqli_query($conn,$sql_edit); 
                        header('Location:../../index.php?action=binhluan');
                    }
                    else
                    {
                        $id=$_GET['id'];
                        $sql_xoa= "DELETE FROM binhluan where id='".$id."' ";
                        mysqli_query($conn,$sql_xoa);  
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
  <script
    type="text/javascript"
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