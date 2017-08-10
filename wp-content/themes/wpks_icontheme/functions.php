<?php

if (function_exists('acf_add_options_page')) {

  $parent = acf_add_options_page(array(
    'page_title' => 'Configuraciones Generales',
    'menu_title' => 'General',
    'menu_slug' => 'general',
    'capability' => 'edit_posts',
    'position' => false,
    'icon_url' => false,
    'redirect' => false
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Header',
    'menu_title' => 'Header',
    'menu_slug' => $parent['menu_slug'].'-header',
    'capability' => 'edit_posts',
    'parent_slug' => $parent['menu_slug'],
    'position' => false,
    'icon_url' => false
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Menu',
    'menu_title' => 'Menu',
    'menu_slug' => $parent['menu_slug'].'-menu',
    'capability' => 'edit_posts',
    'parent_slug' => $parent['menu_slug'],
    'position' => false,
    'icon_url' => false
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Footer',
    'menu_title' => 'Footer',
    'menu_slug' => $parent['menu_slug'].'-footer',
    'capability' => 'edit_posts',
    'parent_slug' => $parent['menu_slug'],
    'position' => false,
    'icon_url' => false
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Social Media',
    'menu_title' => 'Social Media',
    'menu_slug' => $parent['menu_slug'].'-social',
    'capability' => 'edit_posts',
    'parent_slug' => $parent['menu_slug'],
    'position' => false,
    'icon_url' => false
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Primer Bloque',
    'menu_title' => 'Primer Bloque',
    'menu_slug' => $parent['menu_slug'].'-primer-bloque',
    'capability' => 'edit_posts',
    'parent_slug' => $parent['menu_slug'],
    'position' => false,
    'icon_url' => false
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Segundo Bloque',
    'menu_title' => 'Segundo Bloque',
    'menu_slug' => $parent['menu_slug'].'-segundo-bloque',
    'capability' => 'edit_posts',
    'parent_slug' => $parent['menu_slug'],
    'position' => false,
    'icon_url' => false
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Tercer Bloque',
    'menu_title' => 'Tercer Bloque',
    'menu_slug' => $parent['menu_slug'].'-tercer-bloque',
    'capability' => 'edit_posts',
    'parent_slug' => $parent['menu_slug'],
    'position' => false,
    'icon_url' => false
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Cuarto Bloque',
    'menu_title' => 'Cuarto Bloque',
    'menu_slug' => $parent['menu_slug'].'-cuarto-bloque',
    'capability' => 'edit_posts',
    'parent_slug' => $parent['menu_slug'],
    'position' => false,
    'icon_url' => false
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Post Settings',
    'menu_title' => 'Post Settings',
    'menu_slug' => 'post-settings',
    'capability' => 'edit_posts',
    'parent_slug' => 'edit.php',
    'position' => false,
    'icon_url' => false
  ));

}
// Llamados a las librerias
function wpks_icontheme_styles(){

  // Registrando los estilos
  wp_register_style('normalize', $src = get_template_directory_uri() . '/css/normalize.css', $deps = array(), $ver = 'v7.0.0' );
  wp_register_style('google_fonts', $src = 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900', $deps = array(), $ver = 'v1.0.0');
  wp_register_style('fontawesome', $src = get_template_directory_uri() . '/css/font-awesome.min.css', $deps = array('normalize'), $ver = 'v4.7.0' );
  wp_register_style('style', $src = get_template_directory_uri() . '/style.css', $deps = array('normalize'), $ver = 'v1.0.0' );

  // Llamando a los estilos
  wp_enqueue_style('normalize');
  wp_enqueue_style('google_fonts');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('style');

  // Registrando JS
  wp_register_script('scripts', $src = get_template_directory_uri() . '/js/scripts.js', $deps = array(), $ver = 'v1.0.0', $in_footer = true );

  // Llamando a los scripts
  wp_enqueue_script('jquery');
  wp_enqueue_script('scripts');
}

add_action( 'wp_enqueue_scripts', 'wpks_icontheme_styles');

// Creacion de menus disponibles
function wpks_icontheme_menus(){
  register_nav_menus( $locations = array(
    'header-menu' => __('Principal Menu', 'espublicidadcreativa'),
    'social-menu' => __('Social Menu', 'espublicidadcreativa')
  ));
}

add_action( 'init', 'wpks_icontheme_menus' );


// Llamando a la funcion de imagen destacada
function wpks_icontheme_setup(){
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wpks_icontheme_setup');


add_filter('acf/settings/show_admin', '__return_false');

?>
