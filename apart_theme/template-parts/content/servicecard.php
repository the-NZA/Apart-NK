<?php
/*
 * Template part for displaying single service card
 */
?>

<article class="servicecard">
	<?php
	$serviceID = get_the_ID();
	$serviceTitle = get_the_title();
	$imgURL = get_the_post_thumbnail_url($serviceID, 'full');
	?>

	<img src="<?php echo $imgURL; ?>" alt="<?php echo $serviceTitle; ?>" class="servicecard__image">

	<h3 class="servicecard__title"><?php echo $serviceTitle; ?></h3>

	<p class="servicecard__snippet">
		<?php echo carbon_get_post_meta($serviceID, 'post_snippet'); ?>
	</p>
</article>