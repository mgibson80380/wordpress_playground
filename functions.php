<?php

/* Theme Support */
include get_template_directory() . '/inc/admin/theme-support.php';

/* Styles and Scripts */
include get_template_directory() . '/inc/enqueue.php';

/* Admin Functions */
include get_template_directory() . '/inc/admin/menus.php';

include get_template_directory() . '/inc/admin/gutenberg_block_categories.php';
include get_template_directory() . '/inc/admin/acf_components.php';

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

// create custom function to return nav menu
function custom_wp_menu() {
  // Replace your menu name, slug or ID carefully
  return wp_get_nav_menu_items('Primary');
}

// create new endpoint route
add_action( 'rest_api_init', function () {
  register_rest_route( 'wp/v2', 'menu', array(
      'methods' => 'GET',
      'callback' => 'custom_wp_menu',
  ) );
} );

