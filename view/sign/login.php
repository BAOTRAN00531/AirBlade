<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Đăng nhập</title>
</head>

<body>
    <main class="main">
        <div class="container">
            <img src="../IMG/logo_final.png" alt="main logo" class="main-logo">
            <div class="form-container">
                <?php
                include("./php/config.php");
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
                        header("Location: personalinfor.php");
                    }
                } else {
                    ?>
                    <br>
                    <h1 class="title_input">Đăng nhập</h1>
                    <br>
                    <form action="/register" method="post" class="box_input">
                        <input type="text" name="email" id="email" autocomplete="off" required placeholder="Email">
                        <input type="password" name="password" id="password" autocomplete="off" required
                            placeholder="Mật khẩu">
                        <input type="submit" class="btn" name="submit" value="Đăng nhập" required>
                        <br>
                        <a href="#" class="txt">Quên mật khẩu</a>
                        <div class="separate">
                            <br><span>-----------Hoặc-----------</span>
                        </div>
                        <div class="buttons-container">
                            <a href="https://www.facebook.com" class="facebook-button">Facebook</a>
                            <a href="https://www.google.com" class="google-button">Google</a>
                        </div>
                        <p> Bạn có tài khoản chưa?<a href="index.php?action=signup" class="txt">Đăng ký</a></p>
                    </form>
                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>