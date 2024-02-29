<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Đăng nhập</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
                <header>Đăng nhập</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Đăng nhập" required>
                    </div>
                    <div class="links">
                        Bạn chưa có tài khoản? <a href="index.php?action=signup">Đăng ký ngay</a>
                    </div>
                </form>
        </div>
    </div>
</body>

</html>