      <!-- Footer -->
      <footer id="footer">
      <section>
        <ul class="icons">
          <?php if(get_field('social_twitter', 'option')): ?>
            <li><a href="<?php echo get_field('social_twitter', 'option') ?>" class="icon fa-twitter alt" target="_blank"><span class="label">Twitter</span></a></li>
          <?php endif; ?>
          <?php if(get_field('social_facebook', 'option')): ?>
            <li><a href="<?php echo get_field('social_facebook', 'option') ?>" class="icon fa-facebook alt" target="_blank"><span class="label">Facebook</span></a></li>
          <?php endif; ?>
          <?php if(get_field('social_instagram', 'option')): ?>
            <li><a href="<?php echo get_field('social_facebook', 'option') ?>" class="icon fa-instagram alt" target="_blank"><span class="label">Instagram</span></a></li>
          <?php endif; ?>
          <?php if(get_field('social_youtube', 'option')): ?>
            <li><a href="<?php echo get_field('social_youtube', 'option') ?>" class="icon fa-youtube alt" target="_blank"><span class="label">Youtube</span></a></li>
          <?php endif; ?>
          <?php if(get_field('social_googleplus', 'option')): ?>
            <li><a href="<?php echo get_field('social_googleplus', 'option') ?>" class="icon fa-google-plus alt" target="_blank"><span class="label">Google +</span></a></li>
          <?php endif; ?>
        </ul>
      </section>
      <section>
        <dl class="alt">
          <dt>Dirección </dt>
          <dd><?php echo esc_html( get_field('footer_direccion', 'option') ) ?> </dd>

          <dt>Teléfono</dt>
          <dd><?php echo esc_html( get_field('footer_tefefono', 'option') ) ?> </dd>

          <dt>Correo</dt>
          <dd><a href="#"><?php echo esc_html( get_field('footer_correo_electonico', 'option') ) ?> </a></dd>
        </dl>


      </section>
      <p class="copyright"> Desarrollado por <a href="https://html5up.net">Key Systems, C.A</a> | Todos los derechos reservados <?php echo date('Y') ?></p>

    </footer>

    </div>
    <?php wp_footer(); ?>
    <!-- Scripts -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.scrollex.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.scrolly.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/skel.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/util.js"></script>
    <!--[if lte IE 8]><script src="<?php echo get_template_directory_uri();?>/js/ie/respond.min.js"></script><![endif]-->
    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
  </body>
</html>
