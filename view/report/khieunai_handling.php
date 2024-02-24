<?php 
        foreach ($list_khieunai as $khieunai) {
          extract($khieunai);
            $xoa="index.php?action=xoakn&MAKN=".$MAKN;
            $luu="index.php?action=luukn&MAKN=".$MAKN."&iduser=".$iduser."&MASP=".$MASP."&NoiDung=".$NoiDung."&HINH=".$HINH."";
            echo ' 
                <tr>
            <td><input type="checkbox" name="name[]" id="check_all"></td>
            <td>'.$MAKN.'</td>
            <td>'.$iduser.'<td>
            <td>'.$MASP.'</td>
            <td>'.$NoiDung.'</td>
            <td>'.$HINH.'</td>
            <td><a href="'.$xoa.'"><input type="button" value="Xóa"></a></td>
            <td><a href="'.$luu.'"><input type="button" value="luu"></a></td>
                </tr>
                <br>';
                            }
                        ?>