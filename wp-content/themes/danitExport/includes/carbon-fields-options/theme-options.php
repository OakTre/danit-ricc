<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Контакты')
  ->set_page_menu_position(4)
  ->set_icon('dashicons-image-filter')
  ->add_tab('Контакты', [
    Field::make('image', 'site_logo', 'Логотип')->set_width(50),
    Field::make('text', 'email', 'Контактный email')->set_width(50),
    Field::make('text', 'phone', 'Номер телефона(Foreign Trade Manager)')->set_width(50),
    Field::make('text', 'email2', 'Почта(Foreign Trade Manager)')->set_width(50),
    Field::make('text', 'name', 'Имя(Foreign Trade Manager)')->set_width(50),
    Field::make('text', 'social_linked', 'Ссылка на LinkedIn')->set_width(50),
    Field::make('text', 'social_wt', 'Ссылка на WhatsUp')->set_width(50),
    Field::make('file', 'file', 'Файл(Know more about IT- solutions in agriculture)')
      ->set_value_type('url')
  ]);
