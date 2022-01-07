<?php
/**
    * Register and Enqueue Styles.
*/

function matthew_gibson_register_styles() {

    wp_enqueue_style( 'matthew-gibson-tailwind-style', get_template_directory_uri() . '/dist/css/tailwind.css', array(), '' );
    wp_enqueue_style( 'matthew-gibson-style', get_template_directory_uri() . '/dist/css/style.min.css', array(), '' );
    wp_enqueue_style( 'matthew-gibson-slick-styles', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '' );

    wp_enqueue_script( 'matthew-gibson-fontawesome', 'https://kit.fontawesome.com/3d2bd8be77.js', array(), false, true );
    wp_enqueue_script( 'matthew-gibson-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), false, true);
    wp_enqueue_script( 'matthew-gibson-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script( 'matthew-gibson-slick-scripts', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), false, true );

    // wp_enqueue_script( 'matthew-gibson-script', get_template_directory_uri() . '/dist/js/scripts.js', array(), false, true);
}

add_action( 'wp_enqueue_scripts', 'matthew_gibson_register_styles' );
