<?php

if ( ! function_exists( 'zt_testimonial_category' ) ) {

    // Register Custom Taxonomy
    function zt_testimonial_category() {
    
        $labels = array(
            'name'                       => _x( 'Testimonial Categories', 'Taxonomy General Name', 'ztgroup-testimonial-slider' ),
            'singular_name'              => _x( 'Testimonial Category', 'Taxonomy Singular Name', 'ztgroup-testimonial-slider' ),
            'menu_name'                  => __( 'Testimonial Categories', 'ztgroup-testimonial-slider' ),
            'all_items'                  => __( 'All Testimonial Categories', 'ztgroup-testimonial-slider' ),
            'parent_item'                => __( 'Cat superior', 'ztgroup-testimonial-slider' ),
            'parent_item_colon'          => __( 'Cat. superior', 'ztgroup-testimonial-slider' ),
            'new_item_name'              => __( 'Add new Testimonial Category', 'ztgroup-testimonial-slider' ),
            'add_new_item'               => __( 'Add new', 'ztgroup-testimonial-slider' ),
            'edit_item'                  => __( 'Edit Testimonial Category', 'ztgroup-testimonial-slider' ),
            'update_item'                => __( 'Act. Testimonial Category', 'ztgroup-testimonial-slider' ),
            'view_item'                  => __( 'View Testimonial Category', 'ztgroup-testimonial-slider' ),
            'separate_items_with_commas' => __( 'Separate categories with commas', 'ztgroup-testimonial-slider' ),
            'add_or_remove_items'        => __( 'Add or remove categories', 'ztgroup-testimonial-slider' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'ztgroup-testimonial-slider' ),
            'popular_items'              => __( 'Popular categories', 'ztgroup-testimonial-slider' ),
            'search_items'               => __( 'Search categories', 'ztgroup-testimonial-slider' ),
            'not_found'                  => __( 'Not found', 'ztgroup-testimonial-slider' ),
            'no_terms'                   => __( 'No categories', 'ztgroup-testimonial-slider' ),
            'items_list'                 => __( 'List of categories', 'ztgroup-testimonial-slider' ),
            'items_list_navigation'      => __( 'Categories list', 'ztgroup-testimonial-slider' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'rewrite'                    => false,
        );
        register_taxonomy( 'zt_testimonial_category', array( 'ztgroup_testimonials' ), $args );
    
    }
    add_action( 'init', 'zt_testimonial_category', 0 );
    
    }