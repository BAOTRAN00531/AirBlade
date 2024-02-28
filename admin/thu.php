<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Books</title>
    <!-- đầu trang-->
    <!--<link rel="stylesheet" href="/view/css/backtotop.css"> bị trùng css với nút xem thêm của trang chi tiết sản phẩm -->
</head>
    <body>
  <!-- menu -->
  <div class="sidenav">
        <!-- Giao diện bên trái -->
        <a href="index.php?action=adddm" >Quản lý danh mục sản phẩm</a>
        <a href="index.php?action=addsp">Quản lý sản phẩm</a>
        <a href="index.php?action=quanlybaiviet=them">Quản lý bài viết</a>
        <a href="index.php?action=quanlydanhmucbaiviet=them">Quản lý mục bài viết </a>
        <a href="index.php?action=binhluan&query=them">Quản lý bl</a> 
        <a href="index.php?action=logout">Log out</a>
        <a href="../index.php">FutureBooks User</a>
        
     
      
    
    </div>
    
  
    <?php 
        if (isset($_SESSION['ROLE']))
         {
            extract($_SESSION['ROLE']);
            echo '  <button id="logoutbutton" class="btn-logout">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-log-out" viewBox="0 0 24 24">
                <defs/>
                <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/>
            </svg>
        </button>
        <script>
            document.getElementById("logoutbutton").addEventListener("click", function() {
            window.location.href = "index.php?action=thoat";});
    </script>';
        } else {
                echo'';         
         }
      ?>
      <!-- cái này do chỉnh cho chiều ngang luôn luôn bằng nội dung dài nhất của div và a -->



</div>


        
        <!-- Giao diện giữa -->
            <!-- Giao diện giữa -->

            <section class="content-section">
               
<?php
    include "../dao/pdo.php";
    include "../dao/danhmuc.php";
    include "../dao/sanpham.php";
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
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdm=danhmuc_select_all();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                   danhmuc_delete($_GET['id']);
                 }
                 $listdm=danhmuc_select_all();
                $sql="select * from danhmuc order by LOAISP desc";
                $listdm=pdo_query($sql);
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                   $dm=danhmuc_select_by_id($_GET['id']);
                  }
                include "danhmuc/update.php";
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
                include "danhmuc/list.php";
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
                include "sanpham/add.php";
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
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    sanpham_delete($_GET['id']);
                  }
                 
                  $listsp=sanpham_select_all("",0);
                  include "sanpham/list.php";
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
                include "sanpham/update.php";
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
                include "sanpham/list.php";
                break;
            case 'addpost':
                
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
           
        <!-- Giao diện bên phải -->
            
        </div>

        
       
       
        </div>
    </body> 
</html>


