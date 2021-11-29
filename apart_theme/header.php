<?php
/*
* The header for current theme.
* Displays all of <head> section and <header>
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body class="site-body">
	<header class="site-header">
		<div class="header wrapper">
			<div class="header__logo">
				<a href="#">
					Apart-NK
				</a>
			</div>

			<nav class="header__nav hnav">
				<ul class="hnav__list">
					<li class="hnav__item">
						<a href="/"> Главная </a>
					</li>
					<li class="hnav__item">
						<a href="/apartments.html"> Апартаменты </a>
					</li>
					<li class="hnav__item">
						<a href="#"> Забронировать </a>
					</li>
					<li class="hnav__item">
						<a href="/services.html"> Услуги </a>
					</li>
					<li class="hnav__item">
						<a href="#"> Контакты </a>
					</li>
				</ul>
			</nav>
		</div>
	</header>