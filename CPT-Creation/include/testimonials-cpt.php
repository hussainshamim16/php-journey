 <?php
function create_testimonials_post_type() {

    $labels = array(
        'name'                  => _x('testimonials', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('testimonials', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('testimonials', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('testimonials', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New testimonials', 'textdomain'),
        'new_item'              => __('New testimonials', 'textdomain'),
        'edit_item'             => __('Edit testimonials', 'textdomain'),
        'view_item'             => __('View testimonials', 'textdomain'),
        'all_items'             => __('All testimonials', 'textdomain'),
        'search_items'          => __('Search testimonials', 'textdomain'),
        'not_found'             => __('No testimonials found.', 'textdomain'),
        'not_found_in_trash'    => __('No testimonials found in Trash.', 'textdomain'),
        'featured_image'        => _x('testimonials Cover Image', 'Overrides the “Featured Image” phrase', 'textdomain'),
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
        'rewrite'            => array('slug' => 'testimonials'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 12,
        'menu_icon'          => 'dashicons-testimonial', // You can change the icon
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true, // Enables Gutenberg Editor
    );

    register_post_type('testimonials', $args);
}

add_action('init', 'create_testimonials_post_type');

/**
 * Register custom meta fields for Testimonial CPT
 */
function register_testimonial_meta_fields() {

    // Register the meta field for rating
    register_post_meta('testimonials', 'client_rating', [
        'show_in_rest' => true,
        'single' => true,
        'type' => 'number',
    ]);
}
add_action('init', 'register_testimonial_meta_fields');

/**
 * Add meta box for testimonial details
 */
function add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonials_details',
        'Client Details',
        'render_testimonial_meta_box',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_testimonial_meta_boxes');


/**
 * Render the meta box content
 */ 
function render_testimonial_meta_box($post) {
    // Add nonce for security
    wp_nonce_field('testimonial_meta_nonce', 'testimonial_meta_nonce');

    $rating = get_post_meta($post->ID, 'client_rating', true);

    // Output the fields
    echo '<div style="display: grid; gap: 15px; padding: 15px 0;">';


    // Rating
    echo '<div>';
    echo '<label for="client_rating" style="display: block; margin-bottom: 5px; font-weight: 600;">Rating (1-5):</label>';
    echo '<select id="client_rating" name="client_rating" style="width: 100%; padding: 8px;">';
    for ($i = 1; $i <= 5; $i++) {
        echo '<option value="' . $i . '" ' . selected($rating, $i, false) . '>' . $i . '</option>';
    }
    echo '</select>';
    echo '</div>';
    
    echo '</div>';
}

/**
 * Save meta box data
 */
function save_testimonial_meta_data($post_id) {
    // Check nonce
    if (!isset($_POST['testimonial_meta_nonce']) || !wp_verify_nonce($_POST['testimonial_meta_nonce'], 'testimonial_meta_nonce')) {
        return;
    }

    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save rating
    if (isset($_POST['client_rating'])) {
        update_post_meta($post_id, 'client_rating', intval($_POST['client_rating']));
    }
}
add_action('save_post_testimonials', 'save_testimonial_meta_data');
