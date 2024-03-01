<section id="main">
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
            
              <th rowspan='2'> <a href='index.php?action=detailnews&idp=$idp'><img src='../uploads/$hinh' width='300px' height='230px' alt='.$hinh.'></a>
              
              <h4>$tenbaiviet</h4> <text>$tomtat</text>
             
              </a></th>
            
            ";
        }
        ?>
     </tr>
</table>
    </section>