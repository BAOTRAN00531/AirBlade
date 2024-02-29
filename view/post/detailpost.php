<section id="main">
    <?php  
        foreach( $onepost as $tintuc )
        {
            extract($tintuc);
            $tenbaiviet=$tintuc['tenbv'];
            $tomtat=$tintuc['tomtat'];
            $noidung=$tintuc['noidung'];
            $hinh=$tintuc['hinh'];
            echo"$tenbaiviet";

        }