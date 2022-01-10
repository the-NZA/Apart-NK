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
			<img src="./image/arrow-down.svg" alt="V">
		</button>
	</section>

	<section class="homepage__aparts wrapper">
		<h2 class="section-title">Наши апартаменты</h2>

		<div class="homepage__cards">
			<?php
			$apartments = get_posts([
				'numberposts' 	=> 6,
				'post_type' 	=> 'apartments',
				'post_status' 	=> 'publish',
				'orderby'	=> 'date',
				'order'		=> 'DESC',
			]);

			// Default apartments image is attachment with ID 24
			$defaultImgURL = wp_get_attachment_image_url(24, 'full');

			foreach ($apartments as $apart) :
			?>
				<article class="apartcard">
					<?php $imgURL = get_the_post_thumbnail_url($apart->ID, 'full'); ?>

					<img src="<?php echo $imgURL ? $imgURL : $defaultImgURL; ?>" alt="<?php echo $apart->post_title; ?>" class="apartcard__image" style="<?php echo !$imgURL ? 'object-fit: contain' : '' ?>">

					<div class="apartcard__body">
						<h3 class="apartcard__title"><?php echo $apart->post_title; ?></h3>

						<p class="apartcard__snippet">
							<?php echo carbon_get_post_meta($apart->ID, 'post_snippet'); ?>
						</p>
					</div>

					<div class="apartcard__footer">
						<a class="apartcard__button button" href="<?php echo get_permalink($apart->ID); ?>">Смотреть</a>
					</div>
				</article>
			<?php
			endforeach;
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
			<article class="servicecard">
				<img src="https://placekitten.com/200/200" alt="Услуга" class="servicecard__image">
				<h3 class="servicecard__title">Название услуги</h3>
				<p class="servicecard__snippet">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
					necessitatibus fuga quos adipisci debitis animi perferendis laboriosam nulla ad. Assumenda
					eveniet nam dolorem aspernatur nostrum?
				</p>
			</article>

			<article class="servicecard">
				<img src="https://placekitten.com/200/200" alt="Услуга" class="servicecard__image">
				<h3 class="servicecard__title">Название услуги</h3>
				<p class="servicecard__snippet">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
					necessitatibus fuga quos adipisci debitis animi perferendis laboriosam nulla ad. Assumenda
					eveniet nam dolorem aspernatur nostrum?
				</p>
			</article>

			<article class="servicecard">
				<img src="https://placekitten.com/200/200" alt="Услуга" class="servicecard__image">
				<h3 class="servicecard__title">Название услуги</h3>
				<p class="servicecard__snippet">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
					necessitatibus fuga quos adipisci debitis animi perferendis laboriosam nulla ad. Assumenda
					eveniet nam dolorem aspernatur nostrum?
				</p>
			</article>

			<article class="servicecard">
				<img src="https://placekitten.com/200/200" alt="Услуга" class="servicecard__image">
				<h3 class="servicecard__title">Название услуги</h3>
				<p class="servicecard__snippet">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
					necessitatibus fuga quos adipisci debitis animi perferendis laboriosam nulla ad. Assumenda
					eveniet nam dolorem aspernatur nostrum?
				</p>
			</article>

			<article class="servicecard">
				<img src="https://placekitten.com/200/200" alt="Услуга" class="servicecard__image">
				<h3 class="servicecard__title">Название услуги</h3>
				<p class="servicecard__snippet">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
					necessitatibus fuga quos adipisci debitis animi perferendis laboriosam nulla ad. Assumenda
					eveniet nam dolorem aspernatur nostrum?
				</p>
			</article>

		</div>
	</section>

	<section class="homepage__map wrapper">

		<iframe class="homepage__map_frame" src="https://yandex.ru/map-widget/v1/?um=constructor%3A387157d010071563fc7b7862b559e665f6121bc29f47c389e8c50d61ad11e43d&amp;source=constructor" frameborder="0">
		</iframe>
	</section>
</main>
<!--Site main END-->

<?php get_footer();
