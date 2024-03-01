<link rel="stylesheet" href="../CSS/admin_list.css">
<div class="row">    
    <div class="row frmtitle">
        <h1>HỎI ĐÁP KHÁCH HÀNG</h1>
    </div>
            <div class="row frmcontent">
                <div class="row mb10 frmloai">
                    <table style="text-align: center">
                        <tr>
                            <th>ID</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Câu hỏi</th>
                        </tr>
                    <?php
                    foreach($list_contact as $contact)
                    {
                        extract($contact);
                        echo 
                        '
                        <tr>
                        <td>'.$id.'</td>
                        <td>'.$hoten.'</td>
                        <td>'.$email.'</td>
                        <td>'.$sodt.'</td>
                        <td>'.$question.'</td>
                    ';
                    }
                    ?>
                    </table>
                </div>
            </div>
</div>