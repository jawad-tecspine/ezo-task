<?php

/**
 * Index Template
 */

get_header(); ?>

<div class="container py-5">

	<?php if (is_home() && !is_front_page() && !empty(single_post_title('', false))): ?>
		<header class="page-header alignwide">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php endif; ?>

	<?php if (have_posts()):
		while (have_posts()):
			the_post(); ?>
			<?php the_post_thumbnail() ?>
			<h3><?php the_title(); ?></h3>

			<?php the_content(); ?>
			<?php wp_link_pages(); ?>

		<?php endwhile; ?>

		<?php
		if (get_next_posts_link()) {
			next_posts_link();
		}
		?>
		<?php
		if (get_previous_posts_link()) {
			previous_posts_link();
		}
		?>

	<?php else: ?>

		<h2>No posts found. :(</h2>

	<?php endif; ?>

</div>

<?php
get_footer();