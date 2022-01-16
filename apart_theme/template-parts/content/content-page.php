<?php
/*
 * Template part for displaying general page content in page.php
 */
?>

<?php
$pageID = get_the_ID();
$pageImg = get_the_post_thumbnail_url($pageID, 'full');
?>

<main class="site-main singlepage">
	<header class="singlepage__header" style="<?php echo $pageImg ? 'background-image: url(' . $pageImg . ');' : ''; ?>">

		<div class="singlepage__headerwrapper">
			<h2 class="singlepage__title"><?php echo get_the_title(); ?></h2>

			<p class="singlepage__snippet"><?php echo carbon_get_post_meta($pageID, 'post_snippet'); ?></p>
		</div>

	</header>

	<article id="post-<?php echo $pageID; ?>" <?php post_class('singlepage__article wrapper'); ?>>
		<?php the_content(); ?>
	</article>
</main>