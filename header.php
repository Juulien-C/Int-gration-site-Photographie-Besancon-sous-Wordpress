<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;700&display=swap" rel="stylesheet"> 
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- header -->
    <nav>
        <div class="logo">
            <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_photographie_besancon.png" width="250px;" alt="logo photographie besancon"></a>
        </div>
        <?php 
            wp_nav_menu( 
                array( 
                    'theme_location' => 'main',
                    'container' => 'ul',
                    'menu_class' => 'nav-links',
                )
            ) 
        ?>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <!-- Fin du header -->



        

    
<?php wp_body_open(); ?>