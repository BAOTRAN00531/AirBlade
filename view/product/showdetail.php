<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
    crossorigin="anonymous"></script>
<style>
    table {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<section id="main">
    <?php
    foreach ($onesp as $sp) {
        extract($sp);
        $hinh = "uploads/" . $hinhanh;
        echo
            '<table class="xe">
                    <tr>
                    <th><img src="' . $hinh . '"alt="' . $TENSP . '" height="204px" width="450px"></th>
                    <th class="tieude"><p><h2>' . $TENSP . '</h2>
                                    <br>
                                    <h3>' . $GIASP . " ₫ " . '</h3>
                                    <br>
                                <form action="/view/order/muahang.php" method="post">
                                <input type="text" name="TENSP" value="' . $TENSP . '" hidden>
                                <input type="text" name="MASP" value="' . $MASP . '" hidden>
                                <input type="text" name="GIASP" value="' . $GIASP . '" hidden>
                                <input type="text" name="HINH" value="' . $hinh . '" hidden>
                                    <button type="submit">Mua ngay</button></p></th>
                                    </form>
                    
                    </tr>
                </table>
     <div class="noidung1">
        <h2>GIỚI THIỆU ' . $TENSP . '</h2>
        <p>Honda Airblade được xem là một trong những dòng xe thành công nhất của hãng xe Nhật Bản này tại Việt Nam. Kể từ khi ra mắt vào năm 2007, mẫu xe tay ga tầm trung này đã tiến hành nâng cấp và tái thiết kế 3 lần, đến cuối năm 2012, Honda đưa ra dòng xe Airblade 125 phân khối cho Airblade, bắt đầu dựng nên bước phát triển mới, là thế hệ thứ 4 của dòng xe này, chấm dứt hàng loạt các phiên bản 110 phân khối trước đó. Chiếc Airblade 110 Fi cuối cùng này có chiều cao gầm xe ở mức 133mm, nặng 110 kg. Airblade 110 Fi trang bị loại động cơ xăng 4 kỳ, dung tích 108 cm3, phun xăng điện tử Fi và làm mát bằng chất lỏng. Công suất tối đa của động cơ là 6,7 kW đạt được ở tốc độ quay 8.000 vòng/phút. Phanh trước của Air Blade vẫn là loại phanh đĩa, trong khi phanh sau là phanh kiểu tang trống. Xe vẫn có kích thước tổng thể dài x rộng x cao là 1890 x 680 x 110 mm, riêng chiều dài cơ sở là 1.273 mm. Các phiên bản Airblade 110 đều có hộc đựng đồ nhỏ phía trước và bình xăng đặt chính giữa xe. Airblade ngày càng tăng sự thuận tiện cho người dùng và mang lại cảm giác đi tay ga êm ái với mức giá tầm trun, đây được xem như là một sự lựa chọn hàng đầu cho dòng xe tay ga của mọi gia đình Việt.</p>
     </div>
     <br>
     <div class="noidung2">
        <h2>THÔNG SỐ KỸ THUẬT</h2>
        <p>Chưa có thông tin về Thông số kỹ thuật dòng xe HONDA Airblade 125 FI</p>
     </div>
     <br>
     <div class="noidung3">
        <h2>PHỤ TÙNG HONDA AIRBLADE 125 FI</h2>
        <p>Không có phụ tùng tương ứng với dòng xe HONDA Airblade 125 FI</p>
     </div>
     <br>
    <div class="wrapper">
        <h3> ĐÁNH GIÁ KHÁCH HÀNG</h3><br>
        <form action="../../index.php?action=themdg" method="post">
            <div class="rating">
                <input type="number" name="Sao" hidden>
                <i class="bx bx-star star"></i>
                <i class="bx bx-star star"></i>
                <i class="bx bx-star star"></i>
                <i class="bx bx-star star"></i>
                <i class="bx bx-star star"></i>
            </div>
            <textarea name="noidung" cols="70" row="9" placeholder="Hãy chia sẻ cảm nhận..."></textarea>
            <div class="btn-group">
            <input type="text" name="UserID" value="0" hidden>
            <input type="text" name="ProductID" value="' . $id . '" hidden>
                <button type="submit" class="btn submit">Submit</button>
            </div>
        </form>
    </div>';
    }
    // foreach ($list_danhgia as $list) {
    //     extract($list);
    //     if ($Sao == 1) {
    //         echo '            
    //         <input type="text" name="Sao" hidden>
    //         <i class="bx bxs-star star active"></i>
    //         <i class="bx bx-star star"></i>
    //         <i class="bx bx-star star"></i>
    //         <i class="bx bx-star star"></i>
    //         <i class="bx bx-star star"></i>';
    //     } elseif ($Sao == 2) {
    //         echo '            
    //             <input type="text" name="Sao" hidden>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bx-star star"></i>
    //             <i class="bx bx-star star"></i>
    //             <i class="bx bx-star star"></i>';
    //     } elseif ($Sao == 3) {
    //         echo '            
    //             <input type="text" name="Sao" hidden>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bx-star star"></i>
    //             <i class="bx bx-star star"></i>';
    //     } elseif ($Sao == 4) {
    //         echo '            
    //             <input type="text" name="Sao" hidden>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bx-star star"></i>';
    //     } elseif ($Sao == 5) {
    //         echo '            
    //             <input type="text" name="Sao" hidden>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bxs-star star active"></i>
    //             <i class="bx bxs-star star active"></i>';
    //     }
    //     echo "<br>";
    //     echo $NoiDung;
    //     echo "<br>";
    // }
    ?>
    <br>
    <h3 style="text-align: center;">ĐÁNH GIÁ CỦA CÁC KHÁCH HÀNG KHÁC</h3>
    <br>
    <div class="reviews-container">
        <?php foreach ($list_danhgia as $list): ?>
            <div class="review-wrapper">
                <div class="rating-container">
                    <div class="stars">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <?php if ($i <= $list['Sao']): ?>
                                <i class="bx bxs-star star active"></i>
                            <?php else: ?>
                                <i class="bx bx-star star"></i>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <div class="review-content">
                        <?php echo $list['NoiDung']; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <script src="../JS/danhgia.js"></script>
</section>