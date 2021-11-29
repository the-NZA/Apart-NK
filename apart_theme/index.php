<?php
/**
 * The main template file.
 */

get_header();?>

<main class="site-main homepage">
	<section class="homepage__hero herosection">
		<div class="herosection__wrapper">
			<h1 class="herosection__title">Apart-NK – здесь мощный заголовок</h1>
			<p class="herosection__subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium
				deleniti architecto amet unde eligendi et aspernatur fuga, quibusdam minima rem similique ad
				adipisci. Praesentium, obcaecati.</p>
		</div>

		<button class="button herosection__btn">
			<img src="./image/arrow-down.svg" alt="V">
		</button>
	</section>

	<section class="homepage__aparts wrapper">
		<h2 class="section-title">Наши апартаменты</h2>

		<div class="homepage__cards">
			<article class="apartcard">
				<img src="https://placekitten.com/640/360" alt="bla bla" class="apartcard__image">
				<div class="apartcard__body">
					<h3 class="apartcard__title">Название апартамента</h3>
					<p class="apartcard__snippet">
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, totam.
						Suscipit, nesciunt facilis voluptates vero alias maxime non
					</p>
					<button class="apartcard__button">Забронировать</button>
				</div>
			</article>

			<article class="apartcard">
				<img src="https://placekitten.com/640/360" alt="bla bla" class="apartcard__image">
				<div class="apartcard__body">
					<h3 class="apartcard__title">Название апартамента</h3>
					<p class="apartcard__snippet">
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, totam.
						Suscipit, nesciunt facilis voluptates vero alias maxime non
					</p>
					<button class="apartcard__button">Забронировать</button>
				</div>
			</article>

			<article class="apartcard">
				<img src="https://placekitten.com/640/360" alt="bla bla" class="apartcard__image">
				<div class="apartcard__body">
					<h3 class="apartcard__title">Название апартамента</h3>
					<p class="apartcard__snippet">
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, totam.
						Suscipit, nesciunt facilis voluptates vero alias maxime non
					</p>
					<button class="apartcard__button">Забронировать</button>
				</div>
			</article>

			<article class="apartcard">
				<img src="https://placekitten.com/640/360" alt="bla bla" class="apartcard__image">
				<div class="apartcard__body">
					<h3 class="apartcard__title">Название апартамента</h3>
					<p class="apartcard__snippet">
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, totam.
						Suscipit, nesciunt facilis voluptates vero alias maxime non
					</p>
					<button class="apartcard__button">Забронировать</button>
				</div>
			</article>
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
		
		<iframe class="homepage__map_frame"
			src="https://yandex.ru/map-widget/v1/?um=constructor%3A387157d010071563fc7b7862b559e665f6121bc29f47c389e8c50d61ad11e43d&amp;source=constructor"
			frameborder="0">
		</iframe>
	</section>
</main>


<div class="site-go-booking">
	<a href="#">Перейти к бронированию</a>
</div>

<?php get_footer();