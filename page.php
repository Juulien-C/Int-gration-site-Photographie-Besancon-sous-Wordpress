<?php get_header(); ?>
	
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/banner' ) ?>

    <!-- séparateur -->
    <div class="separateur"></div>


    <?php 
		if ( is_page( 'activites' ) ) : ?>
	
    <?php get_template_part( 'page-parts/activites' ) ?>

    <?php
        elseif ( is_page( 'stages' ) ) : ?>
        
        <?php get_template_part( 'page-parts/stages' ) ?>

    <?php
    elseif ( is_page( 'adherer' ) ) : ?>
    
    <?php get_template_part( 'page-parts/adherer' ) ?>

    <?php
    elseif ( is_page( 'contact' ) ) : ?>
    
    <?php get_template_part( 'page-parts/contact' );

	
  endif; ?>

<?php endwhile; endif; ?>



<?php get_footer(); ?>