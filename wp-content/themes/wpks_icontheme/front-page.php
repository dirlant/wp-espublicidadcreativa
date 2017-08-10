<?php get_header() ?>

	<body>

    <?php while (have_posts()): the_post(); ?>

		  <!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<span class="logo">
						<?php if(get_field('header_logo', 'option')):?>
							<img src="<?php echo get_field('header_logo', 'option') ?>"  width="300"/>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri();?>/images/logo_icon_theme.png"  width="300"/>
						<?php endif; ?>
					</span>

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
				</header>

				<!-- Menu -->

				<?php
          $menu_name = 'header-menu'; //menu slug
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
          $menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
        ?>

        <nav id="nav">
					<ul>
						<?php if(get_field('menu_activar', 'option') == false): ?>

							<?php foreach ($menu_items as $index): ?>
	              <li><a href="<?php echo $index->url ?>"><?php echo $index->title ?></a></li>
	            <?php endforeach; ?>

						<?php else: ?>
							<li><a href="#intro"><?php echo esc_html( get_field('menu_link_1', 'option') ) ?></a></li>
							<li><a href="#first"><?php echo esc_html( get_field('menu_link_2', 'option') ) ?></a></li>
							<li><a href="#second"><?php echo esc_html( get_field('menu_link_3', 'option') ) ?></a></li>
							<li><a href="#cta"><?php echo esc_html( get_field('menu_link_4', 'option') ) ?></a></li>
						<?php endif; ?>
					</ul>
				</nav>

				<!-- Main -->
				<div id="main">
          <?php
            $query = get_posts(
                      array(
                          'name'      => 'inicio',
                          'post_type' => 'page'
                      )
                    );
          ?>
					<!-- Introduction -->
					<section id="intro" class="main">
              <div class="spotlight">
  							<div class="content">
  								<header class="major" align="center">
  									<h2><?php echo get_field('bloque1_grupo_1_titulo', 'option') ?></h2>
  								</header>
  								<p><?php echo get_field('bloque1_grupo_1_texto', 'option') ?></p>
  							</div>
  						</div>

					</section>

					<section id="first" class="main special">

						<header class="major">
							<h2><?php echo trim(get_field('bloque2_titulo', 'option')) ?></h2>
						</header>
						<ul class="features">
							<li>
								<span class="icon major <?php echo trim(get_field('bloque2_grupo_1_icono', 'option')) ?>" style="color: <?php echo get_field('bloque2_grupo_1_color', 'option') ?>"></span>
								<h3><?php echo get_field('bloque2_grupo_1_titulo', 'option') ?></h3>
								<p><?php echo get_field('bloque2_grupo_1_texto', 'option') ?></p>
							</li>
							<li>
								<span class="icon major style3 <?php echo trim(get_field('bloque2_grupo_2_icono', 'option')) ?>" style="color: <?php echo get_field('bloque2_grupo_2_color', 'option') ?>"></span>
                <h3><?php echo get_field('bloque2_grupo_2_titulo', 'option') ?></h3>
								<p><?php echo get_field('bloque2_grupo_2_texto', 'option') ?></p>
							</li>
							<li>
								<span class="icon major style5 <?php echo trim(get_field('bloque2_grupo_3_icono', 'option')) ?>" style="color: <?php echo get_field('bloque2_grupo_3_color', 'option') ?>"></span>
                <h3><?php echo get_field('bloque2_grupo_3_titulo', 'option') ?></h3>
								<p><?php echo get_field('bloque2_grupo_3_texto', 'option') ?></p>
							</li>
						</ul>
					</section>

					<!-- Second Section -->
					<section id="second" class="main special">
						<header class="major">
							<h2><?php echo get_field('bloque3_titulo', 'option') ?></h2>
						</header>
						<ul class="statistics">
							<li class="style1" style="color: <?php echo get_field('bloque3_grupo_1_color', 'option') ?>">
								<span class="icon <?php echo trim(get_field('bloque3_grupo_1_icono', 'option')) ?>"></span>
								<strong></strong><?php echo get_field('bloque3_grupo_1_titulo', 'option') ?>
							</li>
							<li class="style2" style="color: <?php echo get_field('bloque3_grupo_2_color', 'option') ?>">
								<span class="icon <?php echo trim(get_field('bloque3_grupo_2_icono', 'option')) ?>"></span>
								<strong></strong><?php echo get_field('bloque3_grupo_2_titulo', 'option') ?>
							</li>
							<li class="style3" style="color: <?php echo get_field('bloque3_grupo_3_color', 'option') ?>">
								<span class="icon <?php echo trim(get_field('bloque3_grupo_3_icono', 'option')) ?>"></span>
								<strong></strong><?php echo get_field('bloque3_grupo_3_titulo', 'option') ?>
							</li>
							<li class="style4" style="color: <?php echo get_field('bloque3_grupo_4_color', 'option') ?>">
								<span class="icon <?php echo trim(get_field('bloque3_grupo_4_icono', 'option')) ?>"></span>
								<strong></strong><?php echo get_field('bloque3_grupo_4_titulo', 'option') ?>
							</li>
							<li class="style5" style="color: <?php echo get_field('bloque3_grupo_5_color', 'option') ?>">
								<span class="icon <?php echo trim(get_field('bloque3_grupo_5_icono', 'option')) ?>"></span>
								<strong></strong><?php echo get_field('bloque3_grupo_5_titulo', 'option') ?>
							</li>
						</ul>
					</section>

					<!-- Get Started -->
					<section id="cta" class="main special">
						<header class="major">
							<h2><?php echo esc_html( get_field('bloque4_titulo', 'option') ) ?></h2>
							<?php echo esc_html( get_field('bloque4_texto', 'option') ) ?>
						</header>
						<footer class="major">
							<ul class="actions">
								<li><a href="<?php echo esc_html( get_field('bloque4_grupo1_link', 'option') ) ?>" target="_blank" class="button"><?php echo esc_html( get_field('bloque4_grupo1_titulo', 'option') ) ?></a></li>
								<li><a href="<?php echo esc_html( get_field('bloque4_grupo2_link', 'option') ) ?>" target="_blank" class="button"><?php echo esc_html( get_field('bloque4_grupo2_titulo', 'option') ) ?></a></li>
							</ul>
						</footer>
					</section>
				</div>
  <?php endwhile; ?>
<?php get_footer() ?>
