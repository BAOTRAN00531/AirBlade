<!------------------------ Main-------------------------->
<section id="main">
      <div class="quangcao">
        <img src="../IMG/BANNER_3.png" alt="">
      </div><BR>
      <div class="Tieude">
        <h2>THÔNG TIN MỚI TỪ CÁC HÃNG XE</h2>
      </div><br>
      <table class="noidung">
     <tr>
          <?php
        foreach( $news as $tintuc )
        {
            extract($tintuc);
            $tenbaiviet=$tintuc['tenbv'];
            $tomtat=$tintuc['tomtat'];
            $hinh=$tintuc['hinh'];
            $idp=$tintuc['id'];
            echo" 
          
              <th rowspan='2'> <a href='index.php?action=detailnews&idp=$idp'><img src='../uploads/$hinh' width='300px' height='230px'  alt='.$hinh.'></a>
              <h4>$tenbaiviet</h4>
             
              $tomtat
              </a></th>
            
          ";
        }
        ?>
     </tr>
      </table>
   
</section>
<div class="banner">
  <img src="../IMG/ms_banner_img7.png">
</div>