<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// * Register theme options page
add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	Container::make('theme_options', __('Theme Options'))
		->add_fields([
			Field::make('text', 'aprt_phone_number', 'Номер телефона')
				->set_attribute('placeholder', 'Введите номер телефона')
				->set_attribute('type', 'tel')
				// ->set_attribute('pattern', '([\+]*[7-8]{1}\s?[\(]*9[0-9]{2}[\)]*\s?\d{3}[-]*\d{2}[-]*\d{2})')
				->set_width(50)
				->set_required(true),
			Field::make('text', 'aprt_email', 'Email')
				->set_attribute('placeholder', 'Введите email')
				->set_attribute('type', 'email')
				// ->set_attribute('pattern', '([\+]*[7-8]{1}\s?[\(]*9[0-9]{2}[\)]*\s?\d{3}[-]*\d{2}[-]*\d{2})')
				->set_width(50)
				->set_required(true),
			Field::make('text', 'map_url', 'Ссылка на виджет карт')
				->set_attribute('placeholder', 'Вставьте ссылку на готовый виджет яндекс карт')
				->set_attribute('type', 'url')
				->set_required(true),
		]);
}


// * Register theme options page
add_action('carbon_fields_register_fields', 'posts_custom_fields');
function posts_custom_fields()
{
	// * Apartments properties
	Container::make('post_meta', 'Конфигурация апартамента')
		->where('post_type', '=', 'apartments')
		->add_fields([
			Field::make('media_gallery', 'apartprop_gallery', 'Галлерея изображений')
				->set_type(['image', 'video'])
				->set_duplicates_allowed(false),
			Field::make('text', 'apartprop_area', 'Площадь')
				->set_width(50)
				->set_attribute('type', 'number')
				->set_attribute('min', '0')
				->set_attribute('placeholder', 'Общая площадь помещения'),
			Field::make('text', 'apartprop_rooms', 'Количество комнат')
				->set_width(50)
				->set_attribute('type', 'number')
				->set_attribute('min', '0')
				->set_attribute('placeholder', 'Общее количество комнат'),
			Field::make('text', 'apartprop_beds', 'Количество кроватей')
				->set_width(50)
				->set_attribute('type', 'number')
				->set_attribute('min', '0')
				->set_attribute('placeholder', 'Общее количество спальных мест'),
			Field::make('text', 'apartprop_baths', 'Количество ванных комнат')
				->set_width(50)
				->set_attribute('type', 'number')
				->set_attribute('min', '0')
				->set_attribute('placeholder', 'Общее количество ванных комнат'),
			Field::make('text', 'apartprop_view', 'На что выходят окна')
				->set_width(50)
				->set_attribute('placeholder', 'Введите на что выходят окна (город, парк, реку или что-то другое)'),

		]);

	// * All pages, posts, services and apartments 
	// * except homepage templated
	Container::make('post_meta', 'Дополнительные настройки')
		->where('post_type', 'IN', ['page', 'post', 'services', 'apartments'])
		->where('post_template', '!=', 'template-homepage.php')
		->add_fields(array(
			Field::make('textarea', 'post_snippet', 'Описание')
				->set_attribute('placeholder', 'Описание для отображения на сайте')
				->set_required(true),
		));

	// * Homepage templated fields
	Container::make('post_meta', 'Дополнительные настройки')
		->where('post_type', '=', 'page')
		->where('post_template', '=', 'template-homepage.php')
		->add_fields(array(
			Field::make('text', 'homehero_title', 'Заголовок')
				->set_attribute('placeholder', 'Заголовок для стартового экрана')
				->set_required(true),
			Field::make('textarea', 'homehero_snippet', 'Описание')
				->set_attribute('placeholder', 'Описание для стартового экрана')
				->set_required(true),
		));
}

// * Boot Carbon Fields
add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once('vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}

// * Create custom carbon widgets
function load_custom_widgets()
{
	require_once "include/widgets/MenuWithHeader.php";
	require_once "include/widgets/FooterContacts.php";
	// require_once "include/widgets/SocialLinksWidget.php";

	register_widget('MenuWithHeaderWidget');
	register_widget('FooterContactsWidget');
	// register_widget('SocialLinksWidget');
}

// * Register custom widgets
add_action('widgets_init', 'load_custom_widgets');

// * Add Theme Styles and Scripts
add_action("wp_enqueue_scripts", function () {
	wp_enqueue_style('aprt-styles', get_stylesheet_directory_uri() . '/assets/main.css');
	wp_enqueue_script('aprt-scripts', get_stylesheet_directory_uri() . '/assets/main.js', array(), null, true);

	if (is_singular('apartments')) {
		wp_enqueue_style('aprt-slick-styles', get_stylesheet_directory_uri() . '/assets/slick/slick.css');
		wp_enqueue_script('aprt-slick-scripts', get_stylesheet_directory_uri() . '/assets/slick/slick.min.js', ['jquery'], null, false);
	}
});

// * Add theme support for some wordpress built-in features
add_theme_support('title-tag');
add_theme_support('html5', [
	'comment-list',
	'comment-form',
	'search-form',
	'gallery',
	'caption',
	'script',
	'style',
]);
add_theme_support('post-thumbnails');

//* Add custom post types
add_action('init', 'register_post_types');
function register_post_types()
{
	register_post_type('services', [
		'label'  => null,
		'labels' => [
			'name'               => 'Услуги', // основное название для типа записи
			'singular_name'      => 'Услуга', // название для одной записи этого типа
			'add_new'            => 'Добавить услугу', // для добавления новой записи
			'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
			'new_item'           => 'Новая услуга', // текст новой записи
			'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
			'search_items'       => 'Искать услугу', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Услуги', // название меню
		],
		'description'         => 'Дополнительные услуги для клиентов',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 22,
		'menu_icon'           => 'dashicons-portfolio',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	]);

	register_post_type('apartments', [
		'label'  => null,
		'labels' => [
			'name'               => 'Апартаменты', // основное название для типа записи
			'singular_name'      => 'Апартамент', // название для одной записи этого типа
			'add_new'            => 'Добавить апартамент', // для добавления новой записи
			'add_new_item'       => 'Добавление апартамента', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование апартамента', // для редактирования типа записи
			'new_item'           => 'Новый апартамент', // текст новой записи
			'view_item'          => 'Смотреть апартамент', // для просмотра записи этого типа.
			'search_items'       => 'Искать апартамент', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Апартаменты', // название меню
		],
		'description'         => 'Апартаменты для сдачи в аренду',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-admin-home',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	]);
}

add_action('after_setup_theme', function () {
	// * Add addional field to wp_nav_menu which allow adding classes for <li> nodes
	function add_additional_class_on_li($classes, $item, $args)
	{
		if (isset($args->li_class)) {
			$classes[] = $args->li_class;
		}
		return $classes;
	}

	add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
	// * Register menus
	register_nav_menus([
		'header_menu' => 'Меню в шапке',
		'footer_menu' => 'Меню в подвале'
	]);

	// * Include theme helpers
	require_once "include/aprt_helpers.php";
});

// * Register custom sidebars and widgets
add_action('widgets_init', function () {
	register_sidebar(
		[
			'id' => 'aprt_footer_1',
			'name' => 'Подвал - 1',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в первую колонку футера.',
			'before_widget' => '<div id="%1$s" class="foot widget footerwidget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="footerwidget__title">',
			'after_title' => '</h4>',
		]
	);

	register_sidebar(
		[
			'id' => 'aprt_footer_2',
			'name' => 'Подвал - 2',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их во вторую колонку футера.',
			'before_widget' => '<div id="%1$s" class="foot widget footerwidget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="footerwidget__title">',
			'after_title' => '</h4>',
		]
	);

	register_sidebar(
		[
			'id' => 'aprt_footer_3',
			'name' => 'Подвал - 3',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в третью колонку футера.',
			'before_widget' => '<div id="%1$s" class="foot widget footerwidget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="footerwidget__title">',
			'after_title' => '</h4>',
		]
	);

	register_sidebar(
		[
			'id' => 'aprt_footer_4',
			'name' => 'Подвал - 4',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в четвертую колонку футера.',
			'before_widget' => '<div id="%1$s" class="foot widget footerwidget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="footerwidget__title">',
			'after_title' => '</h4>',
		]
	);
});

// * Remove prefix like "Archive: ", "Рубрика: ", "Метка: ", etc. from archive page title
add_filter('get_the_archive_title', function ($title) {
	return preg_replace('~^[^:]+: ~', '', $title);
});

// * Set posts per page for specific cases
add_action('pre_get_posts', 'archive_posts_count', 1);
function archive_posts_count($query)
{
	if (is_admin() || !$query->is_main_query()) {
		return;
	}

	if ($query->is_post_type_archive("services")) {
		$query->set('posts_per_page', -1);
	}
}

// * Theme shortcodes
add_shortcode('aprt_phone_email', 'aprt_phone_email_shortcode');
function aprt_phone_email_shortcode($atts)
{
	$phone = carbon_get_theme_option('aprt_phone_number');
	$email = carbon_get_theme_option('aprt_email');
	ob_start();
?>
	<div class="phone_email">
		<div class="phone_email__item">
			<h4 class="phone_email__header">Наш телефон</h4>

			<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
		</div>

		<div class="phone_email__item">
			<h4 class="phone_email__header">Наш email</h4>

			<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
		</div>
	</div>
<?php
	return ob_get_clean();
}

add_shortcode('aprt_booking', 'aprt_booking_shortcode');
function aprt_booking_shortcode($atts)
{
	return 'HERE MUST BE BOOKING WIDGET MARKUP';
}
