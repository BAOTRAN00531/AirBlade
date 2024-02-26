
<section id="main">
    <div class="container">
        <h2>YAMAHA</h2>
        <div class="row">
        <?php 
        foreach( $list1 as $first )
        {
            extract($first);
        }
        echo $first['IDDM'];
        ?>
        </div>

        <h2>HONDA</h2>
        <div class="row"> 
        <?php 
        echo $iddm2;
        ?>  
        </div>
    </div>
</section>