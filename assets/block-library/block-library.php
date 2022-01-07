<?php
function mg_blocks_register_blocks () {

    wp_register_script (
        'mg-blocks',
        get_template_directory_uri() . '/dist/js/block-library.js',
        array( 'wp-blocks', 'wp-editor' ),
        true
    );

    register_block_type ( 'mg-blocks/mg-blocks', [
        'style' => 'mg-blocks',
        'editor_script' => 'mg-blocks',
    ]);
}
   
add_action( 'init', 'mg_blocks_register_blocks' );

function mg_block_category( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'mg-blocks',
                'title' => __( 'MG Blocks', 'mg-blocks' ),
            ),
        )
    );
}
add_filter( 'block_categories_all', 'mg_block_category', 10, 2);
