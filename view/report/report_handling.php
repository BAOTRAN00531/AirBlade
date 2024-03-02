<link rel="stylesheet" href="../../CSS/admin_list.css">
<div class="row">    
    <div class="row frmtitle"><h1>DANH SÁCH ĐÁNH GIÁ</h1></div>
            <div class="row frmcontent">
                <div class="row mb10 frmloai">
                <table style="text-align: center">
                <?php 
                        foreach ($list_khieunai as $khieunai) {
                          extract($khieunai);
                            $xoa="index.php?action=xoakn&MAKN=".$MAKN;
                            $luu="index.php?action=luukn&MAKN=".$MAKN."&iduser=".$iduser."&NoiDung=".$NoiDung."&HINH=".$HINH."";
                            echo ' 
                                <tr>
                            <td><input type="checkbox" name="name[]" id="check_all"></td>
                            <td>'.$MAKN.'</td>
                            <td>'.$iduser.'<td>
                            <td>'.$NoiDung.'</td>
                            <td>'.$HINH.'</td>
                            <td><a href="'.$xoa.'"><input type="button" value="Xóa"></a></td>
                            <td><a href="'.$luu.'"><input type="button" value="luu"></a></td>
                                </tr>
                                ';
                                            }
                                        ?>
                </table>
                </div>
            </div>
</div>
