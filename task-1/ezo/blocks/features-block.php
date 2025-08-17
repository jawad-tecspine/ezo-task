<?php if (get_field('features_heading')): ?>
    <section class="features-section section-padding">
        <div class="container">
            <div class="features-content d-flex flex-column align-items-center">
                <?php if (get_field('features_sub_heading')): ?>
                    <p class="text-light"><?= esc_html(get_field('features_sub_heading')); ?></p>
                <?php endif; ?>
                <h2><?= esc_html(get_field('features_heading')); ?></h2>
                <div class="features-wrapper d-flex justify-content-between gap-4">
                    <?php
                    for ($i = 1; $i <= 3; $i++):
                        $image = get_field("features_box_{$i}_image");
                        $heading = get_field("features_box_{$i}_heading");
                        $excerpt = get_field("features_box_{$i}_excerpt");
                        $placeholder = get_template_directory_uri() . "/assets/images/feature-{$i}.webp";
                        ?>
                        <div class="feature">
                            <div class="feature-image">
                                <a href="">
                                    <img src="<?= esc_url($image ? $image : $placeholder); ?>" alt="feature">
                                </a>
                            </div>
                            <div class="feature-content d-flex flex-column gap-3">
                                <?php if ($heading): ?>
                                    <a href="">
                                        <h4><?= esc_html($heading); ?></h4>
                                    </a>
                                <?php endif; ?>
                                <?php if ($excerpt): ?>
                                    <p><?= esc_html($excerpt); ?></p>
                                <?php endif; ?>
                                <a href="" class="learn-more">
                                    <span>Learn More</span>
                                    <i class="fa-regular fa-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>