<?php
function create_projects_post_type() {

    $labels = array(
        'name'                  => _x('Projects', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Project', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Projects', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Project', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Project', 'textdomain'),
        'new_item'              => __('New Project', 'textdomain'),
        'edit_item'             => __('Edit Project', 'textdomain'),
        'view_item'             => __('View Project', 'textdomain'),
        'all_items'             => __('All Projects', 'textdomain'),
        'search_items'          => __('Search Projects', 'textdomain'),
        'not_found'             => __('No Projects found.', 'textdomain'),
        'not_found_in_trash'    => __('No Projects found in Trash.', 'textdomain'),
        'featured_image'        => _x('Project Cover Image', 'Overrides the “Featured Image” phrase', 'textdomain'),
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
        'rewrite'            => array('slug' => 'projects'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'menu_icon'          => 'dashicons-portfolio', // You can change the icon
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true, // Enables Gutenberg Editor
    );

    register_post_type('projects', $args);
}

add_action('init', 'create_projects_post_type');
