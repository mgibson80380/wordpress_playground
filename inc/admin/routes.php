<?php
    /* CUSTOM MENU ROUTE */
    function custom_wp_menu() {
        return wp_get_nav_menu_items('Primary');
    }

    // create new endpoint route
    add_action( 'rest_api_init', function () {
        register_rest_route( 'wp/v2', 'menu', array(
            'methods' => 'GET',
            'callback' => 'custom_wp_menu',
        ) );
    } );

    // Add featured image to REST API
    add_action('rest_api_init', 'register_rest_images' );
    function register_rest_images(){
        register_rest_field( array('projects'),
            'fimg_url',
            array(
                'get_callback'    => 'get_rest_featured_image',
                'update_callback' => null,
                'schema'          => null,
            )
        );
    }
    function get_rest_featured_image( $object, $field_name, $request ) {
        if( $object['featured_media'] ){
            $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
            return $img[0];
        }
        return false;
    }