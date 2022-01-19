<?php

/**
 * The template for displaying the footer.
 * Contains the closing of the tags and <footer>
 */

$siteName = get_bloginfo('name');
$siteURL = get_bloginfo('url');
$sitePhone = carbon_get_theme_option('aprt_phone_number');
$siteEmail = carbon_get_theme_option('aprt_email');
?>
<div class="site-go-booking">
	<a href="<?php echo BOOKING_URL; ?>">Перейти к бронированию</a>
</div>

<footer class="site-footer">
	<div class="footer wrapper">
		<div class="footer__widgets">
			<?php dynamic_sidebar('aprt_footer_1'); ?>

			<?php dynamic_sidebar('aprt_footer_2'); ?>

			<?php dynamic_sidebar('aprt_footer_3'); ?>

			<?php dynamic_sidebar('aprt_footer_4'); ?>
		</div>

		<div class="footer__copyright">
			2021 &copy; <a href="<?php echo $siteURL; ?>"><?php echo $siteName; ?></a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>