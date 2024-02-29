<!DOCTYPE html>
<html>
<head>
    <title>SẢN PHẨM</title>
</head>
<body>
    <h1>THÊM LOẠI HÀNG</h1>
    <!-- Form thêm sản phẩm -->
    <form action="index.php?action=addsp" id="product-form" method="post" enctype="multipart/form-data" >
        <div class="">
            DANH MỤC
            <select name="iddm" id="">
                <?php
                    foreach ($listdm as $danhmuc) {
                        extract($danhmuc);
                        echo'<option value="'.$IDDM.'">'.$LOAISP.'</option>';
                    }                
                ?>
             
                
            </select>
        </div>
       <div class="">Tên Sản Phẩm: <br>
            <input type="text" name="tensp" id="rowlist" > 
       </div>
       <div class="">Giá: <br>
            <input type="text" name="giasp" id="rowlist" > 
       </div>
       <div class="">Số lượng: <br>
            <input type="text" name="soluongsp" id="rowlist" > 
       </div>
       <div class="">Hình: <br>
            <input class="input-hinh" type="file" name="hinh" id="rowlist" >
       </div>
       <div class="">Mô Tả: <br>
            <textarea name="mota" id="" cols="30" rows="10"></textarea> 
       </div>

        <div>
            <input type="submit" id="add" name="addsp" value="Thêm">
            <input type="reset" value="Nhập lại">
            <a href="index.php?action=listsp"><input type="button" value="Danh Sách">
        </div>
    </form>
    
</body>
</html>
