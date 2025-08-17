<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class SAM_Newsletter_Activator {
    public static function activate() {
        global $wpdb;

        $table_name = $wpdb->prefix . SAM_NEWSLETTER_TABLE;
        $charset_collate = $wpdb->get_charset_collate();

        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $sql = "CREATE TABLE {$table_name} (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            name VARCHAR(191) NOT NULL,
            email VARCHAR(191) NOT NULL,
            created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (id),
            UNIQUE KEY email (email)
        ) {$charset_collate};";

        dbDelta( $sql );
    }
}
