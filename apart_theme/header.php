<?php
/*
* The header for current theme.
* Displays all of <head> section and <header>
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo('charset'); ?>">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body class="site-body">
	<header class="site-header">
		<div class="header wrapper">

			<div class="header__logo">
				<a href="<?php echo get_home_url(); ?>">
					<?php echo get_bloginfo("name"); ?>
				</a>
			</div>

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'header_menu',
					'container'       => 'nav',
					'container_class' => 'header__nav hnav',
					'menu_class'      => 'hnav__list',
					'echo'            => true,
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'li_class'	  => 'hnav__item',
				)
			);
			?>

		</div>
	</header>