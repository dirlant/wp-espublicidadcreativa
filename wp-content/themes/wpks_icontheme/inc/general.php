
<h2>Opciones del Tema</h2>

<div class="wrap">

  <?php
    if (isset($_GET['tab'])):
      $active_tab = $_GET['tab'];
    else:
      $active_tab = 'general';
    endif;

  ?>

  <h2 class="nav-tab-wrapper">
    <a href="?page=wpks_icontheme_ajustes&tab=general" class="nav-tab <?php echo $active_tab == 'general' ? 'nav-tab-active' : '' ?>"> Información</a>
    <a href="?page=wpks_icontheme_ajustes&tab=menu" class="nav-tab <?php echo $active_tab == 'menu' ? 'nav-tab-active' : '' ?>"> Menu</a>
    <a href="?page=wpks_icontheme_ajustes&tab=redes-sociales" class="nav-tab <?php echo $active_tab == 'redes-sociales' ? 'nav-tab-active' : '' ?>"> Redes Sociales</a>

  </h2>

  <form action="options.php" method="post">


    <!-- informacion general -->
    <?php if($active_tab == "general"): ?>

      <?php settings_fields( 'wpks_icontheme_opciones_informacion' ) ?>
      <?php do_settings_sections( 'wpks_icontheme_opciones_informacion' ) ?>
      <table class="form-table">
        <tr valing="top">
          <th scope="row" style="text-align: right;">Teléfono</th>
          <td><input type="number" name="wpks_icontheme_telefono" value="<?php echo esc_attr(get_option( 'wpks_icontheme_telefono')) ?>" size="40"></td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align: right;">E-mail</th>
          <td><input type="email" name="wpks_icontheme_email" value="<?php echo esc_attr(get_option( 'wpks_icontheme_email')) ?>" size="40"></td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align: right;">Dirección</th>
          <td><textarea name="wpks_icontheme_direccion" rows="8" cols="40"><?php echo esc_attr(get_option( 'wpks_icontheme_direccion')) ?></textarea></td>
        </tr>
      </table>

    <?php endif; ?>


    <!-- informacion del menu -->
    <?php if($active_tab == "menu"): ?>

      <?php settings_fields( 'wpks_icontheme_opciones_menu' ) ?>
      <?php do_settings_sections( 'wpks_icontheme_opciones_menu' ) ?>

      <table class="form-table">
        <tr valing="top">
          <th scope="row" style="text-align:right">Primer Bloque</th>
          <td><input type="text" name="wpks_icontheme_primer_bloque" value="<?php echo esc_attr(get_option( 'wpks_icontheme_primer_bloque')) ?>"></td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align:right">Segundo Bloque</th>
          <td><input type="text" name="wpks_icontheme_segundo_bloque" value="<?php echo esc_attr(get_option( 'wpks_icontheme_segundo_bloque')) ?>"></td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align:right">Tercer Bloque</th>
          <td><input type="text" name="wpks_icontheme_tercer_bloque" value="<?php echo esc_attr(get_option( 'wpks_icontheme_tercer_bloque')) ?>"></td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align:right">Cuarto Bloque</th>
          <td><input type="text" name="wpks_icontheme_cuarto_bloque" value="<?php echo esc_attr(get_option( 'wpks_icontheme_cuarto_bloque')) ?>" size="60"></td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align:right">Desactivarlo: </th>
          <td><input type="checkbox" name="wpks_icontheme_off_menu" value="1" <?php  echo get_option('wpks_icontheme_off_menu') == 1 ? 'checked' : ''; ?>></td>
        </tr>
      </table>

    <?php endif; ?>

    <!-- informacion del redes sociales -->
    <?php if($active_tab == "redes-sociales"): ?>

      <?php settings_fields( 'wpks_icontheme_opciones_redes_sociales' ) ?>
      <?php do_settings_sections( 'wpks_icontheme_opciones_redes_sociales' ) ?>

      <table class="form-table">
        <tr valing="top">
          <th scope="row" style="text-align:right"></th>
          <td>Enlace: ejmplo ->  https://www.instagram.com/keysystemsca/</td>
          <td>Activar</td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align:right">Facebook</th>
          <td><input type="text" name="wpks_icontheme_facebook" value="<?php echo esc_attr(get_option( 'wpks_icontheme_facebook')) ?>" size="80"></td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align:right">Twitter</th>
          <td><input type="text" name="wpks_icontheme_twitter" value="<?php echo esc_attr(get_option( 'wpks_icontheme_twitter')) ?>" size="80"></td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align:right">Instagram</th>
          <td><input type="text" name="wpks_icontheme_instagram" value="<?php echo esc_attr(get_option( 'wpks_icontheme_instagram')) ?>" size="80"></td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align:right">Youtube</th>
          <td><input type="text" name="wpks_icontheme_youtube" value="<?php echo esc_attr(get_option( 'wpks_icontheme_youtube')) ?>" size="80"></td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align:right">Google +</th>
          <td><input type="text" name="wpks_icontheme_googleplus" value="<?php echo esc_attr(get_option( 'wpks_icontheme_googleplus')) ?>" size="80"></td>
        </tr>
        <tr valing="top">
          <th scope="row" style="text-align:right">Snapchat</th>
          <td><input type="text" name="wpks_icontheme_snapchat" value="<?php echo esc_attr(get_option( 'wpks_icontheme_snapchat')) ?>" size="80"></td>
        </tr>
      </table>

    <?php endif; ?>

    <?php submit_button( $text = null, $type = 'primary', $name = 'submit', $wrap = true, $other_attributes = null ) ?>
  </form>
</div>
