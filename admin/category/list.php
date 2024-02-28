

<div class="row">    
            <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmloai">
                    <table style="text-align: center">
                        <tr>
                            <th></th>
                            <th>THỨ TỰ</th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach ($listdm as $danhmuc) {
                                extract($danhmuc);
                                $suadm="index.php?action=suadm&id=".$THUTU;
                                $xoadm="index.php?action=xoadm&id=".$THUTU;
                                echo ' 
                                <tr>
                                    <td><input type="checkbox" name="name[]" id="check_all"></td>
                                    <td>'.$THUTU.'</td>
                                    <td>'.$IDDM.'</td>
                                    <td>'.$LOAISP.'</td>
                                    <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div class="">
                <input type="button" id="btn1" value="Chọn tất cả" >
                <input type="button" id="btn2" value="Bỏ chọn" >
                <input type="button" value="Xóa" >
                <a href="index.php?action=adddm"><input type="button" value="Nhập thêm"></a>
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


