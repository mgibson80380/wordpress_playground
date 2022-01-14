<?php


function custom_block_categories( $categories ) {
    // setup category array
    $custom_category = [
        'slug' => 'mgblocks',
        'title' => 'Matthew Gibson Blocks'
    ];

    // create and insert new category array  at top position
    $new_categories = [];
    $new_categories[0] = $custom_category;

    // rebuild category array
    foreach( $categories as $category ) {
        $new_categories[] = $category;
    }

    return $new_categories;
}

add_filter( 'block_categories',  'custom_block_categories' , 99, 1 );