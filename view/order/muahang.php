

    <style>
    /* css chỉnh cho menu */
   

    .item1
    {
        grid-area: btn;
    }
    .item2
    {
        grid-area: name;
    }
    .item3
    {
        grid-area: span
    }
    .grid-container2
    {
        margin-top: 20px;
        display: grid;
        grid-template-areas: 'span span span';
    }
    .grid-container
    {
        
        display:grid;
        grid-template-areas: 'btn name name' ;
    }

     .payment-method-container {
        text-align: center;
    }


    .payment-method input[type="radio"] {
        transform: scale(0.4);
        margin-top: -4px;
        /* Adjust the scale factor as needed */

    }

    .payment-dropdown {
        margin-top: 10px;
        /* Adjust as needed for spacing between radio buttons and dropdowns */
    }
    </style>

                <div class="thanh-toan-right">
                    <table>
                        <h3>Địa chỉ thanh toán</h3>
                        <form action="hoadon.php" method="post">
                            <label for="HOTEN">Họ và Tên: </label><br>
                            <input type="text" pattern="^sáàảãạăắằẳẵặâấầẩẫậéèẻẽẹêếềểễệíìỉĩịóòỏõọôốồổỗộơớờởỡợúùủũụưứừửữựýỳỷỹỵÁÀẢÃẠĂẮẰẲẴẶÂẤẦẨẪẬÉÈẺẼẸÊẾỀỂỄỆÍÌỈĨỊÓÒỎÕỌÔỐỒỔỖỘƠỚỜỞỠỢÚÙỦŨỤƯỨỪỬỮỰÝỲỶỸỴđĐ]+$/" id="HOTEN" name="HOTEN" required
                                placeholder="Nhập họ và tên.."><br>
                            <label for="email">Email: </label><br>
                            <input type="email" id="email" name="email" required
                                placeholder="Nhập email.." ><br>
                            <label for="phone">Số điện thoại: </label><br>
                            <input type="SDT" id="SDT" name="SDT" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$" placeholder="Nhập số điện thoại" required >
                            <br>
                            <label for="DIACHI">Địa chỉ nhận hàng: </label> <br>
                            <input type="text" pattern="^sáàảãạăắằẳẵặâấầẩẫậéèẻẽẹêếềểễệíìỉĩịóòỏõọôốồổỗộơớờởỡợúùủũụưứừửữựýỳỷỹỵÁÀẢÃẠĂẮẰẲẴẶÂẤẦẨẪẬÉÈẺẼẸÊẾỀỂỄỆÍÌỈĨỊÓÒỎÕỌÔỐỒỔỖỘƠỚỜỞỠỢÚÙỦŨỤƯỨỪỬỮỰÝỲỶỸỴđĐ]+$/" id="DIACHI" name="DIACHI" required
                                placeholder="Nhập địa chỉ.." > <br>
                                <input type="hidden" id="iduser" name="iduser" value="11">
                                <input type="hidden" id="idsp" name="idsp" value="22">
                                <input type="hidden" name="TONG" id="TONG" value="100000">

                                    <input class="item1" type="radio" id="cod" name="pttt" value="<?=1?>" required>
                                    <label class="item2" for="cod">COD</label>
                                    <input class="item1" type="radio" id="momo" name="pttt" value="<?=2?>" required>
                                    <label class="item2" for="momo">momo</label>
                                    <input class="item1" type="radio" id="vnpay" name="pttt" value="<?=3?>" required>
                                    <label class="item2" for="vnpay">vnpay</label>
                      
                            <table class="chuyen-trang"><br>
                                <td><a href="">
                                        <input name="dathang" type="submit" value="ĐẶT HÀNG ">
                                    </a></td>
                            </table>                           
                        </form>
                        <section class="content-section">
 
                        </section>
                </div>
            </div>
        </div>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Thanh Toán</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            display: flex;
            flex-wrap: wrap;
        }

        .form-container > div {
            flex: 1;
            margin-right: 20px;
        }

        img {
            display: block;
            margin: auto;
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3E%3Cpath d='M14.1 7L10 11.1 5.9 7 4.5 8.4l5.5 5.5L15.5 8z'/%3E%3C/svg%3E");
            background-position: right 10px top 50%;
            background-repeat: no-repeat;
            background-size: 12px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Đơn hàng</h2>
        <div class="form-container">
            <div>
                <img src="/web/mẫu.jpg" alt="Hình sản phẩm">
            </div>
            <div>
                <h1> Honda Airblade 125/160</h1>
                <h1>43.000.000(chi phí dự kiến)</h1>
                <h2>Chi phí dự tính sang tên</h2>
                <label for="registration_location">Nơi Đăng Ký:</label>
                <select id="registration_location">
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                    <!-- Thêm các option khác nếu cần -->
                </select>
                <button type="button" onclick="makeCall()">Gọi Điện</button> <br>
                <div style="display:flex;">
                    <div style="flex:1;margin-right:10px;">
                        <label for="full_name">Họ và Tên:</label>
                        <input type="text" id="full_name">
                    </div>
                    <div style="flex:1;">
                        <label for="phone_number">Số Điện Thoại:</label>
                        <input type="tel" id="phone_number">
                    </div>
                </div>
                <label for="address">Địa Chỉ:</label>
                <input type="text" id="address">
                <label for="payment_method">Phương Thức Thanh Toán:</label>
                <select id="payment_method">
                    <option value="cash">Tiền Mặt</option>
                    <option value="card">Thẻ Ngân Hàng</option>
                    
                    <!-- Thêm các phương thức thanh toán khác nếu cần -->
                </select>
                <button type="button" onclick="placeOrder()">Đặt Hàng</button>
            </div>
        </div>
    </div>

    <script>
        function makeCall() {
            // Code xử lý khi nhấn nút gọi điện
            // Ví dụ: Hiển thị một thông báo hoặc thực hiện cuộc gọi điện
        }

        function placeOrder() {
            // Code xử lý khi nhấn nút đặt hàng
            // Ví dụ: Gửi thông tin đặt hàng đến server và xử lý đơn hàng
        }
    </script>
</body>
</html>
