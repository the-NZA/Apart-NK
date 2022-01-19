<?php

/**
 * The template for displaying the homepage.
 * Template name: Homepage
 */

// get_header(null, ["additional_body_classes" => "abla"]);
get_header(); ?>

<!--Site main-->
<main class="site-main homepage">
	<?php
	$pageID = get_the_ID();
	$heroImg = get_the_post_thumbnail_url($pageID, 'full');
	$heroTitle = carbon_get_post_meta($pageID, 'homehero_title');
	$heroSnippet = carbon_get_post_meta($pageID, 'homehero_snippet');
	?>

	<section class="homepage__hero herosection" style="<?php echo $heroImg ? 'background-image: url(' . $heroImg . ')' : '' ?>">
		<div class="herosection__wrapper">

			<h1 class="herosection__title"><?php echo $heroTitle; ?></h1>
			<p class="herosection__subtitle"><?php echo $heroSnippet; ?></p>
		</div>

		<button class="button herosection__btn">
			<img src="/image/arrow-down.svg" alt="V">
		</button>
	</section>

	<section class="homepage__aparts wrapper">
		<h2 class="section-title">Наши апартаменты</h2>

		<div class="homepage__cards">
			<?php
			global $post;

			$apartments = get_posts([
				'numberposts' 	 => 6,
				'post_type' 	 => 'apartments',
				'post_status' 	 => 'publish',
				'orderby'	 => 'date',
				'order'		 => 'DESC',
				'posts_per_page' => -1,
			]);

			foreach ($apartments as $post) {
				setup_postdata($post);

				get_template_part('template-parts/content/apartcard');
			}

			wp_reset_postdata();
			?>
		</div>

		<div class="homepage__showall">
			<a href="<?php echo get_post_type_archive_link('apartments'); ?>" class="button button-outline button-large">
				Смотреть все
			</a>
		</div>
	</section>

	<section class="homepage__services wrapper">
		<h2 class="section-title">Дополнительные услуги</h2>

		<div class="homepage__servicecards">
			<?php
			global $post;

			$services = get_posts([
				'numberposts' 	 => -1,
				'post_type' 	 => 'services',
				'post_status' 	 => 'publish',
				'orderby'	 => 'date',
				'order'		 => 'DESC',
				'posts_per_page' => -1,
			]);

			foreach ($services as $post) {
				setup_postdata($post);

				get_template_part('template-parts/content/servicecard');
			}

			wp_reset_postdata();
			?>
		</div>
	</section>

	<section class="homepage__map wrapper">
		<?php $mapURL = carbon_get_theme_option('map_url'); ?>

		<iframe class="homepage__map_frame" src="<?php echo $mapURL ? $mapURL : ''; ?>" frameborder="0">
		</iframe>
	</section>
</main>
<!--Site main END-->

<?php get_footer();
