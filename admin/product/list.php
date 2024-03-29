<link rel="stylesheet" href="../CSS/admin_list.css">
<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?action=listsp" method="post" class="search_area">
            <input type="text" name="keyw">
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $IDDM . '">' . $LOAISP . '</option>';
                }
                ?>
            </select>
            <input type="Submit" name="listOK" value="Search">
        </form>
        <div class="row mb10 frmloai">
            <table style=" text-align:center;">
                <tr>
                    <th></th>
                    <th>MÃ SẢN PHẨM </th>
                    <th>TÊN SẢN PHẨM </th>
                    <th>GIÁ </th>
                    <th>SỐ LƯỢNG </th>
                    <th>HÌNH </th>
                    <th>MÔ TẢ </th>
                </tr>
                <?php
                if (isset($listsp) && is_array($listsp) && !empty($listsp)) {
                    foreach ($listsp as $sanpham) {
                        // Thực hiện các thao tác trong vòng lặp
                        extract($sanpham);
                        $suasp = "index.php?action=suasp&id=" . $MASP;
                        $xoasp = "index.php?action=xoasp&id=" . $MASP;
                        $imgPATH = "../uploads/" . $hinhanh;
                        if (is_file($imgPATH)) {
                            $hinh = "<img src='" . $imgPATH . "' height='50px', width='50px'";
                        } else {
                            $hinh = "khum có ảnh";
                        }
                        echo ' 
                                <tr>
                                    <td><input type="checkbox" name="name[]" id="check_all"></td>
                                    <td>' . $MASP . '</td>
                                    <td>' . $TENSP . '</td>
                                    <td>' . number_format($sanpham['GIASP']) . " ₫ " . '</td>
                                    <td>' . $TONKHO . '</td>
                                    <td>' . $hinh . '</td>
                                    <td>' . $MOTA . '</td>
                                    <td><a href="' . $suasp . '"><input type="button" value="Sửa" style="border-radius: 20px;"></a> <a href="' . $xoasp . '"><input type="button" value="Xóa" style="border-radius: 20px;"></a></td>
                                </tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>
    <div class="options">
        <input type="button" id="btn1" value="Chọn tất cả" class="button_option">
        <input type="button" id="btn2" value="Bỏ chọn" class="button_option">
        <input type="button" id="btn3" value="Xóa" class="button_option">
        <a href="index.php?action=addsp"><input type="button" value="Nhập thêm" class="button_option"></a>

        <script language="javascript">

            // Chức năng chọn hết
            document.getElementById("btn1").onclick = function () {
                // Lấy danh sách checkbox
                var checkboxes = document.getElementsByName('name[]');
                // Lặp và thiết lập checked
                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].checked = true;
                }
            };

            // Chức năng bỏ chọn hết
            document.getElementById("btn2").onclick = function () {
                // Lấy danh sách checkbox
                var checkboxes = document.getElementsByName('name[]');

                // Lặp và thiết lập Uncheck
                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].checked = false;
                }
            };

        </script>