<?php
/*
 * Pagination - Show numbered pagination inside loop
 */
?>

<?php
$pagiLinks = paginate_links([
	'prev_next'	=> true,
	'prev_text'	=> "&slarr; Назад",
	'next_text'	=> "Вперед &srarr;",
	'end_size'	=> 2,
	'mid_size'	=> 2,
	'type'		=> 'array',
]);
?>

<?php if ( $pagiLinks && count($pagiLinks) > 1) : ?>

	<nav class="site-pagination apartpagi wrapper">

		<ul class="apartpagi__list">

			<?php foreach ($pagiLinks as $link) : ?>

				<li class="apartpagi__item">
					<?php echo $link; ?>
				</li>

			<?php endforeach; ?>
		</ul>
	</nav>

<?php endif; ?>