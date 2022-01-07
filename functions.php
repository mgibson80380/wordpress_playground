<?php
/**
    * Matthew Gibson functions and definitions
*/

/* Theme Support */
include get_template_directory() . '/inc/admin/theme-support.php';

/* Styles and Scripts */
include get_template_directory() . '/inc/enqueue.php';

/* Admin Functions */
include get_template_directory() . '/inc/admin/menus.php';

/* Custom Block Library */
include get_template_directory() . '/assets/block-library/block-library.php';