<?php
/*
 * The template for displaying apartments archive page
 */

get_header();

$title = get_the_archive_title();
// $description = get_the_archive_description();
?>

<?php if (have_posts()) : ?>
	<main class="site-main ">
		<section class="apartments wrapper">
			<h1 class="page-title"><?php echo $title; ?></h1>

			<div class="apartments__cards">

				<?php while (have_posts()) : ?>
					<?php

					the_post();
					get_template_part('template-parts/content/apartcard');

					?>
				<?php endwhile; ?>
			</div>
		</section>
	</main>


<?php else : ?>
	<?php get_template_part('template-parts/content/content-none'); ?>
<?php endif; ?>

<?php get_footer(); ?>