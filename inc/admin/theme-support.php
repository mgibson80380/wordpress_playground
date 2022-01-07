<?php
/**
    * Add theme support for admin features.
*/

function mytheme_support() {
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_support' );
