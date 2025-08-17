<?php if (get_field('testimonial_heading')): ?>
    <section class="testimonial-section section-padding">
        <div class="container">
            <div class="testimonial-content d-flex flex-column align-items-center">
                <?php if (get_field('testimonial_sub_heading')): ?>
                    <p class="text-light"><?= esc_html(get_field('testimonial_sub_heading')); ?></p>
                <?php endif; ?>
                <h2><?= esc_html(get_field('testimonial_heading')); ?></h2>
                <div class="testimonial-wrapper d-flex align-items-center">
                    <div class="testimonial-image-section">
                        <?php
                        $image = get_field('logo');
                        $placeholder = get_template_directory_uri() . '/assets/images/testimonial-image.jpg';
                        ?>
                        <img src="<?= esc_url($image ? $logo : $placeholder); ?>" alt="testimonial-image">
                    </div>
                    <?php if (get_field('testimonial_user_statement')): ?>
                        <div class="testimonial-content-section">
                            <h4><?= esc_html(get_field('testimonial_user_statement')); ?></h4>
                            <div class="testimonial-meta">
                                <?php if (get_field('testimonial_user_name')): ?>
                                    <span class="name"><?= esc_html(get_field('testimonial_user_name')); ?>,</span>
                                <?php endif; ?>
                                <?php if (get_field('testimonial_user_company')): ?>
                                    <span class="company"><?= esc_html(get_field('testimonial_user_company')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>