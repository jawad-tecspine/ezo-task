<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

define('SAM_NEWSLETTER_TABLE', 'sam_newsletter');

global $wpdb;
$table_name = $wpdb->prefix . SAM_NEWSLETTER_TABLE;
$wpdb->query("DROP TABLE IF EXISTS {$table_name}");
