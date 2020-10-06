<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );

add_image_size( 'img-stages', 755, 505, true );
add_image_size( 'img-events', 752, 340, true );
add_image_size( 'img-single', 1920, 560, true );
add_image_size( 'img-banner', 750, 462, true );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function photographie_besancon_register_assets(){

    // Déclarer le JS
    wp_enqueue_script(
        'photographie_besancon',
        get_template_directory_uri() . '/js/app.js',
        array(),
        '1.0',
        true
    );

    // Déclarer style.css à la racine du thème
    // wp_enqueue_style(
    //     'photographie_besancon',
    //     get_stylesheet_uri(),
    //     array(),
    //     '1.0'
    // );

    // Déclarer un autre fichier CSS
    wp_enqueue_style(
        'photographie_besancon',
        get_template_directory_uri() . '/css/style.css',
        array(),
        '1.0'
    );
}

add_action( 'wp_enqueue_scripts', 'photographie_besancon_register_assets' );

register_nav_menus ( array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
));