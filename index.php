<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/trangchu.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> <!-- Thêm icon-->
    <title>AirBlade</title>
</head>

<body>
    <?php
        include "dao/pdo.php";
        include "dao/sanpham.php";
        include "dao/danhgia.php";
        include "dao/danhmuc.php";
        include "dao/hoadon.php";
        include "dao/khieunai.php";
        include "view/header.php";
        if (isset($_GET['action'] )&&($_GET['action'])) {
            $action = $_GET['action'];
                switch ($action) {
                
                    case 'catory':
                        include "catory.php";
                        break;
                    case 'news':
                        include "view/content/news.php";
                    case 'introduce':
                        include "view/content/introduce.php";
                    case 'contact':
                            include "view/content/contact.php";
                    case 'signup':
                                include "view/sign/register.php";
                                break;
                    case 'signin':
                            include "view/sign/login.php";
                   

                }}
         else {
                include "view/content/main.php";    
            }
        include "view/footter.php";
   ?>


</body>

</html>