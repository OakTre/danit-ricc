<?php
add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate

add_action("wp_enqueue_scripts", "site_scripts");

function site_scripts() {
  wp_dequeue_style( 'wp-block-library' );
  wp_deregister_script( 'wp-embed' );

  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'backend', get_template_directory_uri() . '/assets/css/backend.css', array(), '1.1.0' );
  wp_enqueue_script( 'axios', 'https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js', array(), '1.2.0', true );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.2.0', true );
  wp_enqueue_script( 'backend-js', get_template_directory_uri() . '/assets/js/backend.js', array(), '1.1.0', true );
}



add_action( 'after_setup_theme', 'theme_support' );
function theme_support() {
  register_nav_menu( 'main_menu_header', 'Меню главное' );
  add_theme_support('post-thumbnails');
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
  require_once( 'includes/carbon-fields-options/theme-options.php' );
  require_once( 'includes/carbon-fields-options/post-meta.php' );
}

// add_action('init', 'create_global_variable');
// function create_global_variable() {
//   global $kdw;
//   $kdw = [
//     'phone' => carbon_get_theme_option( 'site_phone' ),
//     'phone_digits' => substr_replace( preg_replace( "/[^0-9]/" , '' , carbon_get_theme_option( 'site_phone' ) ) , '+7' , 0 , 1 ),
//     'address' => carbon_get_theme_option( 'site_address'.carbon_lang() ),
//     'email' => carbon_get_theme_option( 'site_email' ),
//     'vk' => carbon_get_theme_option( 'vk' ),
//     'tg' => carbon_get_theme_option( 'tg' ),
//     'button_reg' => carbon_get_theme_option( 'button_reg'.carbon_lang() ),
//   ];
// }

?>
