<?php
/**
 * Plugin Name:       SAM Newsletter
 * Description:       Collect and manage newsletter subscriptions via a Gutenberg block with AJAX, built for SaaS-grade WordPress setups.
 * Version:           1.0.0
 * Author:            Jawad Zahid
 * Text Domain:       sam-newsletter
 * Requires at least: 6.0
 * Requires PHP:      7.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('SAM_NEWSLETTER_VERSION', '1.0.0');
define('SAM_NEWSLETTER_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('SAM_NEWSLETTER_PLUGIN_URL', plugin_dir_url(__FILE__));
define('SAM_NEWSLETTER_TABLE', 'sam_newsletter');

// Includes
include_once SAM_NEWSLETTER_PLUGIN_DIR . 'includes/class-sam-activator.php';
include_once SAM_NEWSLETTER_PLUGIN_DIR . 'includes/class-sam-deactivator.php';
include_once SAM_NEWSLETTER_PLUGIN_DIR . 'includes/class-sam-admin.php';
include_once SAM_NEWSLETTER_PLUGIN_DIR . 'includes/class-sam-newsletter-block.php';
include_once SAM_NEWSLETTER_PLUGIN_DIR . 'includes/class-sam-ajax.php';


/**
 * Activation hook
 */
function sam_newsletter_activate()
{
    SAM_Newsletter_Activator::activate();
}
register_activation_hook(__FILE__, 'sam_newsletter_activate');


/**
 * Deactivation hook
 */
function sam_newsletter_deactivate()
{
    SAM_Newsletter_Deactivator::deactivate();
}
register_deactivation_hook(__FILE__, 'sam_newsletter_deactivate');


/**
 * Register block, show admin menu and ajax binding
 */
function sam_newsletter_init()
{
    // Admin page setup
    new SAM_Newsletter_Admin;
    SAM_Newsletter_Block::register_block();
    new SAM_Newsletter_AJAX();
}
add_action('init', 'sam_newsletter_init');