<?php
if ( ! function_exists('ztgroup_testimonial_post_type') ) {

    // Register Custom Post Type
    function ztgroup_testimonial_post_type() {
    
        $labels = array(
            'name'                  => _x( 'Testimonials', 'Post Type General Name', 'ztgroup-testimonial-slider' ),
            'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'ztgroup-testimonial-slider' ),
            'menu_name'             => __( 'Testimonials', 'ztgroup-testimonial-slider' ),
            'name_admin_bar'        => __( 'Testimonials', 'ztgroup-testimonial-slider' ),
            'archives'              => __( 'Testimonials', 'ztgroup-testimonial-slider' ),
            'attributes'            => __( 'Atributos del Testimonial', 'ztgroup-testimonial-slider' ),
            'parent_item_colon'     => __( 'Testimonial superior', 'ztgroup-testimonial-slider' ),
            'all_items'             => __( 'View all Testimonials', 'ztgroup-testimonial-slider' ),
            'add_new_item'          => __( 'Add new Testimonial', 'ztgroup-testimonial-slider' ),
            'add_new'               => __( 'Add new', 'ztgroup-testimonial-slider' ),
            'new_item'              => __( 'New Testimonial', 'ztgroup-testimonial-slider' ),
            'edit_item'             => __( 'Edit Testimonial', 'ztgroup-testimonial-slider' ),
            'update_item'           => __( 'Act. Testimonial', 'ztgroup-testimonial-slider' ),
            'view_item'             => __( 'View Testimonial', 'ztgroup-testimonial-slider' ),
            'view_items'            => __( 'View Testimonial', 'ztgroup-testimonial-slider' ),
            'search_items'          => __( 'Search Testimonial', 'ztgroup-testimonial-slider' ),
            'not_found'             => __( 'Not Found', 'ztgroup-testimonial-slider' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'ztgroup-testimonial-slider' ),
            'featured_image'        => __( 'Image featured', 'ztgroup-testimonial-slider' ),
            'set_featured_image'    => __( 'set image featured', 'ztgroup-testimonial-slider' ),
            'remove_featured_image' => __( 'Remove image featured', 'ztgroup-testimonial-slider' ),
            'use_featured_image'    => __( 'Use image featured', 'ztgroup-testimonial-slider' ),
            'insert_into_item'      => __( 'insert into testimonial', 'ztgroup-testimonial-slider' ),
            'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'ztgroup-testimonial-slider' ),
            'items_list'            => __( 'Testimonial list', 'ztgroup-testimonial-slider' ),
            'items_list_navigation' => __( 'Testimonial list navigation', 'ztgroup-testimonial-slider' ),
            'filter_items_list'     => __( 'Filter Testimonial list', 'ztgroup-testimonial-slider' ),
        );
        $args = array(
            'label'                 => __( 'Testimonial', 'ztgroup-testimonial-slider' ),
            'description'           => __( 'Create Testimonial', 'ztgroup-testimonial-slider' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'post-formats' ),
            'taxonomies'            => array( 'zt_testimonial_category' ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-testimonial',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => 'testimonials',
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'ztgroup_testimonials', $args );
    
    }
    add_action( 'init', 'ztgroup_testimonial_post_type', 0 );
    
    }