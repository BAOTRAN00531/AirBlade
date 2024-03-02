<?php
if (isset($sanpham) && is_array($sanpham)) {
        extract($sanpham);
}
if (isset($listdm) && is_array($listdm)) {
        // Không sử dụng extract ở đây, thay vào đó sử dụng tên biến cụ thể hơn
        // extract($listdm);
}
$imgPATH = "../uploads/" . $hinhanh;
if (file_exists($imgPATH)) {
        $hinh = "<img src='" . $imgPATH . "' height='100px' width='100px'>";
} else {
        $hinh = "Không có ảnh";
}
?>
<link rel="stylesheet" href="../CSS/admin_product_update.css">
<div class="row">
        <div class="row frmtitle">
                <h1>CẬP NHẬT LOẠI HÀNG</h1>
        </div>
        <div class="row frmcontent">
                <form action="index.php?action=updatesp" method="post" enctype="multipart/form-data"
                        onsubmit="return redirectToPage()">
                        <div class="">
                                <select name="iddm" id="">
                                        <option value="0" selected>Tất cả</option>
                                        <?php
                                        if (isset($listdm) && is_array($listdm)) {
                                                foreach ($listdm as $danhmuc) {
                                                        // Sử dụng tên biến cụ thể hơn
                                                        $IDDM = $danhmuc['IDDM'];
                                                        $LOAISP = $danhmuc['LOAISP'];
                                                        if ($IDDM == $iddm) {
                                                                $s = "selected";
                                                        } else {
                                                                $s = "";
                                                        }
                                                        echo '<option value="' . $IDDM . '" ' . $s . '>' . $LOAISP . '</option>';
                                                }
                                        }
                                        ?>
                                </select>
                        </div>
                        <div class="">Tên Sản Phẩm: <br>
                                <input type="text" name="tensp" id="rowlist" value="<?= isset($TENSP) ? $TENSP : '' ?>">
                        </div>
                        <div class="">Giá: <br>
                                <input type="text" name="giasp" id="rowlist" value="<?= isset($GIASP) ? $GIASP : '' ?>">
                        </div>
                        <div class="">Số lượng: <br>
                                <input type="text" name="soluong" id="rowlist"
                                        value="<?= isset($TONKHO) ? $TONKHO : '' ?>">
                        </div>
                        <div class="">Hình: <br>
                                <input type="file" name="hinh" id="hinh" onchange="loadImage(this)"><br><br>
                                <div id="imageContainer">
                                        <?= $hinh ?>
                                </div>
                        </div>
                        <div class="">Mô Tả:<br>
                                <textarea name="mota" id="" cols="30"
                                        rows="10"><?= isset($MOTA) ? $MOTA : '' ?></textarea>
                        </div>
                        <div>
                                <input type="hidden" name="id" value="<?= isset($MASP) ? $MASP : '' ?>">
                                <input type="submit" name="capnhatsp" value="CẬP NHẬT">
                                <a href="index.php?action=listsp"><input type="button" value="Danh Sách"></a>
                        </div>
                </form>

                <script>
                        function loadImage(input) {
                                if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function (e) {
                                                document.getElementById('imageContainer').innerHTML = '<img src="' + e.target.result + '" height="100px" width="100px">';
                                        }
                                        reader.readAsDataURL(input.files[0]);
                                }
                        }

                        function redirectToPage() {
                                alert('Đã cập nhật thông tin sản phẩm thành công');
                                return true;
                        }
                </script>
        </div>
</div>