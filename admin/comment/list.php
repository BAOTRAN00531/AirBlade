

<div class="row">    

            <div class="row frmcontent">
                <div class="row mb10 frmloai">
                    <table style="text-align: center">
                        <tr>
                            <th>IDDG</th>
                            <th>Mã người dùng</th>
                            <th>Mã sản phẩm</th>
                            <th>Nội dung</th>
                            <th>Sao</th>
                        </tr>
                        <?php 
                            foreach ($listdg as $danhgia) {
                                extract($danhgia);
                                $suadg="index.php?action=suadg&IDDG=".$IDDG;
                                $xoadg="index.php?action=xoadg&IDDG=".$IDDG;
                                echo ' 
                                <tr>
                                    <td>'.$IDDG.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$MASP.'</td>
                                    <td>'.$NoiDung.'</td>
                                    <td>'.$Sao.'</td>
                                    <td><a href="'.$suadg.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoadg.'"><input type="button" value="Xóa"></a></td>
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


