<?php
/**
    * Register and Enqueue Styles.
*/

function custom_menus() {
    // Register Navigation Menus
    register_nav_menus( array(
        'header'   => 'Header Menu',
    ) );

}
add_action( 'after_setup_theme', 'custom_menus');
