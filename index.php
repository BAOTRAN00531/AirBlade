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
            <?php

            include("php/config.php");
            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && !empty($row)) {
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['id'] = $row['Id'];
                } else {
                    echo "<div class='message'>
                      <p>Đã nhập sai Email hoặc Mật khẩu</p>
                       </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Trở về</button>";
                }
                if (isset($_SESSION['valid'])) {
                    header("Location: home.php");
                }
            } else {


            ?>
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
                        Bạn chưa có tài khoản? <a href="register.php">Đăng ký ngay</a>
                    </div>
                </form>
        </div>
    <?php } ?>
    </div>
</body>

</html>