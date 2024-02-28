<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/admin.css">
    <title>BÀI VIẾT</title>
</head>
<body >
    <h1>THÊM BÀI VIẾT</h1>
        <form action="index.php?action=addpost" id="post-form" method="post" >
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