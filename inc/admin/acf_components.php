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