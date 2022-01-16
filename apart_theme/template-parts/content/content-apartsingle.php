<?php
/*
 * Template part for displaying single apartment content
 */
?>

<?php
$apartID = get_the_ID();
?>

<div class="apartsingle__gallery">
	<?php $apGallery = carbon_get_post_meta($apartID, 'apartprop_gallery'); ?>

	<?php if (count($apGallery) > 0) : ?>
		<div class="apartgallery">
			<?php foreach ($apGallery as $imgID) : ?>
				<?php
				$imgURL = wp_get_attachment_url($imgID);
				?>

				<div class="apartgallery__item">
					<img src="<?php echo $imgURL; ?>">
				</div>
			<?php endforeach; ?>
		</div>


	<?php else : ?>

		This is gallery

	<?php endif; ?>
</div>

<header class="apartsingle__header">
	<h1 class="apartsingle__title">
		<?php echo get_the_title(); ?>
	</h1>

	<p class="apartsingle__snippet">
		<?php echo carbon_get_post_meta($apartID, 'post_snippet'); ?>
	</p>
</header>

<?php
// Get apartment properties

$apArea = carbon_get_post_meta($apartID, 'apartprop_area');
$apRooms = carbon_get_post_meta($apartID, 'apartprop_rooms');
$apBeds = carbon_get_post_meta($apartID, 'apartprop_beds');
$apBaths = carbon_get_post_meta($apartID, 'apartprop_baths');
$apView = carbon_get_post_meta($apartID, 'apartprop_view');
?>

<?php if ($apArea || $apRooms || $apBeds || $apBaths || $apView) : ?>

	<section class="apartsingle__properties apartprops">
		<h4 class="apartprops__title">Конфигурация</h4>

		<div class="apartprops__list">

			<?php if ($apArea) : ?>
				<div class="apartprops__item propitem">
					<div class="propitem__content">
						М<sup>2</sup>
					</div>

					<div class="propitem__icon">
						<?php echo $apArea; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if ($apRooms) : ?>
				<div class="apartprops__item propitem">
					<div class="propitem__content">
						Комнат
					</div>

					<div class="propitem__icon">
						<?php echo $apRooms; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if ($apBeds) : ?>
				<div class="apartprops__item propitem">
					<div class="propitem__content">
						Кроватей
					</div>

					<div class="propitem__icon">
						<?php echo $apBeds; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if ($apBaths) : ?>
				<div class="apartprops__item propitem">
					<div class="propitem__content">
						Ванных
					</div>

					<div class="propitem__icon">
						<?php echo $apBaths; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if ($apView) : ?>
				<div class="apartprops__item propitem">
					<div class="propitem__content">
						Вид на
					</div>

					<div class="propitem__icon">
						<?php echo $apView; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

<div class="apartsingle__content">
	<?php the_content(); ?>
</div>

<aside class="apartsingle__aside">
	<h4>ЗДЕСЬ ВИДЖЕТ БРОНИРОВАНИЯ</h4>
</aside>