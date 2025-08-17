<?php
if (!defined('ABSPATH')) {
    exit;
}

class SAM_Newsletter_Admin
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'register_menu'));
    }

    public function register_menu()
    {
        add_menu_page(
            __('SAM Newsletter', 'sam-newsletter'),
            __('SAM Newsletter', 'sam-newsletter'),
            'manage_options',
            'sam-newsletter',
            array($this, 'render_admin_page'),
            'dashicons-email',
            26
        );
    }

    public function render_admin_page()
    {
        if (!current_user_can('manage_options')) {
            wp_die(__('You do not have sufficient permissions to access this page.', 'sam-newsletter'));
        }

        global $wpdb;
        $table_name = $wpdb->prefix . 'sam_newsletter';

        $search = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
        if (!empty($search)) {
            $like = '%' . $wpdb->esc_like($search) . '%';
            $rows = $wpdb->get_results(
                $wpdb->prepare(
                    "SELECT * FROM {$table_name}
                     WHERE name LIKE %s OR email LIKE %s OR created_at LIKE %s
                     ORDER BY created_at DESC",
                    $like,
                    $like,
                    $like
                ),
                ARRAY_A
            );
        } else {
            $rows = $wpdb->get_results("SELECT * FROM {$table_name} ORDER BY created_at DESC", ARRAY_A);
        }
        ?>

        <div class="wrap">
            <h1><?php esc_html_e('SAM Newsletter Subscriptions', 'sam-newsletter'); ?></h1>

            <!-- Search filter -->
            <form method="get">
                <input type="hidden" name="page" value="sam-newsletter" />
                <p class="search-box">
                    <label class="screen-reader-text" for="subscription-search-input">
                        <?php esc_html_e('Search Subscriptions:', 'sam-newsletter'); ?>
                    </label>
                    <input type="search" id="subscription-search-input" name="s" value="<?php echo esc_attr($search); ?>" />
                    <input type="submit" id="search-submit" class="button"
                        value="<?php esc_attr_e('Search Subscriptions', 'sam-newsletter'); ?>">
                </p>
            </form>

            <table class="wp-list-table widefat fixed striped table-view-list">
                <thead>
                    <tr>
                        <th><?php esc_html_e('Sr. No', 'sam-newsletter'); ?></th>
                        <th><?php esc_html_e('Name', 'sam-newsletter'); ?></th>
                        <th><?php esc_html_e('Email', 'sam-newsletter'); ?></th>
                        <th><?php esc_html_e('Created', 'sam-newsletter'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($rows)): ?>
                        <?php $sr_no = 1; ?>
                        <?php foreach ($rows as $row): ?>
                            <tr>
                                <td><?php echo esc_html($sr_no++); ?></td>
                                <td><?php echo esc_html($row['name']); ?></td>
                                <td><code><?php echo esc_html($row['email']); ?></code></td>
                                <td><?php echo esc_html($row['created_at']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4"><?php esc_html_e('No subscriptions found.', 'sam-newsletter'); ?></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php
    }
}
