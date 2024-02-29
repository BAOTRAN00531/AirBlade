<section id="main">
        <h1>Tin tức mới</h1>
        <hr>
        <div class="container">
            <a href><img src="../IMG/Products3.jpg" alt></a>
            <div class="text-container">
                <a href><h2>Ưu đãi trả góp, tậu xe đỉnh chóp</h2></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eos eius, sapiente veritatis perferendis, ducimus libero
                    architecto alias doloribus exercitationem atque
                    reiciendis autem distinctio reprehenderit dolore
                    voluptas laborum qui nostrum illum.</p>
                <p>Architecto adipisci at deleniti quisquam quis qui?
                    Voluptas delectus, voluptatem rerum pariatur blanditiis
                    exercitationem repudiandae neque! Magni deserunt
                    perferendis ex voluptates, minima quae mollitia quis
                    beatae porro facere unde suscipit.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Veritatis praesentium, obcaecati quisquam sint nostrum animi
                    nobis est pariatur laborum eaque cumque possimus. Commodi
                    corporis sequi ex quo nam, dicta repudiandae.</p>
            </div>

            <a href><img src="../IMG/Products3.jpg" alt></a>
            <div class="text-container">
                <a href><h2>Ưu đãi trả góp, tậu xe đỉnh chóp</h2></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eos eius, sapiente veritatis perferendis, ducimus libero
                    architecto alias doloribus exercitationem atque
                    reiciendis autem distinctio reprehenderit dolore
                    voluptas laborum qui nostrum illum.</p>
                <p>Architecto adipisci at deleniti quisquam quis qui?
                    Voluptas delectus, voluptatem rerum pariatur blanditiis
                    exercitationem repudiandae neque! Magni deserunt
                    perferendis ex voluptates, minima quae mollitia quis
                    beatae porro facere unde suscipit.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Veritatis praesentium, obcaecati quisquam sint nostrum animi
                    nobis est pariatur laborum eaque cumque possimus. Commodi
                    corporis sequi ex quo nam, dicta repudiandae.</p>
            </div>
            <a href><img src="../IMG/Products3.jpg" alt></a>
            <div class="text-container">
                <a href><h2>Ưu đãi trả góp, tậu xe đỉnh chóp</h2></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eos eius, sapiente veritatis perferendis, ducimus libero
                    architecto alias doloribus exercitationem atque
                    reiciendis autem distinctio reprehenderit dolore
                    voluptas laborum qui nostrum illum.</p>
                <p>Architecto adipisci at deleniti quisquam quis qui?
                    Voluptas delectus, voluptatem rerum pariatur blanditiis
                    exercitationem repudiandae neque! Magni deserunt
                    perferendis ex voluptates, minima quae mollitia quis
                    beatae porro facere unde suscipit.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Veritatis praesentium, obcaecati quisquam sint nostrum animi
                    nobis est pariatur laborum eaque cumque possimus. Commodi
                    corporis sequi ex quo nam, dicta repudiandae.</p>
            </div>
            <a href><img src="../IMG/Products3.jpg" alt></a>
            <div class="text-container">
                <a href><h2>Ưu đãi trả góp, tậu xe đỉnh chóp</h2></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eos eius, sapiente veritatis perferendis, ducimus libero
                    architecto alias doloribus exercitationem atque
                    reiciendis autem distinctio reprehenderit dolore
                    voluptas laborum qui nostrum illum.</p>
                <p>Architecto adipisci at deleniti quisquam quis qui?
                    Voluptas delectus, voluptatem rerum pariatur blanditiis
                    exercitationem repudiandae neque! Magni deserunt
                    perferendis ex voluptates, minima quae mollitia quis
                    beatae porro facere unde suscipit.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Veritatis praesentium, obcaecati quisquam sint nostrum animi
                    nobis est pariatur laborum eaque cumque possimus. Commodi
                    corporis sequi ex quo nam, dicta repudiandae.</p>
            </div>
            <a href><img src="../IMG/Products3.jpg" alt></a>
            <div class="text-container">
                <a href><h2>Ưu đãi trả góp, tậu xe đỉnh chóp</h2></a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eos eius, sapiente veritatis perferendis, ducimus libero
                    architecto alias doloribus exercitationem atque
                    reiciendis autem distinctio reprehenderit dolore
                    voluptas laborum qui nostrum illum.</p>
                <p>Architecto adipisci at deleniti quisquam quis qui?
                    Voluptas delectus, voluptatem rerum pariatur blanditiis
                    exercitationem repudiandae neque! Magni deserunt
                    perferendis ex voluptates, minima quae mollitia quis
                    beatae porro facere unde suscipit.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Veritatis praesentium, obcaecati quisquam sint nostrum animi
                    nobis est pariatur laborum eaque cumque possimus. Commodi
                    corporis sequi ex quo nam, dicta repudiandae.</p>
            </div>
        </div>
    <?php  
        foreach( $news as $tintuc )
        {
            extract($tintuc);
            $tenbaiviet=$tintuc['tenbv'];
            $tomtat=$tintuc['tomtat'];
            $hinh=$tintuc['hinh'];
            $idp=$tintuc['id'];
            echo" <table class='noidung'>
            <tr>
              <th rowspan='2'> <a href='index.php?action=detailnews&idsp=$idp'><img src='../uploads/$hinh'alt='Sản phẩm 1'></a>
              <h4>$tenbaiviet</h4> <text>$tomtat</text>
              </a></th>
            
            </tr>
          </table>";
        }
        ?>
    </section>