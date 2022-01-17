<?php

use Carbon_Fields\Field;
use Carbon_Fields\Widget;

class FooterContactsWidget extends Widget
{
	// Register widget function. Must have the same name as the class
	function __construct()
	{
		$this->setup('aprt_footer_contacts', 'Виджет контактов для подвала', 'Отображает номер телефона и email указанные в настройках сайта', [
			Field::make('text', 'title', 'Заголовок')
				->set_required(true),
		]);
	}

	// Called when rendering the widget in the front-end
	function front_end($args, $instance)
	{
		$sitePhone = carbon_get_theme_option('aprt_phone_number');
		$siteEmail = carbon_get_theme_option('aprt_email');

		echo $args['before_title'] . $instance['title'] . $args['after_title'];
		if (!$sitePhone && !$siteEmail) {
			return;
		}

		$menu_list = '<ul class="footerwidget__body">';

		$menu_list .= sprintf('<li class="footerwidget__grid"><span>Телефон:</span> <a href="tel:%s">%s</a></li>', $sitePhone, $sitePhone);
		$menu_list .= sprintf('<li class="footerwidget__grid"><span>Email:</span> <a href="mailto:%s">%s</a></li>', $siteEmail, $siteEmail);

		$menu_list .= '</ul>';

		echo $menu_list;
	}
}
