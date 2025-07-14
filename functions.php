<?php
function mytheme_enqueue_scripts() {
  wp_enqueue_style('mytheme-style', get_stylesheet_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'));
  wp_enqueue_script('mytheme-script', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

function create_custom_post_types() {
  register_post_type('testimonial', [
    'labels' => [
      'name' => __('Testimonials'),
      'singular_name' => __('Testimonial')
    ],
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'thumbnail']
  ]);
}
add_action('init', 'create_custom_post_types');
?>