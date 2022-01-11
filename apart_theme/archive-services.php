<?php
/*
 * The template for displaying services archive page
 */

get_header();

$title = get_the_archive_title();
?>

<?php if (have_posts()) : ?>

	<main class="site-main archivepage">
		<section class="services wrapper">
			<h1 class="page-title"><?php echo $title; ?></h1>

			<div class="services__cards">

				<?php while (have_posts()) : ?>
					<?php

					the_post();
					get_template_part('template-parts/content/servicecard');

					?>
				<?php endwhile; ?>
			</div>
		</section>

		<?php get_template_part('template-parts/loop/pagination'); ?>
	</main>

<?php else : ?>

	<?php get_template_part('template-parts/content/content-none'); ?>

<?php endif; ?>

<?php get_footer(); ?>