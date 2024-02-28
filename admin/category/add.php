<!DOCTYPE html>
<html>
<head>
    <title>Danh Mục</title>
</head>
<body>
    <!-- Form thêm sản phẩm -->
    <h1>THÊM LOẠI HÀNG</h1>
    <form action="index.php?action=adddm" id="product-form" method="post" >
        <div class="">
            Mã Loại Hàng: <br>
            <input type="text" name="madm" id="rowlist" >
        </div>
       <div class="">Tên: <br>
            <input type="text" name="ten" id="rowlist" > 
       </div>
       <br>
        <div>
            <input type="submit" id="add" name="addlist" value="Thêm">
            <input type="reset" value="Nhập lại">
            <a href="index.php?action=listdm"><input type="button" value="Danh Sách">
        </div>
    </form>
    
</body>
</html>

