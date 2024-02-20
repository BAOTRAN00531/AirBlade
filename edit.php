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
    <title>Change Profile</title>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php"> Logo</a></p>
        </div>

        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email', Phone='$phone', Address='$address' WHERE Id=$id ") or die("error occurred");

                if ($edit_query) {
                    echo "<div class='message'>
                    <p>Cập nhật thông tin thành công</p>
                </div> <br>";
                    echo "<a href='home.php'><button class='btn'>Trở về</button>";
                }
            } else {

                $id = $_SESSION['id'];
                $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id ");

                while ($result = mysqli_fetch_assoc($query)) {
                    $res_Username = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Phone = $result['Phone'];
                    $res_Address = $result['Address'];
                }

            ?>
                <header>Thay đổi thông tin cá nhân</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Họ và tên</label>
                        <input type="text" name="username" id="username" value="<?php echo $res_Username; ?>" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="phone">Số điện thoại</label>
                        <input type="number" name="phone" id="phone" value="<?php echo $res_Phone; ?>" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" id="address" value="<?php echo $res_Address; ?>" autocomplete="off" required>
                    </div>

                    <div class="field">

                        <input type="submit" class="btn" name="submit" value="Cập nhật" required>
                    </div>

                </form>
        </div>
    <?php } ?>
    </div>
</body>

</html>