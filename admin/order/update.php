<?php

foreach ($dh as $donhang)
{
    extract($donhang);
}

    
?>
<div class="row">    
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?action=updatedh" method="post">
            <div class="">
                IDDH: <br>
                <input type="text" name="IDDH" id="IDDH" readonly value="<?=$IDDH?>">
            </div>
            <div class="">
                Mã sản phẩm: <br>
                <input type="text" name="MASP" id="MASP" readonly value="<?=$MASP?>">
            </div>
            <div class="">
                Mã người dung: <br>
                <input type="text" name="iduser" readonly value="<?=$iduser?>">
            </div>
            <div class="">
                Tên : <br>
                <input type="text" name="HOTEN" value="<?=$HOTEN?>"> 
            </div>
            <div class="">
                Địa chỉ: <br>
                <input type="text" name="DIACHI" value="<?=$DIACHI?>">
            </div>
            <div class="">
                Số điện thoại: <br>
                <input type="text" name="PHONE" value="<?=$PHONE?>">
            </div>
            <div class="">
                Email: <br>
                <input type="text" name="EMAIL" value="<?=$EMAIL?>">
            </div>
            <div class="">
                Tổng tiền: <br>
                <input type="text" name="TONG" value="<?=$TONG?>">
            </div>
            <div class="">
                Phương thức thanh toán: <br>
                <input type="text" name="PTTT" value="<?=$PTTT?>">
            </div>
            <div class="">
                Ngày đặt hàng: <br>
                <input type="text" name="NGAYDATHANG" value="<?=$NGAYDATHANG?>">
            </div>
            <div>
                <input type="submit" name="capnhatdh" value="CẬP NHẬT">
                <input type="reset" value="Nhập lại">
            </div>                 
        </form>
    </div>
</div>    
