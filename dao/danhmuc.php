<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @param String $ma_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function danhmuc_insert($ma_loai, $tenloai){
    $sql = "INSERT INTO danhmuc(IDDM,LOAISP) VALUES('$ma_loai','$tenloai')";
    pdo_execute($sql);
}
/**
 * Cập nhật tên loại
 * @param int $id là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function danhmuc_update($id, $madm, $ten_loai){
    $sql = "UPDATE danhmuc SET IDDM='".$madm."', LOAISP='".$ten_loai."' WHERE THUTU=".$id;
    pdo_execute($sql);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $id là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function danhmuc_delete($id){
    $sql = "DELETE FROM danhmuc WHERE THUTU=".$id;
    pdo_execute($sql);
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function danhmuc_select_all(){
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $id là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function danhmuc_select_by_id($id){
    $sql = "SELECT * FROM danhmuc WHERE THUTU=".$id;
    return pdo_query_one($sql);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param string $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function danhmuc_exist($ma_loai){
    $sql = "SELECT count(*) FROM danhmuc WHERE IDDM=?";
    return pdo_query_value($sql) > 0;
}
function danhmuc_loadall(){
    $sql = "SELECT * FROM danhmuc order by THUTU desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function danhmucSelectByID($THUTU)
{
    $sql = "SELECT * FROM danhmuc WHERE THUTU=$THUTU";
    $dsdmf = pdo_query($sql);
    return $dsdmf;
}
function getIDDMByOrder($thutu) {
    $sql = "SELECT IDDM FROM danhmuc WHERE THUTU = ?";
    return pdo_query_value($sql, $thutu);
}


