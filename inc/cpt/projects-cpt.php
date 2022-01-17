<?php
    /*
        * Creating a function to create our CPT
    */
    function project_custom_post_type() {
 
        // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Projects', 'Post Type General Name', 'twentytwenty' ),
            'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'twentytwenty' ),
            'menu_name'           => __( 'Projects', 'twentytwenty' ),
            'parent_item_colon'   => __( 'Parent Project', 'twentytwenty' ),
            'all_items'           => __( 'All Projects', 'twentytwenty' ),
            'view_item'           => __( 'View Project', 'twentytwenty' ),
            'add_new_item'        => __( 'Add New Project', 'twentytwenty' ),
            'add_new'             => __( 'Add New Project', 'twentytwenty' ),
            'edit_item'           => __( 'Edit Project', 'twentytwenty' ),
            'update_item'         => __( 'Update Project', 'twentytwenty' ),
            'search_items'        => __( 'Search Project', 'twentytwenty' ),
            'not_found'           => __( 'Project Not Found', 'twentytwenty' ),
            'not_found_in_trash'  => __( 'Project Not found in Trash', 'twentytwenty' ),
        );
         
        // Set other options for Custom Post Type 
        $args = array(
            'label'               => __( 'Projects', 'twentytwenty' ),
            'description'         => __( 'Project news and reviews', 'twentytwenty' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'post_tag','projects_categories'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-portfolio',
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest'        => true,
     
        );
         
        // Registering your Custom Post Type
        register_post_type( 'Projects', $args );
     
    }

    function projects_categories() {
        register_taxonomy(
            'projects_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
            'projects',             // post type name
            array(
                'hierarchical' => true,
                'label' => 'Categories', // display name
                'query_var' => true,
                'rewrite' => array(
                    'slug' => 'projects_category',    // This controls the base slug that will display before each term
                    'with_front' => false  // Don't display the category base before
                )
            )
        );
    }


    function filter_post_type_link( $link, $post ) {
        if ( $post->post_type !== 'themes' )
            return $link;
    
        if ( $cats = get_the_terms($post->ID, 'projects_categories') )
            $link = str_replace('%projects_categories%', array_pop($cats)->slug, $link);
    
        return $link;
    }

    add_action( 'init', 'project_custom_post_type', 0 );
    add_action( 'init', 'projects_categories' );
    add_filter( 'post_type_link', 'filter_post_type_link', 10, 2 );