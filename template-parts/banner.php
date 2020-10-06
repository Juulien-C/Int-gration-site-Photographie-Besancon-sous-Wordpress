    <!-- banniere -->
    <section class="banner">        
        <img src="<?php echo get_template_directory_uri(); ?>/img/fleche.png" alt="#" class="fleche">
        <div class="bkg-banner">
            <div class="banner-left">
                <?php the_title( '<h1>', '</h1>' ); ?>
                <p><?php the_content(); ?></p>            
            </div>
            <div class="banner-right">
                <?php the_post_thumbnail( 'img-banner' ); ?>
            </div>
        </div>  
    </section>
