<?php

foreach ($post as $p)
{
    extract($p);
}

    
?>
<div class="row">    
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?action=updatepost" method="post">
            <div class="">
                ID: <br>
                <input type="text" name="id" id="id" readonly value="<?=$id?>">
            </div>
            <div class="">
                tenbv: <br>
                <input type="text" name="tenbv" id="tenbv" value="<?=$tenbv?>">
            </div>
            <div class="">
                tomtat: <br>
                <input type="text" name="tomtat" value="<?=$tomtat?>">
            </div>
            <div class="">
                noidung: <br>
                <input type="text" name="noidung" value="<?=$noidung?>"> 
            </div>
            <div class="">
                danhmuc: <br>
                <input type="text" name="iddm" value="<?=$iddm?>">
            </div>
            <div class="">
                hinh: <br>
                <input type="text" name="hinh" value="<?=$hinh?>">
            </div>

            <div>
                <input type="submit" name="capnhatpost" value="CẬP NHẬT">
                <input type="reset" value="Nhập lại">
            </div>                 
        </form>
    </div>
</div>    
