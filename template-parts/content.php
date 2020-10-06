<!-- banner single -->
<div class="banner-single">
        <?php 
            $image_single = get_field( 'img-event' );
            if( $image_single ) {	
              echo wp_get_attachment_image( $image_single, 'img-single' );
        }?>
</div>
    

<section class="contenu">
    <?php the_title( '<h1>', '</h1>' ); ?>
    <div class="contenu-single">
        <div class="contenu-single-left">
            <span><b><?php the_field( 'date_complete-event' ) ?></b></span><br>
            <span><b><?php the_field( 'heure-event' ) ?></b></span><br>
            <span><b><?php the_field( 'tarif-event' ) ?>€</b></span><br>
            <div class="s-line"></div>
            <h4>Adresse de l'évènement</h4><br>
            <p><?php the_field( 'adresse_evenement' ) ?></p>
        </div>
        <div class="contenu-single-right"> 
            <h4><b>Résumé de l'évènement</b></h4><br>
            <?php the_content() ?>
            <button><a href="<?php the_field( 'bouton_inscription-event' ) ?>">S'inscrire</a></button>
        </div>
    </div>
</section>

<!-- separateur -->
<div class="separateur"></div>