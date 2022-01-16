<?php
/*
 * The template for displaying all single apartments
 */
?>

<?php get_header(); ?>

<main class="apartsingle wrapper">
	<?php
	while (have_posts()) {
		the_post();

		get_template_part('template-parts/content/content-apartsingle');
	}
	?>
</main>

<?php get_footer(); ?>