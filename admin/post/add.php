<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/admin_post_add.css">
    <title>BÀI VIẾT</title>
</head>

<body>
    <h1>THÊM BÀI VIẾT</h1>
    <br>
    <form action="index.php?action=addpost" id="post-form" method="post">
        <div class="">Tên: <br>
            <input type="text" name="tenbv" id="rowlist">
        </div>
        <br>
        <div class="">Hình: <br>
            <input class="input-hinh" type="file" name="hinh" id="rowlist">
        </div>
        <div class="">Tóm tắt: <br>
            <textarea name="tomtat" id="myTextarea" cols="30" rows="10"></textarea>
        </div>
        <div class="">Nội Dung: <br>
            <textarea name="noidung" id="myTextarea" cols="30" rows="10"></textarea>
        </div>
        <div class="">
            DANH MỤC
            <select name="iddm" id="">
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $IDDM . '">' . $LOAISP . '</option>';
                }
                ?>


            </select>
        </div>
        <div>
            <input type="submit" id="add" name="addpost" value="Thêm">
            <input type="reset" value="Nhập lại">
            <a href="index.php?action=listdm"><input type="button" value="Danh Sách">
        </div>
    </form>
</body>

</html>