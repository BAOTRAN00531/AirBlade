<link rel="stylesheet" href="../../CSS/admin_product_update.css">

<?php

foreach ($dg as $danhgia)
{
    extract($danhgia);
}

    
?>
<div class="row">    
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?action=updatedg" method="post">
            <div class="">
                IDDG: <br>
                <input type="text" name="IDDG" readonly value="<?=$IDDG?>">
            </div>
            <div class="">
                Mã sản phẩm: <br>
                <input type="text" name="MASP" readonly value="<?=$MASP?>">
            </div>
            <div class="">
                Mã người dung: <br>
                <input type="text" name="iduser" readonly value="<?=$iduser?>">
            </div>
            <div class="">
                Nội dung: <br>
                <input type="text" name="NoiDung" value="<?=$NoiDung?>"> 
            </div>
            <div class="">
                Sao: <br>
                <input type="text" name="Sao" value="<?=$Sao?>">
            </div>

            <div>
                <input type="submit" name="capnhatdg" value="CẬP NHẬT">
                <input type="reset" value="Nhập lại">
            </div>                 
        </form>
    </div>
</div>    
