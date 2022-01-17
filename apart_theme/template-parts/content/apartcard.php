<?php
/*
 * Template part for displaying single apartment card
 */
?>

<article class="apartcard">
	<?php
	$apartID = get_the_ID();
	$apartImg = get_the_post_thumbnail_url($apartID, 'full');
	$apartTitle = get_the_title();
	$hasImg = $apartImg ? true : false;
	?>
	<img src="<?php echo $hasImg ? $apartImg : DEFAULT_APART_IMG_URL; ?>" alt="<?php echo $apartTitle; ?>" class="apartcard__image" style="<?php echo !$hasImg ? 'object-fit: contain' : '';?>">

	<div class="apartcard__body">
		<h3 class="apartcard__title"><?php echo $apartTitle; ?></h3>

		<p class="apartcard__snippet">
			<?php echo carbon_get_post_meta($apartID, 'post_snippet'); ?>
		</p>
	</div>

	<div class="apartcard__footer">
		<a class="apartcard__button button" href="<?php echo get_post_permalink(); ?>">Смотреть</a>
	</div>

</article>