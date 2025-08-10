<?php 
// Prevent direct access
if (!defined('ABSPATH')) exit;

// Add support for post thumbnails
add_theme_support('post-thumbnails');

// Add support for custom logo
add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
));

function disable_page_editor() {
    global $pagenow;

    $post_id = $_GET['post'] ?? 0;

    $pages = [9];

    if (in_array($post_id, $pages)) {
        remove_post_type_support('page', 'editor');
    }
}
add_action('init', 'disable_page_editor');