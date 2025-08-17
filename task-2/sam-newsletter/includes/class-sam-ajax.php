<?php
if (!defined('ABSPATH')) {
    exit;
}

class SAM_Newsletter_AJAX
{

    public function __construct()
    {
        add_action('wp_ajax_sam_newsletter_subscribe', [$this, 'subscribe']);
        add_action('wp_ajax_nopriv_sam_newsletter_subscribe', [$this, 'subscribe']);
    }

    /**
     * Handle newsletter subscription AJAX request
     */
    public function subscribe()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . SAM_NEWSLETTER_TABLE;

        $name = sanitize_text_field($_POST['name'] ?? '');
        $email = sanitize_email($_POST['email'] ?? '');
        $timestamp = current_time('mysql');

        if (empty($name) || empty($email)) {
            wp_send_json_error(['message' => 'Name and Email are required.']);
        }

        // ✅ Check for duplicate email
        $exists = $wpdb->get_var(
            $wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE email = %s", $email)
        );

        if ($exists > 0) {
            wp_send_json_error(['message' => 'This email is already subscribed.']);
        }

        $inserted = $wpdb->insert(
            $table_name,
            [
                'name' => $name,
                'email' => $email,
                'created_at' => $timestamp,
            ],
            ['%s', '%s', '%s']
        );

        if ($inserted) {
            wp_send_json_success(['message' => 'You have successfully subscribed.']);
        } else {
            wp_send_json_error(['message' => 'Database error. Please try again.']);
        }
    }
}
