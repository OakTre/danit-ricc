<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content=" ">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>Danit</title>
  <?php wp_head(); ?>
</head>

<body class="page-home">
  <div class="menu js-menu">
    <div class="site-container menu__container">
      <div class="menu__heading">
        <a class="menu__logo" href="<?php echo get_home_url(); ?>">
          <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo')); ?>" alt="Company Logo">
        </a>
        <button class="menu__btn js-menu-btn-close"><span></span><span></span>
        </button>
      </div>
      <a class="menu__link-nav" href="#danit">Danit</a>
      <a class="menu__link-nav" href="#import">Import</a><span class="menu__legend _fw">Contact Us</span>
      <div class="menu__item"><span class="menu__legend">Want to know more about BI in agriculture?</span>
        <a class="menu__link" href="mailto:<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a>
      </div>
      <div class="menu__item"><span class="menu__legend">Foreign Trade Manager</span>
        <span class="menu__legend"><?php echo carbon_get_theme_option('name'); ?></span>
        <a class="menu__link" href="tel:<?php echo carbon_get_theme_option('phone'); ?>"><?php echo carbon_get_theme_option('phone'); ?></a>
        <a class="menu__link" href="mailto:<?php echo carbon_get_theme_option('email2'); ?>"><?php echo carbon_get_theme_option('email2'); ?></a>
      </div>
      <ul class="socials menu__socials">
        <li class="socials__item">
          <a class="socials__link" target="_blank" href="<?php echo carbon_get_theme_option('social_linked'); ?>">
            <svg class="icon icon-in socials__link-icon" width="32" height="32">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#in"></use>
            </svg>
          </a>
        </li>
        <li class="socials__item">
          <a class="socials__link" target="_blank" href="<?php echo carbon_get_theme_option('social_wt'); ?>">
            <svg class="icon icon-wa socials__link-icon" width="32" height="32">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprites/sprite-mono.svg#wa"></use>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="page-wrapper">

    <header class="header">
      <div class="site-container header__grid-container">
        <div class="header__grid-container-block">
          <a class="header__logo" href="/">
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo')); ?>" alt="Company Logo">
          </a>
        </div>
        <div class="header__grid-container-block">
          <nav class="header__nav">
            <ul class="header__nav-list">
              <li class="header__nav-item">
                <a class="header__nav-link" href="#danit">Danit</a>
              </li>
              <li class="header__nav-item">
                <a class="header__nav-link" href="#import">Import</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header__grid-container-block">
          <a class="button header__btn" href="#contactUs">Contact</a>
          <button class="header__burger-btn js-menu-btn"><span></span><span></span><span></span>
          </button>
        </div>
      </div>
    </header>

    <main class="page-main main">