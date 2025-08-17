<?php
if (!defined('ABSPATH')) {
    exit;
}

class SAM_Newsletter_Block
{
    public static function init()
    {
        self::register_block();
    }

    public static function register_block()
    {
        // --- FRONTEND + EDITOR CSS ---
        wp_register_style(
            'sam-newsletter-block',
            SAM_NEWSLETTER_PLUGIN_URL . 'assets/css/newsletter-block.css',
            array(),
            SAM_NEWSLETTER_VERSION
        );

        // --- TOASTR ---
        wp_register_script(
            'toastr',
            'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js',
            array('jquery'),
            null,
            true
        );
        wp_register_style(
            'toastr',
            'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css',
            array(),
            null
        );

        // --- FRONTEND ONLY JS ---
        wp_register_script(
            'sam-newsletter-submission',
            SAM_NEWSLETTER_PLUGIN_URL . 'assets/js/newsletter-submission.js',
            array('jquery', 'toastr'),
            SAM_NEWSLETTER_VERSION,
            true
        );

        wp_localize_script(
            'sam-newsletter-submission',
            'samNewsletter',
            array(
                'ajax_url' => admin_url('admin-ajax.php'),
            )
        );

        // --- EDITOR ONLY assets ---
        wp_register_script(
            'sam-newsletter-editor-script',
            SAM_NEWSLETTER_PLUGIN_URL . 'assets/js/newsletter-block.js',
            array('wp-blocks', 'wp-element', 'wp-components', 'wp-i18n', 'wp-editor', 'wp-block-editor'),
            SAM_NEWSLETTER_VERSION,
            true
        );

        // --- Block Registration ---
        register_block_type('sam/newsletter', array(
            'editor_script' => 'sam-newsletter-editor-script',
            'style' => 'sam-newsletter-block',
            'script' => 'sam-newsletter-submission',
            'render_callback' => array(__CLASS__, 'render_block'),
        ));
    }

    public static function render_block($attributes = array(), $content = '')
    {
        wp_enqueue_style('toastr');
        wp_enqueue_script('toastr');

        ob_start();
        ?>
        <div class="sam-newsletter-block-section">
            <div class="sam-newsletter-block">
                <h5 class="sam-newsletter-subtitle">Get the latest feeds in your inbox</h5>
                <h2 class="sam-newsletter-title">
                    Sign up for email to enjoy the latest trends.
                </h2>
                <form class="sam-newsletter-form" novalidate>
                    <div class="form-group">
                        <label for="sam-newsletter-name">Enter your name here</label>
                        <input type="text" id="sam-newsletter-name" placeholder="John Doe" />
                    </div>
                    <div class="form-group">
                        <label for="sam-newsletter-email">Enter your email here</label>
                        <input type="email" id="sam-newsletter-email" placeholder="example@email.com" />
                    </div>
                    <button type="submit" class="sam-newsletter-submit">Sign-up</button>
                </form>
                <div class="loader-wrapper" style="display:none;">
                    <div class="loader"></div>
                </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}
