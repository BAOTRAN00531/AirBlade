

<div class="row">    

            <div class="row frmcontent">
                <div class="row mb10 frmloai">
                    <table style="text-align: center">
                        <tr>
                            <th>IDDH</th>
                            <th>Mã người dùng</th>
                            <th>Mã sản phẩm</th>
                            <th>Họ tên</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Tổng tiền</th>
                            <th>Phương thức thanh toán</th>
                            <th>Ngày đặt hàng</th>
                        </tr>
                        <?php 
                            foreach ($listdh as $donhang) {
                                extract($donhang);
                                $suadh="index.php?action=suadh&IDDH=".$IDDH;
                                $xoadh="index.php?action=xoadh&IDDH=".$IDDH;
                                echo ' 
                                <tr>
                                    <td>'.$IDDH.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$MASP.'</td>
                                    <td>'.$HOTEN.'</td>
                                    <td>'.$DIACHI.'</td>
                                    <td>'.$PHONE.'</td>
                                    <td>'.$TONG.'</td>
                                    <td>'.$PTTT.'</td>
                                    <td>'.$NGAYDATHANG.'</td>
                                    <td><a href="'.$suadh.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoadh.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                            }
                        ?>
                    </table>
                </div>
            </div>
</div>
<script language="javascript">
 
 // Chức năng chọn hết
 document.getElementById("btn1").onclick = function () 
 {
     // Lấy danh sách checkbox
     var checkboxes = document.getElementsByName('name[]');

     // Lặp và thiết lập checked
     for (var i = 0; i < checkboxes.length; i++){
         checkboxes[i].checked = true;
     }
 };

 // Chức năng bỏ chọn hết
 document.getElementById("btn2").onclick = function () 
 {
     // Lấy danh sách checkbox
     var checkboxes = document.getElementsByName('name[]');

     // Lặp và thiết lập Uncheck
     for (var i = 0; i < checkboxes.length; i++){
         checkboxes[i].checked = false;
     }
 };

</script>


