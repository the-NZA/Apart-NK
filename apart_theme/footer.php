<?php

/**
 * The template for displaying the footer.
 * Contains the closing of the tags and <footer>
 */
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
					<li class="footerwidget__grid"><span>Телефон:</span><a href="#">89998887766</a></li>
					<li class="footerwidget__grid"><span>Email:</span><a href="#">test@test.ru</a></li>
				</ul>
			</div>

			<div class="footerwidget">
				<h3 class="footerwidget__title">Меню</h3>
				<ul class="footerwidget__body">
					<li><a href="#">Главная</a></li>
					<li><a href="#">Апартаменты</a></li>
					<li><a href="#">Забронировать</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Услуги</a></li>
				</ul>
			</div>

			<div class="footerwidget">
				<h3 class="footerwidget__title">Apark-NK</h3>
				<p class="footerwidget__text">
					г. Москва, Пресненская набережная д.12
				</p>
			</div>
		</div>

		<div class="footer__copyright">
			2021 &copy; <a href="#">Apark-NK</a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>