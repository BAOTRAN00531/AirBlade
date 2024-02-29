<?php
if (is_array($sanpham)) {
        extract($sanpham);
}
if (is_array($listdm)) {
        extract($listdm);
}
$imgPATH = "../uploads/" . $hinhanh;
if (is_file($imgPATH)) {
        $hinh = "<img src='" . $imgPATH . "' height='100px' width='100px'>";
} else {
        $hinh = "không có ảnh";
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
                                        foreach ($listdm as $danhmuc) {
                                                extract($danhmuc);
                                                if ($IDDM == $iddm)
                                                        $s = "selected";
                                                else
                                                        $s = "";
                                                echo '<option value="' . $IDDM . '" ' . $s . '>' . $LOAISP . '</option>';
                                        }
                                        ?>
                                </select>
                        </div>
                        <div class="">Tên Sản Phẩm: <br>
                                <input type="text" name="tensp" id="rowlist" value="<?= $TENSP ?>">
                        </div>
                        <div class="">Giá: <br>
                                <input type="text" name="giasp" id="rowlist" value="<?= $GIASP ?>">
                        </div>
                        <div class="">Số lượng: <br>
                                <input type="text" name="soluong" id="rowlist" value="<?= $TONKHO ?>">
                        </div>
                        <div class="">Hình: <br>
                                <input type="file" name="hinh" id="hinh" onchange="loadImage(this)"><br><br>
                                <div id="imageContainer">
                                        <?= $hinh ?>
                                </div>
                        </div>
                        <div class="">Mô Tả:<br>
                                <textarea name="mota" id="" cols="30" rows="10"><?= $MOTA ?></textarea>
                        </div>
                        <div>
                                <input type="hidden" name="id" value="<?= $MASP ?>">
                                <input type="submit" name="capnhatsp" value="CẬP NHẬT">
                                <a href="index.php?action=listsp"><input type="button" value="Danh Sách"></a>
                        </div>
                </form>

                <script>
                        // Function to load selected image into the image container
                        function loadImage(input) {
                                if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function (e) {
                                                document.getElementById('imageContainer').innerHTML = '<img src="' + e.target.result + '" height="100px" width="100px">';
                                        }
                                        reader.readAsDataURL(input.files[0]);
                                }
                        }

                        // Function to redirect to the listsp page after form submission
                        function redirectToPage() {
                                alert('Đã cập nhật thông tin sản phẩm thành công');
                                // window.location.href = 'index.php?action=listsp';
                                return true; // Allow form submission
                        }
                </script>
        </div>