<?php if (get_field('banner_heading')): ?>
    <section class="banner-section section-padding">
        <div class="container">
            <div class="banner-content d-flex align-items-center gap-4">
                <div class="banner-content-section d-flex flex-column justify-content-between gap-4">
                    <?php if (get_field('banner_sub_heading')): ?>
                        <p class="text-light"><?= esc_html(get_field('banner_sub_heading')); ?></p>
                    <?php endif; ?>

                    <h1><?= esc_html(get_field('banner_heading')); ?></h1>

                    <?php if (get_field('banner_sub_heading')): ?>
                        <p><?= esc_html(get_field('banner_text')); ?></p>
                    <?php endif; ?>

                    <div class="banner-buttons d-flex gap-3">
                        <?php if (get_field('banner_pricing_button_text')): ?>
                            <a href="" class="btn btn-primary"><?= esc_html(get_field('banner_pricing_button_text')); ?></a>
                        <?php endif; ?>
                        <?php if (get_field('banner_quote_button')): ?>
                            <a href="" class="btn btn-secondary"><?= esc_html(get_field('banner_quote_button')); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="banner-image-section">
                    <?php
                    $image = get_field('logo');
                    $placeholder = get_template_directory_uri() . '/assets/images/banner-image.png';
                    ?>
                    <img src="<?= esc_url($image ? $logo : $placeholder); ?>" alt="banner-image">
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>