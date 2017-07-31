<?php

function wpks_landing_ajustes(){
  add_menu_page( 'Landing', 'Ajustes del tema', 'administrator', 'wpks_landing_ajustes', $function = 'wpks_landing_opciones', $icon_url = '', $position = 20 );
  add_submenu_page( 'wpks_landing_ajustes', 'Reservaciones', 'Reservaciones', 'administrator', 'lapizzeria_reservaciones', $function = 'lapizzeria_reservaciones' );
  
  // Llamar a la funcion de registro de nuestro tema
  add_action( 'admin_init', 'wpks_landing_registrar_opciones');
}

add_action( 'admin_menu', 'wpks_landing_ajustes');

function wpks_landing_registrar_opciones(){
  // Registrar opciones, una por campo
  register_setting( 'wpks_landing_opciones_grupo', 'lapizzeria_direccion');
  register_setting( 'wpks_landing_opciones_grupo', 'lapizzeria_telefono');

  register_setting( 'wpks_landing_opciones_google_maps', 'lapizzeria_latitud');
  register_setting( 'wpks_landing_opciones_google_maps', 'lapizzeria_longitud');
  register_setting( 'wpks_landing_opciones_google_maps', 'lapizzeria_zoom');
  register_setting( 'wpks_landing_opciones_google_maps', 'lapizzeria_apikey');
}


?>
