<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Đăng ký</title>
    <script>
        function validateForm() {
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
    <div class="container">
        <div class="box form-box">
            <?php 
            include("./php/config.php");
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                //verifying the unique email

                $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

                if(mysqli_num_rows($verify_query) !=0 ){
                    echo "<div class='message'>
                              <p>Email này đã được sử dụng, Vui lòng thử lại với 1 Email khác!</p>
                          </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                }
                else{
                    mysqli_query($con,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')") or die("Erroe Occured");

                    echo "<div class='message'>
                              <p>Đăng ký thành công!</p>
                          </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Đăng nhập</button>";
                }
            } else {
            ?>
            <header>Đăng ký</header>
            <form action="" method="post" onsubmit="return validateForm()">
                <div class="field input">
                    <label for="username">Họ và tên</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                

                <div class="field input">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Nhập lại mật khẩu</label>
                    <input type="password" name="repeat_password" id="repeat_password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Đăng ký">
                </div>
                <div class="links">
                    Đã có tài khoản? <a href="index.php?action=signin">Đăng nhập</a>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>
