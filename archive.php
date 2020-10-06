<?php get_header(); ?>
<section class="banner">        
    <img src="<?php echo get_template_directory_uri(); ?>/img/fleche.png" alt="#" class="fleche">
    <div class="bkg-banner">
        <div class="banner-left">
            <h1>Agenda</h1>
            <p>Retrouver ici l'ensemble des dernières et prochaines actualités comme les évènements à venir, les différentes réunions d'informations, sorties… </p>            
        </div>
        <div class="banner-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/agenda_banniere.jpg" alt="#">
        </div>
    </div>  
</section>
<!-- séparateur -->
<div class="separateur"></div>

<section>
        <?php
        $args = array(
        'post_type' => 'evenement',
        'posts_per_page' => -1,
        'order' => 'ASC', 
        'orderby' => 'date_complete-event',
        );

        $my_query = new WP_Query( $args );

    
        if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
        
            <!-- bloc event 1-->
        <div class="bloc-event">
            <div class="img-event">
                <div class="date-event">
                    <div class="haut">
                        <span><?php the_field('date_jour_sur_image') ?></span>
                    </div>
                    <div class="bas">
                        <span><?php the_field('date_mois_annee_sur_image') ?></span>
                    </div>
                </div>
            <?php 
            $image_single = get_field( 'img-event' );
            if( $image_single ) {	
                echo wp_get_attachment_image( $image_single, 'img-events' );
            }?>
            </div>
            <div class="text-event">
                <h4><?php the_title(); ?></h4>
                <span><?php the_field( 'date_complete-event' ) ?> - </span>  
                <span><?php the_field( 'heure-event' ) ?></span>
                <?php the_excerpt(); ?>
                <span><a href="<?php the_permalink(); ?>">Lire plus...</a></span>                    
            </div>
        </div>

        <?php endwhile;
        endif;

    
        wp_reset_postdata(); ?>
</section>


<div class="site__navigation">
    <div class="site__navigation__prev">
        <?php previous_posts_link( 'Page Précédente' ); ?>
    </div>
    <div class="site__navigation__next">
        <?php next_posts_link( 'Page Suivante' ); ?> 
    </div>
</div>
  

<?php get_footer(); ?>