<?php
session_start();

include("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Home</title>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a> </p>
        </div>

        <div class="right-links">

            <?php

            $id = $_SESSION['id'];
            $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

            while ($result = mysqli_fetch_assoc($query)) {
                $res_Username = $result['Username'];
                $res_Email = $result['Email'];
                $res_id = $result['Id'];
                $res_Address = $result['Address'];
                $res_Phone = $result['Phone'];
            }

            echo "<a href='edit.php?Id=$res_id'>Thay đổi thông tin</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Đăng xuất</button> </a>

        </div>
    </div>
    <main>

        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Xin chào <b><?php echo $res_Username ?></b></p>
                </div>
                <div class="box">
                    <p>Email của bạn là <b><?php echo $res_Email ?></b>.</p>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <p>Số điện thoại của bạn là <b><?php echo $res_Phone ?></b>.</p>
                </div>
                <div class="box">
                    <p>Địa chỉ của bạn là <b><?php echo $res_Address ?></b>.</p>
                </div>
            </div>
        </div>

    </main>
</body>

</html>