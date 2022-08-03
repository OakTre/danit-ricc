<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Дополнительные поля')
  ->show_on_page(6)

  ->add_tab('Первый экран', [
    Field::make('rich_text', 'intro_text_top', 'Текст сверху')
      ->set_width(50),
    Field::make('rich_text', 'intro_text_bottom', 'Текст снизу')
      ->set_width(50),
    Field::make('image', 'intro_img', 'Изображение на фоне')
  ])
  ->add_tab('Второй экран(DANIT)', [
    Field::make('rich_text', 'danit_about', 'Текст описание'),
    Field::make('complex', 'danit_list', 'Список слайдера')
      ->add_fields([
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('text', 'title', 'Текст')->set_width(50),
      ]),
  ])
  ->add_tab('Третий экран(IMPORT POS.)', [
    Field::make('rich_text', 'import_text', 'Текст-описание'),
    Field::make('complex', 'import_list', 'Список слайдера')
      ->add_fields([
        Field::make('text', 'text', 'Заголовок')->set_width(50),
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('rich_text', 'descr', 'Текст')->set_width(50),
      ]),
  ])
  ->add_tab('Четвертый экран(HOW IT WORKS)', [
    Field::make('text', 'howitworks_heading', 'Заголовок'),
    Field::make('image', 'howitworks_img', 'Изображение')->set_width(50),
    Field::make('rich_text', 'howitworks_text', 'Текст-описание')->set_width(50),
  ])
  ->add_tab('Пятый экран(WE TAKE CARE)', [
    Field::make('complex', 'careof_list', 'Список')
      ->add_fields([
        Field::make('text', 'text', 'Заголовок')->set_width(50),
        Field::make('image', 'img', 'Изображение')->set_width(50),
      ]),
  ]);
