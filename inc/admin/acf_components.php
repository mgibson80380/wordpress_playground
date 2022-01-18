<?php

add_action('acf/init',  __NAMESPACE__ . '\\register_blocks');
function register_blocks() {
    // check function exists
    if( function_exists('acf_register_block') ) {
        acf_register_block(array(
            'name'              => 'Hero',
            'title'             => __('Hero'),
            'description'       => __('A Hero block.'),
            'render_template'   => get_template_directory() . '/inc/blocks/hero.php',
            'category'          => 'mgblocks',
            'icon'              => 'align-full-width',
            'mode'              => 'edit',
            'keywords'          => array( 'hero', 'layout' ),
            'post_'
        ));

        acf_register_block(array(
            'name'              => 'Services',
            'title'             => __('Services'),
            'description'       => __('A Services block.'),
            'render_template'   => get_template_directory() . '/inc/blocks/services.php',
            'category'          => 'mgblocks',
            'icon'              => 'hammer',
            'mode'              => 'edit',
            'keywords'          => array( 'services', 'layout' ),
            'post_'
        ));

        acf_register_block(array(
            'name'              => 'Projects',
            'title'             => __('Projects'),
            'description'       => __('A Projects block.'),
            'render_template'   => get_template_directory() . '/inc/blocks/projects.php',
            'category'          => 'mgblocks',
            'icon'              => 'portfolio',
            'mode'              => 'edit',
            'keywords'          => array( 'projects', 'layout' ),
            'post_'
        ));

        acf_register_block(array(
            'name'              => 'Latest Blog',
            'title'             => __('Latest Blog'),
            'description'       => __('A Latest Block block.'),
            'render_template'   => get_template_directory() . '/inc/blocks/latest-blog.php',
            'category'          => 'mgblocks',
            'icon'              => 'excerpt-view',
            'mode'              => 'edit',
            'keywords'          => array( 'latest posts', 'layout' ),
            'post_'
        ));

        acf_register_block(array(
            'name'              => 'Contact',
            'title'             => __('Contact'),
            'description'       => __('A Contact block.'),
            'render_template'   => get_template_directory() . '/inc/blocks/contact.php',
            'category'          => 'mgblocks',
            'icon'              => 'forms',
            'mode'              => 'edit',
            'keywords'          => array( 'contact', 'layout' ),
            'post_'
        ));

        acf_register_block(array(
            'name'              => 'Trading View',
            'title'             => __('Trading View'),
            'description'       => __('A Trading View Chart Block.'),
            'render_template'   => get_template_directory() . '/inc/blocks/trading-view.php',
            'category'          => 'mgblocks',
            'icon'              => 'chart-area',
            'mode'              => 'edit',
            'keywords'          => array( 'chart', 'layout' ),
            'post_'
        ));
    }
}