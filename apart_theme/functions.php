<?php

// * Add Theme Styles and Scripts
add_action("wp_enqueue_scripts", function(){
	wp_enqueue_style( 'aprt-styles', get_stylesheet_directory_uri() . '/assets/main.css');
	wp_enqueue_script( 'aprt-scripts', get_stylesheet_directory_uri() . '/assets/main.js', array(), null, true );
});

// * Add theme support for some wordpress built-in features
add_theme_support('title-tag');
add_theme_support( 'html5', [
	'comment-list',
	'comment-form',
	'search-form',
	'gallery',
	'caption',
	'script',
	'style',
] );
add_theme_support( 'post-thumbnails' );

//* Add custom post types
add_action( 'init', 'register_post_types' );
function register_post_types() {
	register_post_type( 'services', [
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
			'show_in_rest'        => null, // добавить в REST API. C WP 4.7
			'rest_base'           => null, // $post_type. C WP 4.7
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-portfolio',
			//'capability_type'   => 'post',
			//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
			//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
			'hierarchical'        => false,
			'supports'            => [ 'title', 'excerpt', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'          => [],
			'has_archive'         => true,
			'rewrite'             => true,
			'query_var'           => true,
		] );
}