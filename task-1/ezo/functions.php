<?php

/**
 * Functions and Definitions
 */

// Enqueueing styles and scripts
function theme_styles_scripts()
{
  // font awesome
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', NULL, 'all');

  // poppins font
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

  // styles
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', NULL, filemtime(get_template_directory() . '/assets/css/style.css'), 'all');

  // scripts
  wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/script.js'), true);
}

add_action('wp_enqueue_scripts', 'theme_styles_scripts');


// Enqueueing admin styles
function admin_styles_scripts()
{
  // styles
  wp_enqueue_style('admin-style', get_template_directory_uri() . '/assets/css/admin.css', NULL, filemtime(get_template_directory() . '/assets/css/admin.css'), 'all');
}
add_action('admin_enqueue_scripts', 'admin_styles_scripts');


// Register ACF blocks
add_action('acf/init', 'theme_register_acf_blocks');
function theme_register_acf_blocks()
{
  if (function_exists('acf_register_block_type')) {

    // --- Header Block ---
    acf_register_block_type(array(
      'name' => 'header-block',
      'title' => __('Header Block'),
      'description' => __('A custom header block with logo and menu items'),
      'render_template' => get_template_directory() . '/blocks/header-block.php',
      'category' => 'layout',
      'icon' => 'menu',
      'keywords' => array('header', 'logo', 'menu'),
      'supports' => array('align' => false)

    ));

    // --- Banner Block ---
    acf_register_block_type(array(
      'name' => 'banner-block',
      'title' => __('Banner Block'),
      'description' => __('A custom banner block with title, subtitle, and button'),
      'render_template' => get_template_directory() . '/blocks/banner-block.php',
      'category' => 'layout',
      'icon' => 'cover-image',
      'keywords' => array('banner', 'hero', 'call-to-action'),
      'supports' => array('align' => false),
    ));

    // --- Features Block ---
    acf_register_block_type(array(
      'name' => 'features-block',
      'title' => __('Features Block'),
      'description' => __('A block to display feature items'),
      'render_template' => get_template_directory() . '/blocks/features-block.php',
      'category' => 'layout',
      'icon' => 'star-filled',
      'keywords' => array('features', 'services', 'highlights'),
      'supports' => array('align' => false),
    ));

    // --- Testimonial Block ---
    acf_register_block_type(array(
      'name' => 'testimonial-block',
      'title' => __('Testimonial Block'),
      'description' => __('A block to show customer testimonials'),
      'render_template' => get_template_directory() . '/blocks/testimonial-block.php',
      'category' => 'layout',
      'icon' => 'admin-comments',
      'keywords' => array('testimonial', 'reviews', 'feedback'),
      'supports' => array('align' => false),
    ));

    // --- Form Block ---
    acf_register_block_type(array(
      'name' => 'form-block',
      'title' => __('Form Block'),
      'description' => __('A custom contact or subscription form block'),
      'render_template' => get_template_directory() . '/blocks/form-block.php',
      'category' => 'layout',
      'icon' => 'email',
      'keywords' => array('form', 'contact', 'subscribe'),
      'supports' => array('align' => false),
    ));

  }
}
