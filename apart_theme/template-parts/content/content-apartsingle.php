<?php
/*
 * Template part for displaying single apartment content
 */
?>

<?php
$apartID = get_the_ID();
?>

<div class="apartsingle__gallery">
	This is gallery
</div>

<header class="apartsingle__header">
	<h1 class="apartsingle__title">
		<?php echo get_the_title(); ?>
	</h1>

	<p class="apartsingle__snippet">
		<?php echo carbon_get_post_meta($apartID, 'post_snippet'); ?>
	</p>
</header>

<div class="apartsingle__content">
	<?php the_content(); ?>
</div>

<aside class="apartsingle__aside">
	This is aside
</aside>