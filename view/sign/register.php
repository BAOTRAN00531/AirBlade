<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Đăng ký</title>
    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var usernameRegex = /^[a-zA-ZÀ-ỹ ]*$/; // Chỉ chấp nhận chữ cái, dấu cách và dấu chấm
            if (!usernameRegex.test(username)) {
                alert("Tên người dùng chỉ được chứa chữ cái và dấu cách, không chứa số hoặc ký tự đặc biệt!");
                return false;
            }

            var email = document.getElementById("email").value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Email không đúng định dạng!");
                return false;
            }

            var password = document.getElementById("password").value;
            var repeatPassword = document.getElementById("repeat_password").value;
            if (password != repeatPassword) {
                alert("Mật khẩu nhập lại không khớp!");
                return false;
            }

            return true;
        }
    </script>

</head>

<body>
    <main class="main">
        <div class="container">
            <?php
          
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                //verifying the unique email
            
                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

                if (mysqli_num_rows($verify_query) != 0) {
                    echo "<div class='message'>
                              <p>Email này đã được sử dụng, Vui lòng thử lại với 1 Email khác!</p>
                          </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else {
                    mysqli_query($con, "INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')") or die("Error Occurred");

                    echo "<div class='message'>
                              <p>Đăng ký thành công!</p>
                          </div> <br>";
                    echo "<a href='index.php?action=signin'><button class='btn'>Đăng nhập</button>";
                }
            } else {
                ?>
                <img src="../IMG/logo_final.png" alt="main logo" class="main-logo">
                <div class="form-container">
                    <br>
                    <h1 class="title_input">Đăng kí</h1>
                    <br>
                    <form action="" method="post" class="box_input" onsubmit="return validateForm()">
                        <input type="text" name="username" id="username" autocomplete="off" placeholder="Nhập họ và tên"
                            required>
                        <input type="text" name="email" id="email" autocomplete="off" placeholder="Nhập gmail" required>
                        <input type="password" name="password" id="password" autocomplete="off" placeholder="Nhập mật khẩu"
                            required>
                        <input type="password" name="repeat_password" id="repeat_password" autocomplete="off"
                            placeholder="Xác nhận lại mật khẩu" required>
                        <input type="submit" class="btn" name="submit" value="Đăng ký">
                    </form>
                    <div class="separate">
                        <span>-----------Hoặc-----------</span>
                    </div>
                    <div class="buttons-container">
                        <a href="https://www.facebook.com" class="facebook-button">Facebook</a>
                        <a href="https://www.google.com" class="google-button">Google</a>
                    </div>
                    <div class="camket">
                        <p> Bằng việc đăng kí bạn đã đồng ý với <br>
                            Điều khoản dịch vụ & Chính sách bảo mật</p>
                    </div>
                    <p> Bạn có đã có tài khoản?<a href="index.php?action=signin" class="txt"> Đăng nhập</a></p>
                </div>
            <?php } ?>

        </div>
    </main>
</body>

</html>