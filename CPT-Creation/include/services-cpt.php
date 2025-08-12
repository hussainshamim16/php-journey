<?php
function create_services_post_type() {

    $labels = array(
        'name'                  => _x('Services', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Service', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Services', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Service', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Service', 'textdomain'),
        'new_item'              => __('New Service', 'textdomain'),
        'edit_item'             => __('Edit Service', 'textdomain'),
        'view_item'             => __('View Service', 'textdomain'),
        'all_items'             => __('All Services', 'textdomain'),
        'search_items'          => __('Search Services', 'textdomain'),
        'not_found'             => __('No services found.', 'textdomain'),
        'not_found_in_trash'    => __('No services found in Trash.', 'textdomain'),
        'featured_image'        => _x('Service Cover Image', 'Overrides the “Featured Image” phrase', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'services'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'menu_icon'          => 'dashicons-hammer', // You can change the icon
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true, // Enables Gutenberg Editor
    );

    register_post_type('services', $args);
}

add_action('init', 'create_services_post_type');
