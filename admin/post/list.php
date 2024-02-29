<div class="row">    

            <div class="row frmcontent">
                <div class="row mb10 frmloai">
                    <table style="text-align: center">
                        <tr>
                            <th>ID</th>
                            <th>ten</th>
                            <th>tomtat</th>
                            <th>noidung</th>
                            <th>iddm</th>
                            <th>hinh</th>
                        </tr>
                        <?php 
                            foreach ($list_post as $post) {
                                extract($post);
                                $suapost="index.php?action=suapost&id=".$id;
                                $xoapost="index.php?action=xoapost&id=".$id;
                                echo ' 
                                <tr>
                                    <td>'.$id.'</td>
                                    <td>'.$tenbv.'</td>
                                    <td>'.$tomtat.'</td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$iddm.'</td>
                                    <td>'.$hinh.'</td>
  
                                    <td><a href="'.$suapost.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoapost.'"><input type="button" value="Xóa"></a></td>
                                </tr>';
                            }
                        ?>
                    </table>
                </div>
            </div>
</div>