<?php

/* Theme Support */
include get_template_directory() . '/inc/admin/theme-support.php';

/* Styles and Scripts */
include get_template_directory() . '/inc/enqueue.php';

/* Admin Functions */
include get_template_directory() . '/inc/admin/menus.php';
include get_template_directory() . '/inc/admin/routes.php';

/* Custom Post Types */
include get_template_directory() . '/inc/cpt/projects-cpt.php';

include get_template_directory() . '/inc/admin/gutenberg_block_categories.php';
include get_template_directory() . '/inc/admin/acf_components.php';

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

