<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <!-- banniere -->
    <div class="bkg-accueil">
        <div class="animation-scroll">
            <div class="mouse">
            <div class="wheel"></div>
            </div>
            <div>
            <span class="arrow"></span>
            </div>
        </div>
        <div class="wrapper-banner-accueil" >            
            <div class="banner-accueil-b-right">
                <h1><?php the_title(); ?></h1>
                <p><?php the_field( 'contenu-header-home' ); ?></p>
                <button><a href="<?php the_field('btn-header-home'); ?>">Découvrir les activités</a></button><br>
            </div>
        </div>
    </div>

    <!-- séparateur -->
    <div class="separateur"></div>

    <!-- Section 1 -->      
    <section class="wrapper-s1-accueil">
    <div class="s1-b-left">
        <h2><?php the_field( 'titre-intro-home' ); ?></h2>
        <?php the_field( 'contenu-intro-home' ); ?>
        <button><a href="<?php the_field('btn-intro-home'); ?>">Voir les stages</a></button>
    </div>
    <div class="s1-b-right">
    <?php 
        $image_id = get_field( 'img-intro-home' );
        if( $image_id ) {	
            echo wp_get_attachment_image( $image_id, 'full' );
        }?>
        <!-- <img class="photo_besancon" src="img/accueil_besancon.jpg" alt="photo besancon"> -->
    </div>
    </section>

    <!-- séparateur -->
    <div class="separateur"></div>
    <div class="separateur"></div>

    <!-- Section 2 -->
    <section class="s2-accueil">
        <h2><?php the_field('titre-event-home') ?></h2>

        <?php
        $args = array(
        'post_type' => 'evenement',
        'posts_per_page' => 3,
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


        <div class="s2-accueil-btn">
            <button><a href="<?php the_field('btn-event-home'); ?>">Voir plus d'évènements</a></button>
        </div>
    </section>

      <!-- séparateur -->
      <div class="separateur"></div>

      <!-- bloc adhérer -->
      <section class="bkg-s3-accueil">
        <div class="s3-accueil">
            <div class="s3-b-left">
                <h2><?php the_field( 'titre-adherer-home' ); ?></h2>
                <p><?php the_field( 'contenu-adherer-home' ); ?></p>
                <button><a href="<?php the_field('btn-adherer-home'); ?>">En savoir plus</a></button>
            </div>
            <div class="s3-b-right">
            <?php 
            $image_adherer = get_field( 'img-adherer-home' );
            if( $image_adherer ) {	
              echo wp_get_attachment_image( $image_adherer, 'full' );
            }?>
                <!-- <img src="/img/accueil_adherer_illustration.svg" alt="illustation adherer"> -->
            </div>
        </div>
      </section>
  

<?php endwhile; endif; ?>

      <!-- séparateur -->
      <div class="separateur"></div>

<?php get_footer(); ?>