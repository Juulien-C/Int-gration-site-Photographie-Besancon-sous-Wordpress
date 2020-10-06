<!-- section 1 -->
<section class='section-activite'>
    <h2><?php the_field( 'titre-activite-1' ); ?></h2>
    <div class="bloc-activite">
        <div class="img-activite">
        <?php 
            $image_id = get_field( 'image-activite-1' );
            if( $image_id ) {	
              echo wp_get_attachment_image( $image_id, 'full' );
          }?>
            <!-- <img src="img/act-1.jpg" alt="image conference"> -->
        </div>
        <div class="text-activite">
            <p><?php the_field( 'contenu-activite-1' ); ?>
            </p>
            <button><a href="<?php the_field('btn-activite-1'); ?>">Consulter l'agenda</a></button>
        </div>
    </div>
</section>

<!-- séparateur bleu -->
<div class='separateur-bleu'></div>

<!-- section 2 -->
<section class='section-activite'>
    <h2><?php the_field( 'titre-activite-2' ); ?></h2>
    <div class="bloc-activite">
        <div class="img-activite">
        <?php 
            $image_id = get_field( 'image-activite-2' );
            if( $image_id ) {	
              echo wp_get_attachment_image( $image_id, 'full' );
          }?>
            <!-- <img src="img/act-2.jpg" alt="image conference"> -->
        </div>
        <div class="text-activite">
            <p><?php the_field( 'contenu-activite-2' ); ?></p>                
            <button><a href="<?php the_field('btn-activite-1'); ?>">Consulter l'agenda</a></button>
        </div>
    </div>
</section>

<!-- séparateur bleu -->
<div class='separateur-bleu'></div>

    <!-- section 3 -->
    <section class='section-activite'>
        <h2><?php the_field( 'titre-activite-3' ); ?></h2>
        <div class="bloc-activite">
            <div class="img-activite">
            <?php 
            $image_id = get_field( 'image-activite-3' );
            if( $image_id ) {	
              echo wp_get_attachment_image( $image_id, 'full' );
          }?>
                <!-- <img src="img/act-3.jpg" alt="image conference"> -->
            </div>
            <div class="text-activite">
                <p><?php the_field( 'contenu-activite-3' ); ?></p>
                    
                <button><a href="<?php the_field('btn-activite-3'); ?>">Découvrir nos stages</a></button>
            </div>
        </div>
    </section>

    <!-- separateur -->
    <div class="separateur"></div>

