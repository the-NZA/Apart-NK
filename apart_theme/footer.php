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
			<div class="footerwidget">
				<h3 class="footerwidget__title">О нас</h3>

				<p class="footerwidget__text">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
					fugiat veritatis veniam dolorum? Suscipit commodi blanditiis culpa harum libero dolorum, id
					dicta ipsum ex!
				</p>
			</div>

			<div class="footerwidget">
				<h3 class="footerwidget__title">Контакты</h3>

				<ul class="footerwidget__body">
					<li class="footerwidget__grid"><span>Телефон:</span> <a href="tel:<?php echo $sitePhone; ?>"><?php echo $sitePhone; ?></a></li>
					<li class="footerwidget__grid"><span>Email:</span><a href="mailto:<?php echo $siteEmail; ?>"><?php echo $siteEmail; ?></a></li>
				</ul>
			</div>

			<div class="footerwidget">
				<h3 class="footerwidget__title">Меню</h3>

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'footer_menu',
						'container'       => 'nav',
						'container_class' => 'footerwidget',
						'menu_class'      => 'footerwidget__body',
						'echo'            => true,
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					)
				);
				?>
			</div>

			<div class="footerwidget">
				<h3 class="footerwidget__title"><?php echo $siteName; ?></h3>

				<p class="footerwidget__text">
					г. Москва, Пресненская набережная д.12
				</p>
			</div>
		</div>

		<div class="footer__copyright">
			2021 &copy; <a href="<?php echo $siteURL; ?>"><?php echo $siteName; ?></a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>