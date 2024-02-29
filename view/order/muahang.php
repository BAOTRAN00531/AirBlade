

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
                        <form action="../../index.php?action=hoadon" method="post">
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
    <script>
    function showDropdown(dropdownId) {
        // Hide all dropdowns
        var dropdowns = document.geSDTementsByClassName('payment-dropdown');
        for (var i = 0; i < dropdowns.length; i++) {
            dropdowns[i].style.display = 'none';
        }

        // Show the selected dropdown
        document.geSDTementById(dropdownId).style.display = 'block';
    }
    </script>

