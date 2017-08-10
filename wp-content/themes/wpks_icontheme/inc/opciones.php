<?php

function wpks_icontheme_ajustes(){
  add_menu_page( 'Landing', 'Ajustes del tema', 'administrator', 'wpks_icontheme_ajustes', $function = 'wpks_icontheme_opciones', $icon_url = '', $position = 20 );

  // Campos asociados al tema
  add_action( 'admin_init', 'wpks_icontheme_campos');
  add_action( 'admin_init', 'wpks_icontheme_redes_sociales');
}

add_action( 'admin_menu', 'wpks_icontheme_ajustes');

function wpks_icontheme_campos(){
  // Registrar opciones, una por campo
  register_setting( 'wpks_icontheme_opciones_informacion', 'wpks_icontheme_telefono');
  register_setting( 'wpks_icontheme_opciones_informacion', 'wpks_icontheme_direccion');
  register_setting( 'wpks_icontheme_opciones_informacion', 'wpks_icontheme_email');

  register_setting( 'wpks_icontheme_opciones_menu', 'wpks_icontheme_primer_bloque');
  register_setting( 'wpks_icontheme_opciones_menu', 'wpks_icontheme_segundo_bloque');
  register_setting( 'wpks_icontheme_opciones_menu', 'wpks_icontheme_tercer_bloque');
  register_setting( 'wpks_icontheme_opciones_menu', 'wpks_icontheme_cuarto_bloque');
  register_setting( 'wpks_icontheme_opciones_menu', 'wpks_icontheme_off_menu');

}

function wpks_icontheme_redes_sociales(){
  register_setting( 'wpks_icontheme_opciones_redes_sociales', 'wpks_icontheme_facebook');
  register_setting( 'wpks_icontheme_opciones_redes_sociales', 'wpks_icontheme_instagram');
  register_setting( 'wpks_icontheme_opciones_redes_sociales', 'wpks_icontheme_twitter');
  register_setting( 'wpks_icontheme_opciones_redes_sociales', 'wpks_icontheme_youtube');
  register_setting( 'wpks_icontheme_opciones_redes_sociales', 'wpks_icontheme_googleplus');
  register_setting( 'wpks_icontheme_opciones_redes_sociales', 'wpks_icontheme_snapchat');
}
function wpks_icontheme_opciones(){
  include 'general.php';
}


?>
