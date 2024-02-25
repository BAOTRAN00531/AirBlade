<header>
        <div class="topnav">
                    <!--Logo-->
                    <div class="top-content">
                        <img src="IMG/logo.png" alt="">
                    </div>

                    <!--Menu-->
                    <div class="navbar">
                        <a href="#">Trang Chủ</a>
                        <a href="index.php?action=introduce">Giới thiệu</a>
                            <div class="dropdown">
                                    <button class="dropbtn"><a href="index.php?action=product">Danh mục</a>
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-content">
                                    <?php
                                        foreach ($dsdm as $dm)
                                        {
                                            $THUTU = $dm['THUTU']; // Trích xuất giá trị của $THUTU từ mỗi phần tử trong mảng
                                            $LOAISP = $dm['LOAISP'];
                                            $dm = "index.php?action=product&thutu=".$THUTU;
                                            echo '<a href="'.$dm.'">'.$LOAISP.'</a>';
                                        }
                                   ?>
                                    </div>
                                </div>
                        <a href="index.php?action=news">Tin tức</a>
                        <a href="index.php?action=contact">Liên hệ</a>
                    </div>

                    <!--Biểu tượng login-->
                    <div class="login">
                        <a href="index.php?action=signin"><i class='fas fa-user-circle' style='font-size:50px'></i></a></i>
                    </div>
            </div>
    </header>
    <!----------------------- Banner------------------------->
<div class="banner">
        <img src="IMG/banner_new_final.png">
</div>