<?php
require_once 'pdo.php';
/**
 * Thêm loại mới
 * @param String $ma_loai là mã loại danh mục
 * @param String $ten_hh là tên loại hàng
 * @param String $don_gia là giá
 * @param int $so_luong là số lượng
 * @param String $hinh là hình
 * @param String $mo_ta là mô tả
 * @throws PDOException lỗi thêm mới
 */
function sanpham_insert($ma_loai, $ten_hh, $don_gia,$so_luong, $hinh, $mo_ta){
    $sql = "INSERT INTO sanpham(IDDM, TENSP, GIASP,TONKHO,hinhanh, MOTA) VALUES ('$ma_loai', '$ten_hh', '$don_gia','$so_luong' ,'$hinh','$mo_ta')";
    pdo_execute($sql);
}

function sanpham_update($id,$ten_hh, $don_gia,$so_luong, $hinh, $mo_ta){
    if($hinh!=""){
        $sql=" update sanpham set TENSP='".$ten_hh."',GIASP='".$don_gia."',TONKHO='".$so_luong."',hinhanh='".$hinh."',MOTA='".$mo_ta."'where MASP=".$id;
    }
    else{
        $sql=" update sanpham set TENSP='".$ten_hh."',GIASP='".$don_gia."',TONKHO='".$so_luong."',MOTA='".$mo_ta."'where MASP=".$id;
    }     pdo_execute($sql);
}

function sanpham_delete($id){
    $sql = "DELETE FROM sanpham WHERE MASP=".$id;
    pdo_execute($sql);
}
function sanpham_select_all_home(){
    $sql = "SELECT * FROM sanpham where 1 order by MASP desc limit 0,9";
    $listsp=pdo_query($sql);
    return $listsp;
} 
function sanpham_selectall($keyw, $iddm){
    $sql = "SELECT * FROM sanpham";
    if ($keyw != "") {
        $sql .= " WHERE TENSP LIKE '%" . $keyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " WHERE  IDDM ='" . $iddm . "'";
    }
    $sql .= " ORDER BY MASP DESC";
    $listsp = pdo_query($sql);
    return $listsp;
}
function sanphamselectall($keyw, $iddm){
    $conditions = array();

    if ($keyw != "") {
        $conditions[] = "TENSP LIKE '%" . $keyw . "%'";
    }

    if ($iddm > 0) {
        $conditions[] = "IDDM = '" . $iddm . "'";
    }

    // Bắt đầu câu truy vấn
    $sql = "SELECT * FROM sanpham";

    // Thêm điều kiện WHERE nếu có ít nhất một điều kiện
    if (!empty($conditions)) {
        $sql .= " WHERE " . implode(" AND ", $conditions);
    }

    $sql .= " ORDER BY MASP DESC";

    $listsp = pdo_query($sql);
    return $listsp;
}

function sanpham_select_all($keyw,$iddm){
    $sql = "SELECT * FROM sanpham where 1";
    if($keyw!=""){
        $sql.=" and TENSP like'%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    } 
    $sql.=" order by MASP desc"; 
    $listsp=pdo_query($sql);
    return $listsp;
} 
/**
 * Thêm loại mới
 * @param int $ma_hh là mã loại danh mục
 * @throws PDOException lỗi thêm mới
 */
function sanpham_select_by_id($ma_hh){
    $sql = "SELECT * FROM sanpham WHERE MASP=".$ma_hh;
    return pdo_query($sql);
}

function sanpham_exist($ma_hh){
    $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}

function sanpham_tang_so_luot_xem($ma_hh){
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}

function sanpham_select_top10(){
    $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}

function sanpham_select_dac_biet(){
    $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
    return pdo_query($sql);
}

function sanpham_select_by_loai($ma_loai){
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}

function sanpham_select_keyword($keyword){
    $sql = "SELECT * FROM hang_hoa hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

function sanpham_select_page(){
    if(!isset($_SESSION['page_no'])){
        $_SESSION['page_no'] = 0;
    }
    if(!isset($_SESSION['page_count'])){
        $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
        $_SESSION['page_count'] = ceil($row_count/10.0);
    }
    if(exist_param("page_no")){
        $_SESSION['page_no'] = $_REQUEST['page_no'];
    }
    if($_SESSION['page_no'] < 0){
        $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    }
    if($_SESSION['page_no'] >= $_SESSION['page_count']){
        $_SESSION['page_no'] = 0;
    }
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
    return pdo_query($sql);
}
function sanpham_chitiet_by_id(){
    $sql = "SELECT * FROM sanpham WHERE MASP";
    return pdo_query_one($sql);
}
/**
 * Tra cứu
 * @param int $ma_hh là mã loại danh mục
 * @throws PDOException lỗi thêm mới
 */


 function load_tendm($iddm) {
    $sql = "SELECT * FROM danhmuc WHERE IDDM = ?";
    $row = pdo_query_one($sql, array($iddm));

    // Kiểm tra xem có dữ liệu trả về hay không
    if ($row) {
        // Sử dụng extract chỉ khi có dữ liệu
        extract($row);
        return $LOAISP;
    } else {
        // Xử lý khi không có dữ liệu
        return 'Danh mục không tồn tại'; // Hoặc giá trị mặc định khác
    }
}

?>