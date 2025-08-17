<header>
    <div class="container">
        <div class="header-content d-flex justify-content-between align-items-center">

            <?php
            $logo = get_field('logo');
            $placeholder = get_template_directory_uri() . '/assets/images/header-logo.webp';
            ?>

            <div class="header-logo">
                <a href="<?= esc_url(site_url()); ?>">
                    <img src="<?= esc_url($logo ? $logo : $placeholder); ?>" alt="header-logo">
                </a>
            </div>

            <div class="header-menu">
                <nav class="d-flex justify-content-between align-items-center gap-4">
                    <?php if (get_field('menu_item_1')): ?>
                        <a href=""><?= esc_html(get_field('menu_item_1')); ?></a>
                    <?php endif; ?>

                    <?php if (get_field('menu_item_2')): ?>
                        <a href=""><?= esc_html(get_field('menu_item_2')); ?></a>
                    <?php endif; ?>

                    <?php if (get_field('menu_item_3')): ?>
                        <a href=""><?= esc_html(get_field('menu_item_3')); ?></a>
                    <?php endif; ?>

                    <?php if (get_field('menu_item_4')): ?>
                        <a href=""><?= esc_html(get_field('menu_item_4')); ?></a>
                    <?php endif; ?>
                </nav>
                <i class="fa-solid fa-bars"></i>
            </div>

        </div>
    </div>
</header>